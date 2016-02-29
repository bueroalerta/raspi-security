<?php

namespace RasPiSecurity;

use Symfony\Component\HttpFoundation\RequestStack;

class Security
{
    /**
     * @var []
     */
    private $users;

    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * @param [] $users
     */
    public function __construct(array $users, RequestStack $requestStack)
    {
        $this->users = $users;
        $this->requestStack = $requestStack;
    }

    /**
     * @return boolean
     */
    public function isAuthEnabled()
    {
        if (!$this->users) {
            return false;
        }

        return true;
    }

    /**
     * @return boolean
     */
    public function isLoggedIn()
    {
        if (!$this->isAuthEnabled()) {
            return true;
        }

        return (boolean) $this->requestStack->getCurrentRequest()->getSession()->get('isLoggedIn');
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return boolean
     */
    public function checkLogin($username, $password)
    {
        if (!$this->isAuthEnabled()) {
            return true;
        }

        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }

        return false;
    }
}
