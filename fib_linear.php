#!/usr/bin/php
<?php
/**
 *  an example of recursive programming
 *
 *  Provides a script/function to calculate terms of the Fibonacci series.
 *
 *  This example of the power of recursion has linear time complexity.
 *  During the calculation of F(n), F(n-1), ... F(0) are each calculated only once.
 *
 *  This is not an example of tail recursion but it was inspired by the idea.
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

/**
 * A container for a recursive fibonacci function with linear time complexity
 *
 * ... without which phpdoc, it seems, will not generate documentation for functions.
 */
class Linear
{
    /**
     *  Internal calculation of the nth term of the Fibonacci series
     *
     *  ... for a full description, read the code.
     *
     * @param   integer $nth    The term to calculate.
     * @return  array(integer,integer)  The nth and nth-1 terms.
     */
    private static function internal ($nth)
    {
        if ($nth == 1)
            $acc = array(0, 1);
        else
            $acc = Linear::internal($nth - 1);

        return array($acc[0]+$acc[1], $acc[0]);
    }

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
        if ($nth >= 1)
            return Linear::internal($nth)[0];
        else
            return 0;
    }
}

// -----------------------------

if (isset ($argv))
{
    if (count($argv) > 1)
    {
        // Print the nth Fibonacci number calculated using recursion

        printf ("%d\n", Linear::fibonacci ($argv[1]));
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
