<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class AuthController extends BaseController
{
    public function loginAction(Request $request)
    {
        if ($request->getMethod() === 'POST') {
            $isLoginValid = $this->getSecurity()->checkLogin(
                $request->request->get('_username'),
                $request->request->get('_password')
            );

            if ($isLoginValid) {
                $request->getSession()->set('isLoggedIn', true);

                return $this->redirectToRoute('index');
            }
        }

        return $this->renderPage($request, 'login');
    }

    public function logoutAction(Request $request)
    {
        $request->getSession()->set('isLoggedIn', false);

        return $this->redirectToRoute('login');
    }
}
