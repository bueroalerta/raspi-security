<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class EmbedController extends BaseController
{
    public function embedAction(Request $request, $pi, $type)
    {
        return $this->renderPage($request, 'pi/embed', [
            'currentPi' => $pi,
            'type' => $type,
            'embedUrl' => $request->query->get('url'),
        ]);
    }
}
