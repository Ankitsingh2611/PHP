/*
Loops
Loops are used to execute the same block of code until a certain condition is met. Loop is to automate the repetitive tasks within a program to save time and effort. PHP supports four different types of loops.

While:-  the block of code is executed until the condition is true.
do…while:- the block of code executed once and then the condition is evaluated. If the condition is true, the statement is repeated as long as the condition is true.
For:- the block of code is executed until the condition is true.
Foreach:- loops through a block of code for each element in an array.
While loop:- The block of code is executed until the condition is true. This while loop can be used to iterate over the array. 

Do-while loop:- The do-while loop is a variant of the while loop, which checks the condition at the end of each loop iteration. With a do-while loop, the block of code is executed once, and then the condition is evaluated. If the condition is true, the statement is repeated as long as the specified condition evaluated to is true.

PHP for Loop:- The parameters of for loop have the following meanings:

initialization — it is used to initialize the counter variables and evaluated once unconditionally before the first execution of the body of the loop.
Condition — in the beginning of each iteration, the condition is evaluated. If it evaluates to true, the loop continues, and the nested statements are executed. If it evaluates to false, the execution of the loop ends.
Increment — it updates the loop counter with a new value. It is evaluated at the end of each iteration.


*/


// Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
