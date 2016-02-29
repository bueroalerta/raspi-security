<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class SnapshotController extends BaseController
{
    public function snapshotAction(Request $request, $pi)
    {
        return $this->renderPage($request, 'snapshot', [
            'currentPi' => $pi,
        ]);
    }
}
