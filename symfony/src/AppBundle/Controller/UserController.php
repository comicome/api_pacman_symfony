<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    public function indexAction()
    {
        $users=$this->getDoctrine()->getRepository('AppBundle:User')->findAll();

        if (!count($users)){
            $response=array(
                'code'=>1,
                'message'=>'No users found!',
                'errors'=>null,
                'result'=>null
            );
            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }
        $data=$this->get('jms_serializer')->serialize($users,'json');
        $response=array(
            'code'=>0,
            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)
        );
        return new JsonResponse($response,200);

    }

    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {

        $user=$this->getDoctrine()->getRepository('AppBundle:User')->findOneBy([
            'id' => $user->getId(),
            'username' => $user->getUsername(),
        ]);

        if (empty($user)){
            $response=array(
                'code'=>1,
                'message'=>'User not found',
                'error'=>null,
                'result'=>null
            );
            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }
        $data=$this->get('jms_serializer')->serialize($user,'json');
        $response=array(
            'code'=>0,
            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)
        );
        return new JsonResponse($response,200);
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @Route("/addFriend/{id}", name="add_friend")
     * @param Request $request
     * @param User $user
     * @param ObjectManager $manager
     * @return int|string
     */
    public function addFriendAction(Request $request, User $myFriends, ObjectManager $manager)
    {

        $user = $this->getUser();
        $user->addMyFriend($myFriends);
        $manager->persist($myFriends);
        $manager->flush();


        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/deleteFriend/{id}", name="remove_friend")
     * @param Request $request
     * @param User $user
     * @param ObjectManager $manager
     * @return int|string
     */
    public function removeFriendAction(Request $request, User $myFriends, ObjectManager $manager)
    {

        $user = $this->getUser();
        $user->removeMyFriend($myFriends);
        $manager->flush();

        return $this->redirectToRoute('user_index');
    }

}
