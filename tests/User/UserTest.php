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


class UserTest
{
    public function getUserIdTest()
    {
        $user = new User();
        $result = $user->getId();

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(1, $result);
    }

    public function setUserNameTest()
    {
        $user = new User();
        $name = "James Bond";
        $result = $user->setName($name);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals($name, $result);
    }
}