<?php
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase{
    /** @test */
    function multiplication_of_two_number(){
        $a = 5;
        $b = 8;
        $c = $a*$b;
        $this->assertEquals($c, 40);
    }
}