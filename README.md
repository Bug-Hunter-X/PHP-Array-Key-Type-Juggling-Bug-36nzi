# PHP Array Key Type Juggling Bug

This repository demonstrates a common yet subtle bug in PHP related to how the language handles array keys, specifically when string keys are numerically equivalent to integers.  The bug is explained in detail in the `bug.php` file. The solution, showcasing how to avoid this issue, is presented in `bugSolution.php`.

The bug arises from PHP's loose type system and implicit type coercion.  While often convenient, this can cause unexpected data loss if not properly managed.

## How to Reproduce
1. Clone this repository.
2. Navigate to the repository's directory using your terminal.
3. Run `php bug.php` to see the unexpected behavior.
4. Run `php bugSolution.php` to observe the corrected behavior.

## Understanding the Issue
The core problem lies in how PHP handles keys when they are strings that can be interpreted as integers.  It can lead to unintentional key overwriting and data loss.