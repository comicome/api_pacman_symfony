<?php
/**
 * Created by PhpStorm.
 * User: Comicome
 * Date: 20/10/2018
 * Time: 15:23
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();

        $username = $request->request->get('username');
        $password = $request->request->get('password');
        $email = $request->request->get('email');
        $nourriture = $request->request->get('nourriture');
        $famille = $request->request->get('famille');
        $age = $request->request->get('age');
        $couleur = $request->request->get('couleur');

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setEmail($email);
        $user->setNourriture($nourriture);
        $user->setFamille($famille);
        $user->setAge($age);
        $user->setCouleur($couleur);
        $user->setEnabled(1);
        $em->persist($user);
        $em->flush();
        return new Response(sprintf('Utilisateur %s crée ', $user->getUsername()));
    }
    public function api()
    {
        return new Response(sprintf('Connecté en tant que %s ', $this->getUser()->getUsername()));
    }
}