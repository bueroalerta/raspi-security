<?php

namespace RasPiSecurity\Controller;

use Symfony\Component\HttpFoundation\Request;

class HistoryController extends BaseController
{
    public function historyAction(Request $request, $pi, $type = 'images')
    {
        $page = $request->query->get('page', 1);

        $motionImagesPath = $this->container->getParameter('motion_path');

        $files = $this->container->get('files_repository')
            ->getFiles($motionImagesPath, $pi, $type, $page);

        return $this->renderPage($request, sprintf('pi/%s', $type), [
            'page' => $page,
            'nextPage' => $page + 1,
            'prevPage' => $page - 1,
            'currentPi' => $pi,
            'perPage' => $this->container->getParameter('history_per_page'),
            'type' => $type,
            'files' => $files,
        ]);
    }
}
