<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserProviderInterface;

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
        $response=json_decode($data);
        return new JsonResponse($response,200);

    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {
        $data = $this->get('jms_serializer')->serialize($user, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }



    /**
     * @Rest\Route("addFriend/{currentId}/{friendId}")
     * @ParamConverter("me", class="AppBundle:User")
     * @ParamConverter("myFriend", class="AppBundle:User")
     * @Template()
     *
     */
    public function addFriendAction(Request $request, User $myFriend, ObjectManager $manager, UserProviderInterface $userProvider)
    {
        $user = $this->getUser();
        $user->addMyFriend($myFriend);
        $manager->persist($myFriend);
        $manager->flush();

        return header("HTTP/1.1 200 OK");
    }


    public function removeFriendAction(Request $request, User $myFriends, ObjectManager $manager)
    {
        $user = $this->getUser();
        $user->removeMyFriend($myFriends);
        $manager->flush();

        return header("HTTP/1.1 200 OK");
    }



    public function updateUserAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $user User */

        if (empty($user)) {
            return new JsonResponse(['message' => "Ce pacman n'existe pas"], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }


    public function patchUserAction(Request $request)
    {
        return $this->updateUser($request, false);
    }

    private function updateUser(Request $request, $clearMissing)
    {
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->find($request->get('id'));
        /* @var $user User */

        if (empty($user)) {
            return new JsonResponse(['message' => 'Pacman not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }
}
