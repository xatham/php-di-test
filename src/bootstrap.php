<?php
/**
 * Created by PhpStorm.
 * User: skirejewski
 * Date: 11.01.17
 * Time: 13:51
 */
use function DI\object;
use function DI\get;

$services = [
    '\Test\Dummy\Mailer' => object('\Test\Dummy\Mailer')
];

return $services;
