<?php

/**
 * Assert
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

namespace Assert\Tests;

use Assert\Assertion;

class AssertionCodesUniqueTest extends \PHPUnit_Framework_TestCase
{
    public function testAssertionCodesAreUnique()
    {
        $assertReflection = new \ReflectionClass('Assert\Assertion');
        $constants        = $assertReflection->getConstants();

        Assertion::eq(count($constants), count(array_unique($constants)));
    }
}
