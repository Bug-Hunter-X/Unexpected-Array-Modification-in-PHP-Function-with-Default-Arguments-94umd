# PHP Unexpected Array Modification Bug

This repository demonstrates a subtle bug in PHP related to array modification within functions and default argument handling. The issue arises when arrays are passed by reference and modifications within a function unintentionally affect the original array outside the function's scope.

## Bug Description
The `processData` function recursively processes an array.  The problem occurs because PHP's pass-by-reference behavior for arrays can cause unexpected side-effects when the function alters the array. 

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`. Note the unexpected output of the `$myData` array.
3. Run `bugSolution.php` to see the corrected version.

## Solution
The solution involves creating a copy of the input array before processing to prevent modifications to the original array.  We use `array_values` to produce a fresh indexed copy of the array.