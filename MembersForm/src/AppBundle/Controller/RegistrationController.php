<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Member;
use AppBundle\Form\Type\MemberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="registration")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registrationAction()
    {
        $member = new Member();

        $form = $this->createForm(MemberType::class, $member, [

        ]);

        return $this->render('registration/register.html.twig', [
            'registration_form' => $form->createView(),
        ]);
    }
}