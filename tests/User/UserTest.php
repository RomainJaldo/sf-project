<?php
/**
 * Created by PhpStorm.
 * User: jaldo
 * Date: 19/11/2018
 * Time: 14:36
 */

namespace App\Tests\User;

use App\Entity\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    public function testGetUserId()
    {
        $user = new User();
        $result = $user->getId();

        // assert that your calculator added the numbers correctly!
        $this->assertSame(null, $result);
    }

    public function testSetUserName()
    {
        $user = new User();
        $name = "James Bond";
        $user->setName($name);
        $result = $user->getName();

        // assert that your calculator added the numbers correctly!
        $this->assertSame($name, $result);
    }
}