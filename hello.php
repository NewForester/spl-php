#!/usr/bin/php
<?php
/**
 *  A simple, testable, routine inspired by Hello World
 *
 *  This is a simple script wrapped around a simple routine written with a view to
 *    - checking that php, phpdoc, phpunit and phplint are installed properly;
 *    - providing a simple starting point for writing other scripts in php.
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

/**
 * A phpdoc friendly function container
 *
 * ... without which phpdoc, it seems, will not generate documentation for the function.
 */
class Hello
{
    /**
     *  Greet someone or something
     *
     *  ... for a full description, read the code.
     *
     *  @param  string  $who    who or what to greet
     *
     *  @return string  the greeting
     */
    static function greet ($who)
    {
        return ("Hello $who");
    }
}

// -----------------------------

if (isset ($argv))
{
    if (count($argv) > 1)
    {
        // Greet everyone on the command line

        foreach (array_slice ($argv, 1) as $arg)
        {
             print (Hello::greet ("$arg\n"));
        }
    }
    else
    {
        // Greet the entire world

        print (Hello::greet ("World\n"));
    }
}
?>
