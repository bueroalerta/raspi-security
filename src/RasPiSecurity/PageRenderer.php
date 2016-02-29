<?php

namespace RasPiSecurity;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;

class PageRenderer
{
    /**
     * @var PiRepository
     */
    private $piRepository;

    /**
     * @var Security
     */
    private $security;

    /**
     * @var UrlHelper
     */
    private $urlHelper;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $version;

    /**
     * @param PiRepository $piRepository
     * @param Security $security
     * @param UrlHelper $urlHelper
     * @param string $baseUrl
     * @param string $title
     * @param string $version
     */
    public function __construct(
        PiRepository $piRepository,
        Security $security,
        UrlHelper $urlHelper,
        $baseUrl,
        $title,
        $version)
    {
        $this->piRepository = $piRepository;
        $this->security = $security;
        $this->urlHelper = $urlHelper;
        $this->baseUrl = $baseUrl;
        $this->title = $title;
        $this->version = $version;
    }

    /**
     * @param Request $request
     * @param string $page
     * @param array $data
     *
     * @return Response
     */
    public function renderPage(Request $request, $page, array $data = [])
    {
        if (!$this->security->isLoggedIn()) {
            return $this->doRenderPage($request, 'login', $data);
        }

        return $this->doRenderPage($request, $page, $data);
    }

    /**
     * @param Request $request
     * @param string $page
     * @param array $data
     *
     * @return Response
     */
    protected function doRenderPage(Request $request, $page, array $data = [])
    {
        $loader = new FilesystemLoader(__DIR__.'/../../views/%name%');

        $templating = new PhpEngine(new TemplateNameParser(), $loader);

        $pis = $this->piRepository->getPis();

        $data = array_merge([
            'pis' => $pis,
            'title' => $this->title,
            'version' => $this->version,
            'baseUrl' => $this->baseUrl,
            'request' => $request,
            'isLoggedIn' => $this->security->isLoggedIn(),
            'security' => $this->security,
            'url' => $this->urlHelper,
        ], $data);

        $content  = $templating->render('header.php', $data);
        $content .= $templating->render(sprintf('%s.php', $page), $data);
        $content .= $templating->render('footer.php', $data);

        return new Response($content);
    }
}
