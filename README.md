# AppDev_Lab-2_PHP

### Challenge 1: Sum of an Array
1. Create an array of numbers: 1,2,3,4,5 <br>
2. Get the sum of all of the numbers combined and put into a variable. `$sum`<br>
3. Count the number of elements in the array and put into a variable. `$quantity` <br>
4. Print out 'The sum of the `{quantity}` numbers is: `{sum}` '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. <br>

### Challenge 2: Colors array
1. Sort the `$colors` array in ascending order.
2. Add `'purple' and 'orange' to the end of the array.
3. Add 'Red Apple' to the beginning of the array
4. Replace the green color of the array to Green mango.

You should end up with the output of the following array: `Array ( [0] => Red Apple [1] => blue [2] => Green mango [3] => red [4] => yellow [5] => purple [6] => orange )`

### Challenge 3: Job Listings Array

    ```
       1        PHP Developer   IBM         john@ibm.com      09168457456     PHP,MySQL, Javascript 
       2        Web Designer    AWS         jane@aws.com      09175597456     PhotoShop,Illustrator, CSS
       3        Network Admin   CISCO       James@cisco.com   09202224575     Database, CyberSecurity, Networking 
    ```
1. Create a multi-dimensional array of associative arrays of 3 job listings shown above.
- Also add an array field for skills. The skills array should be an array of strings with each skill a person has example
        <br>'skills' => ['PHP', 'MySQL', 'JavaScript']
        **note:** note for the name of array varible use this `$listings[]`;
2.Create a new record using the `array_push()` function. The new record should have the same fields as the others.
- 4   Graphic Artist   ADOBE       princess@adobe.com   09208456544  Photoshop, Bootstrap, Flutter 
3. Print out the job_title,company and email of the second job listing from the array.
4. Print out the first and third skill of the third job listing in the array.

