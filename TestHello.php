<?php
/**
 *  unit test for in hello.php
 *
 *  This is a simple unit test for hello.php written with a view to
 *   - checking that the php unittest framework is installed properly;
 *   - providing a simple starting point for writing other unit tests in php.
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

use PHPUnit_Framework_TestCase as TestCase;

require_once 'hello.php';

/**
 * Unit test class derived from TestCase
 *
 *  ... provides one test case: test_hello()
 */
class TestHello extends TestCase
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
     *  The test case for Hello::greet() in hello.php.
     *
     *  Two simple tests.
     */
    function test_hello ()
    {
        // print ("test hello()");

        $this->assertEquals('Hello Paul',    Hello::greet('Paul'),    'greet Paul');
        $this->assertEquals('Hello Heather', Hello::greet('Heather'), 'greet Heather');
    }
}
?>
