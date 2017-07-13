<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\ContactFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SupportController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $form = $this->createForm(ContactFormType::class, null, [
            'action' => $this->generateUrl('handle-form-submission')
        ]);

        return $this->render('support/index.html.twig', [
            'my_form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @Route("/form-submission", name="handle-form-submission")
     * @Method("POST")
     */

    public function handleFormSubmissionAction(Request $request)
    {
        $form = $this->createForm(ContactFormType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {

            return $this->redirectToRoute('homepage');
        }

        $data = $form->getData();

        dump($data);

        $message = \Swift_Message::newInstance()
            ->setSubject('Suport Form Submission')
            ->setFrom($data['from'])
            ->setTo('some email')
            ->setBody(
                $form->getData()['message'],
                'text/plain'
            );

        $this->get('mailer')->send($message);

        $this->addFlash('Success', 'Your message was sent!');

        return $this->redirectToRoute('homepage');
    }
}
