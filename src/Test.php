<?php
/**
 * Created by PhpStorm.
 * User: skirejewski
 * Date: 11.01.17
 * Time: 13:36
 */

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/bootstrap.php');
$container = $builder->build();

$mailer = $container->get('Test\Dummy\Mailer');
var_dump($mailer->getUser());

