# Uncaught Exception Leading to Fatal Error in PHP

This repository demonstrates a common but easily overlooked error in PHP: the lack of exception handling when calling functions that might throw exceptions.  Unhandled exceptions lead to fatal errors, terminating script execution.

The `bug.php` file showcases the problematic code.  The solution (`bugSolution.php`) implements a `try-catch` block to gracefully handle potential exceptions.