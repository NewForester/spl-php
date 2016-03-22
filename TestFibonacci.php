<?php
/**
 *  unit test for fibonacci.php
 *
 *  Verifies the fibonacci() function returns the correct value for
 *  the first 10 terms of the Fibonacci series.
 *
 *  By induction, the function works for all other positive integers.
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

use PHPUnit_Framework_TestCase as TestCase;

require_once 'fibonacci.php';

/**
 * Unit test class derived from TestCase
 *
 *  ... provides one test case: test_fibonacci()
 */
class TestFibonacci extends TestCase
{
    /**
     *  Called before calling each test case routine.
     *
     *  Performs any necessary pre-test set up.
     */
    function setUp ()
    {
        // print ("\nSet up\n");
    }

    /**
     *  Called after calling each test case routine.
     *
     *  Performs any necessary post-test clean up and shut down.
     */
    function tearDown ()
    {
        // print ("\nTear down\n");
    }

    /**
     *  The test case for Dumb::fibonacci() in fibonacci.php.
     *
     *  Verifies the function for the first 10 terms of the Fibonacci series.
     */
    function test_fibonacci ()
    {
        print ("test fibonacci()");

        $cardinal = array("th", "st", "nd", "rd");
        $nums = array(1, 0);

        for ($ii = 1; $ii <= 10; $ii++)
        {
            $subscript = $cardinal[($ii < 4) ? $ii : 0];

            $this->assertEquals($nums[0], Dumb::fibonacci($ii), "${ii}${subscript} Fibonacci number");

            $nums = array($nums[0] + $nums[1], $nums[0]);
        }
    }
}
?>
