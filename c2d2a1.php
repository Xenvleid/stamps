<!-- Do the following exercises:

1. If you have and array $arr = [0,1,2,3,4]; How do you extract the third value?
2. If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; 
How do you extract the third value?
3. Create a new array with each comma-separated value as its own array element from the string 
$a = "a,b,c,d,e,f".
4. With the result array from 3, create a new array where each element is both key and value. 
In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”, "d"=>"d", "e"=>"e"]
5. Find the sum of this array of numbers $arr = [0, 1, 2, 3, 4, 5, 6];



    echo "<br/><br/><br/>" -->
<?php
    // number 1 
    $arr = [0,1,2,3,4];
    echo $arr[3];     
   
    echo "<br/><br/><br/>";
    // number 2
    $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
    echo $arr["two"];
    
    echo "<br/><br/><br/>";
    // number 3 
    $a = "a,b,c,d,e,f";
    $res =  explode(",", $a);
    print_r($res);
   
    echo "<br/><br/><br/>";
    // number 4
    foreach ($res as $value) { 
        echo "<br/>[$value]: $value";
    }
    
    echo "<br/><br/><br/>";
    // number 5
    $arr = [0, 1, 2, 3, 4, 5, 6]; 
    print_r(array_sum($arr));





?>