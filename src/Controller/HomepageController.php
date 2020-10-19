<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\KernelInterface;
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
	 * @Route("/cv", name="homepage_cv", methods={"GET"})
	 * @Template
	 */
	public function cv()
	{
	}

	/**
	 * @Route("/CGV", name="cgv", methods={"GET"})
	 * @param KernelInterface $kernel
	 * @return BinaryFileResponse
	 */
	public function cgv(KernelInterface $kernel)
	{
		$cgvpath = $kernel->getProjectDir().'/storage/cgv/CGV_adriengras_rev1.pdf';
		$response = new BinaryFileResponse($cgvpath);
		$response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE, 'CGV_adriengras_rev1.pdf');
		return $response;
	}

	/**
	 * @Route("/services", name="homepage_services", methods={"GET"})
	 * @Template
	 */
	public function services()
	{
		// not implemented yet
		return $this->redirectToRoute('homepage');
	}

	/**
	 * @Route("/projects", name="homepage_projects", methods={"GET"})
	 * @Template
	 */
	public function projects()
	{
		// not implemented yet
		return $this->redirectToRoute('homepage');
	}
}
