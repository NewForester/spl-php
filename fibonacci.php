#!/usr/bin/php
<?php
/**
 *  an example of dumb recursive programming
 *
 *  Provides a script/function to calculate terms of the Fibonacci series.
 *
 *  This is a simple, elegant but deceptive example of the power of recursion.
 *  During the calculation of F(n), F(1) is calculated not once, but F(n) times.
 *
 *  At a guess, the time complexity is exponential or O(c**n) where c is 1.6180...
 *  (otherwise known as the golden ratio).
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
class Dumb
{
    /**
     *  Calculate the nth term of the Fibonacci series
     *
     *  ... for a full description, read the code.
     *
     * @param   integer $nth    The term to calculate.
     * @return  integer         The nth term.
     */
    static function fibonacci ($nth)
    {
        if ($nth < 2)
            return $nth;
        else
            return Dumb::fibonacci ($nth - 1) + Dumb::fibonacci ($nth - 2);
    }
}

// -----------------------------

if (isset ($argv))
{
    if (count($argv) > 1)
    {
        // Print the nth Fibonacci number calculated using recursion

        printf ("%d\n", Dumb::fibonacci ($argv[1]));
    }
    else
    {
        // Print the first few Fibonacci numbers using a loop

        $nums = array(1, 0);

        while ($nums[0] < 100)
        {
            print "$nums[0] ";
            $nums = array($nums[0] + $nums[1], $nums[0]);
        }
        print "$nums[0]\n";
    }
}
?>
