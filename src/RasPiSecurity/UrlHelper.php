<?php

namespace RasPiSecurity;

use Symfony\Bundle\FrameworkBundle\Routing\Router;

class UrlHelper
{
    /**
     * @var Router
     */
    private $router;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @param Router $router
     * @param string $baseUrl
     */
    public function __construct(Router $router, $baseUrl)
    {
        $this->router = $router;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $routeName
     * @param [] $params
     *
     * @return string
     */
    public function generate($routeName, array $params = [])
    {
        if (preg_match('/(css|img|js|motion-images)/', $routeName)) {
            return $this->baseUrl.$routeName;
        }

        return $this->router->generate($routeName, $params);
    }
}
