<?php
/**
 *  unit test for fib_*.php
 *
 *  Verifies the fibonacci() function returns the correct value for
 *  the first 10 terms of the Fibonacci series.
 *
 *  By induction, the function works for all other positive integers.
 *
 *  The test is run for three implementations of fibonacci():
 *    - exponential complexity (dumb implementation)
 *    - linear complexity (inspired by functional programming)
 *    - log(n) complexity (as seen on Wikipedia)
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

use PHPUnit_Framework_TestCase as TestCase;

require_once 'fib_exponential.php';
require_once 'fib_linear.php';
require_once 'fib_logn.php';

/**
 * Unit test class derived from TestCase
 *
 *  ... provides a test case for each implementation of fibonacci()
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
     *  The test case for Exponential::fibonacci() in fib_exponential.php.
     */
    function test_exponential_fibonacci ()
    {
        self::run_test("exponential fibonacci algorithm", 'Exponential::fibonacci');
    }

    /**
     *  The test case for Linear::fibonacci() in fib_linear.php.
     */
    function test_linear_fibonacci ()
    {
        self::run_test("linear fibonacci algorithm", 'Linear::fibonacci');
    }

    /**
     *  The test case for Logn::fibonacci() in fib_logn.php.
     */
    function test_logn_fibonacci ()
    {
        self::run_test("logn fibonacci algorithm", 'Logn::fibonacci');
    }

    /**
     *  Run a simple test of an implementation of the Fibonacci series.
     *
     *  Verifies the function under test returns the correct result for the first 10 terms of the series.
     *
     * @param   string  $msg            Description of the function under test.
     * @param   string  $fibonacci      Name of the function under test.
     */
    private function run_test($msg, $fibonacci)
    {
        print (" ... test $msg\n");

        $cardinal = array("th", "st", "nd", "rd");
        $nums = array(1, 0);

        for ($ii = 1; $ii <= 10; $ii++)
        {
            $subscript = $cardinal[($ii < 4) ? $ii : 0];

            $this->assertEquals($nums[0],
                call_user_func($fibonacci, $ii), "${ii}${subscript} Fibonacci number");

            $nums = array($nums[0] + $nums[1], $nums[0]);
        }
    }
}
?>
