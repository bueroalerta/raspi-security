<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class DashboardController extends BaseController
{
    public function dashboardAction(Request $request, $pi)
    {
        return $this->renderPage($request, 'pi/dashboard', [
            'currentPi' => $pi,
        ]);
    }
}
