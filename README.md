Hi,

Instead of having the code on Word I decided to put all the code in the \n
file index.php.

Normally I would have a frameworks and using OO, however for this exercice \n
I dediced just to have one file.

So you can run in the terminal: php index.php # [params] \n
Example:

For question 1: 
php index.php 1


For question 2: 
php index.php 2 5


For question 3: 
php index.php 3 4


For question 4: 
php index.php 4 10 2,4,5,8,10,20,30

In this case you are executing function 4, sending 10 as the number to look
and you can send an array in this case: 2,4,5,8,10,20,30


For question 5, 6 and 7: 
php index.php 5
php index.php 6
php index.php 7


For question 8: 
php index.php 8


For question 9: 
php index.php 9 16


For question 10: 
php index.php 10


For question 11: 
php index.php 11 good
php index.php 11 'even better'

You can send an string with more than 1 word using ''


For question 12: 
php index.php 12


For question 13: 
php index.php 13

Please open the file lightbox.html


For question 14: 
php index.php 14

You can paste this code in a JS terminal:

str_1 = "------- The quick brown fox jumps over the lazy dog -------";			

function custom_str_replace(str){ 
return str.replace("The quick brown fox jumps over the lazy dog","The1 quick2 brown3 fox4 jumps5 over6 the7 lazy8 dog9");
}

str_2 = custom_str_replace(str_1);


For question 15: 
php index.php 15