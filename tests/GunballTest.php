<?php

use App\Gunball;
use PHPUnit\Framework\TestCase;

/**
 * Gunball test case.
 */
class GunballTest extends TestCase
{

    /**
     * Tests Gunball->getBall()
     */
    public function testGetBall()
    {
        $gb = new Gunball();
        $result = $gb->getBall();

        assertThat($result, is(equalTo(0)));
    }

    /**
     * Tests Gunball->setBall()
     * @expectedException \Exception
     */
    public function testSetBallNonNumeric()
    {
        $gb = new Gunball();

        $result = $gb->setBall(-10);
    }

    /**
     * Tests Gunball->setBall()
     */
    public function testSetBall()
    {
        $gb = new Gunball();

        $result = $gb->setBall(5)->getBall();
        assertThat($result, is(equalTo(5)));

        $result = $gb->setBall(5.5)->getBall();
        assertThat($result, is(equalTo(5)));
    }

    /**
     * Tests Gunball->fire()
     */
    public function testFire()
    {
        $gb = new Gunball();

        $result = $gb->setBall(10)->fire();

        $result = $gb->getBall();

        assertThat($result, is(equalTo(9)));
    }

    /**
     * Tests Gunball->fire()
     * @expectedException \Exception
     */
    public function testFireEmptyBalls()
    {
        $gb = new Gunball();

        $result = $gb->fire();
    }

}
