<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    private $user;

    public function setUp() : void {
      $this->user = new User();

      $this->user->setEmail( 'bhattaganesh05@gmail.com' );
      $this->user->setFirstName( '  Ganesh    ' );
      $this->user->setLastName( 'Bhatta ' );
    }

    function test_that_we_can_get_the_first_name() {

        $this->assertEquals( $this->user->getFirstName(),'Ganesh' );
    }

    function test_that_we_can_get_the_last_name() {

        $this->assertEquals( $this->user->getLastName(),'Bhatta' );
    }

    function test_full_name_is_returned() {

        $this->assertEquals( $this->user->getFullName(),'Ganesh Bhatta' );
    }

    function test_first_and_last_name_are_trimmed() {

        $this->assertEquals( $this->user->getFirstName(),'Ganesh' );
        $this->assertEquals( $this->user->getLastName(),'Bhatta' );
    }

    function test_that_we_can_get_the_email() {

        $this->assertEquals( $this->user->getEmail(),'bhattaganesh05@gmail.com' );
    }

    function test_user_info() {

        $user_info = $this->user->getUserInfo();

        $this->assertArrayHasKey('full_name',$user_info);
        $this->assertArrayHasKey('email',$user_info);

        $this->assertEquals( $this->user->getEmail(),'bhattaganesh05@gmail.com' );
        $this->assertEquals( $this->user->getFullName(),'Ganesh Bhatta' );
    }
}
