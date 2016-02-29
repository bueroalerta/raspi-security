<?php

namespace RasPiSecurity\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

abstract class BaseController extends Controller
{
    /**
     * @return \RasPiSecurity\Security
     */
    protected function getSecurity()
    {
        return $this->container->get('security');
    }

    /**
     * @return boolean
     */
    protected function isLoggedIn()
    {
        return $this->getSecurity()->isLoggedIn();
    }

    /**
     * @param Request $request
     * @param string $page
     * @param array $data
     *
     * @return Response
     */
    protected function renderPage(Request $request, $page, array $data = [])
    {
        return $this->container->get('page_renderer')
            ->renderPage($request, $page, $data);
    }
}
