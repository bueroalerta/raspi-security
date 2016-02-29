<?php

namespace RasPiSecurity;

use RasPiSecurity\Controller\DashboardController;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class RasPiSecurityKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        return array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        );
    }

    public function getRootDir()
    {
        return realpath(dirname(__DIR__) . '/..');
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config.yml');

        if (file_exists($localPath = $this->getRootDir().'/config/local.yml')) {
            $loader->load($localPath);
        }

        $loader->load($this->getRootDir().'/config/services.yml');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $controller = new DashboardController();

        $routes->add('/', 'RasPiSecurity\Controller\IndexController::indexAction', 'index');

        $routes->add('/login', 'RasPiSecurity\Controller\AuthController::loginAction', 'login');
        $routes->add('/logout', 'RasPiSecurity\Controller\AuthController::logoutAction', 'logout');

        $routes->add('/pi/{pi}', 'RasPiSecurity\Controller\DashboardController::dashboardAction', 'dashboard');
        $routes->add('/pi/{pi}/stream', 'RasPiSecurity\Controller\StreamController::streamAction', 'stream');
        $routes->add('/pi/{pi}/snapshot', 'RasPiSecurity\Controller\SnapshotController::snapshotAction', 'snapshot');
        $routes->add('/pi/{pi}/history', 'RasPiSecurity\Controller\HistoryController::historyAction', 'history');
        $routes->add('/pi/{pi}/history/{type}', 'RasPiSecurity\Controller\HistoryController::historyAction', 'history_type');
        $routes->add('/pi/{pi}/embed/{type}', 'RasPiSecurity\Controller\EmbedController::embedAction', 'embed');
    }
}
