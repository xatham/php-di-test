<?php
/**
 * Created by PhpStorm.
 * User: skirejewski
 * Date: 11.01.17
 * Time: 13:37
 */
namespace Test\Dummy;

class Mailer {

    protected $user = null;

    public function __construct(UserManager $userManager) {
        $this->user = $userManager;
    }

    public function getUser() {
        return $this->user;
    }
}