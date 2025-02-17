<?php

/**
 * mkdir templating/
 * cd templating/
 * 
 * composer require symfony/templating
*/

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;

$filesystemLoader = new FilesystemLoader(__DIR__.'/views/%name%');

$templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
$templating->set(new SlotsHelper());

echo $templating->render('hello.php', ['firstname' => 'Fabien']);