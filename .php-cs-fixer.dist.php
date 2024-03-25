<?php

use PhpCsFixer\Finder;

/** @var PhpCsFixer\Config $config */
$config = require __DIR__ . '/vendor/vanchisto/php-code-style/php-cs-fixer-config.php';

$finder = (new Finder())->in(__DIR__);

return $config->setFinder($finder);
