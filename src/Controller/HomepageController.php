<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     * @Template
     */
    public function index()
    {
    }

    /**
     * @Route("/projects", name="homepage_projects", methods={"GET"})
     * @Template
     */
    public function projects()
    {
    }
}
