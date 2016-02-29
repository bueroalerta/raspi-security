<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class IndexController extends BaseController
{
    public function indexAction(Request $request)
    {
        return $this->renderPage($request, 'index');
    }
}
