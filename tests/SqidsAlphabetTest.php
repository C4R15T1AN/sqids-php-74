<?php

/**
 * Copyright (c) Sqids maintainers.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/sqids/sqids-php
 */

namespace Sqids\Tests;

use Sqids\Sqids;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SqidsAlphabetTest extends TestCase
{
    public function testSimple()
    {
        $sqids = new Sqids('0123456789abcdef');

        $numbers = [1, 2, 3];
        $id = '4d9fd2';

        $this->assertSame($id, $sqids->encode($numbers));
        $this->assertSame($numbers, $sqids->decode($id));
    }

    // public function testShortAlphabet()
    // {
    //     $sqids = new Sqids('abcde');

    //     $numbers = [1, 2, 3];
    //     $this->assertSame($numbers, $sqids->decode($sqids->encode($numbers)));
    // }

    public function testLongAlphabet()
    {
        $sqids = new Sqids('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+|{}[];:\'"/?.>,<`~');

        $numbers = [1, 2, 3];
        $this->assertSame($numbers, $sqids->decode($sqids->encode($numbers)));
    }

    public function testRepeatingAlphabetCharacters()
    {
        $this->expectException(InvalidArgumentException::class);
        new Sqids('aabcdefg');
    }

    public function testTooShortAlphabet()
    {
        $this->expectException(InvalidArgumentException::class);
        new Sqids('abcd');
    }
}