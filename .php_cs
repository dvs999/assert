<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

$header = <<<TXT
Assert

LICENSE

This source file is subject to the MIT license that is bundled
with this package in the file LICENSE.txt.
If you did not receive a copy of the license and are unable to
obtain it through the world-wide-web, please send an email
to kontakt@beberlei.de so I can send you a copy immediately.
TXT;

$rules = array(
    'psr0' => false,
    '@PSR2' => true,
    'header_comment' => array(
        'header' => $header,
        'commentType' => PhpCsFixer\Fixer\Comment\HeaderCommentFixer::HEADER_PHPDOC,
    ),
);

$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder)
    ->setCacheFile($cacheDir . '/.php_cs.cache');
