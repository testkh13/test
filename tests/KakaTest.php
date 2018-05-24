<?php

use App\Kaka;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * @package
 * @author    Kamil Haniszewski <kh@cinkciarz.pl>
 * @copyright 2018 Cinkciarz.pl Sp. z o.o.
 * @license   www.cinkciarz.pl For internal use only
 * @link      www.cinkciarz.pl
 */
class KakaTest extends TestCase
{
    public function testKaka()
    {
        $this->assertEquals('kaka', (new Kaka())->test());
    }

    public function testKaka2()
    {
        $this->assertEquals('kaka2', (new Kaka())->kaka2());
    }
}
