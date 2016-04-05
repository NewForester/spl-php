#!/usr/bin/php
<?php
/**
 *  an example of recursive programming
 *
 *  Provides a script/function to calculate terms of the Fibonacci series.
 *
 *  This example of the power of recursion has log(n) time complexity.
 *  It takes advantage of the identities:
 *
 *      F(2n-1) = F(n) * F(n) + F(n-1) * F(n-1)
 *      F(2n) = (2 * F(n-1) + F(n)) * F(n)
 *
 *  Deriving higher order terms by multiplication of lower order terms
 *  instead of by addition implies better than linear performance.
 *
 *  @package    pbr
 *  @subpackage scripts
 *  @license    MIT Licence https://opensource.org/licenses/MIT
 *  @author     New Forester <NewForester@users.noreply.github.com>
 */

/**
 * A container for a recursive fibonacci function with log(n) time complexity
 *
 * ... without which phpdoc, it seems, will not generate documentation for functions.
 */
class Logn
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
        $odd = $nth % 2;

        if ($nth == 1)
            $acc = array(0, 1);
        else if ($odd)
            $acc = Logn::internal(($nth - 1) / 2);
        else
            $acc = Logn::internal($nth / 2);

        $acc = array($acc[0]*($acc[0]+2*$acc[1]), $acc[0]*$acc[0]+$acc[1]*$acc[1]);

        if ($odd)
            $acc = array($acc[0]+$acc[1], $acc[0]);

        return $acc;
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
            return Logn::internal($nth)[0];
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

        printf ("%d\n", Logn::fibonacci ($argv[1]));
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
