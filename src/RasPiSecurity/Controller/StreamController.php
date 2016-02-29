<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class StreamController extends BaseController
{
    public function streamAction(Request $request, $pi)
    {
        return $this->renderPage($request, 'stream', [
            'currentPi' => $pi,
        ]);
    }
}
