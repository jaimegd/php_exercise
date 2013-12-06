Hi,

Instead of having the code on Word I decided to put all the code in the <br />
file index.php.<br /><br />

Normally I would have a frameworks and using OO, however for this exercice <br />
I dediced just to have one file.<br /><br />

So you can run in the terminal: php index.php # [params] <br />
Example:<br /><br />

For question 1: <br />
php index.php 1
<br /><br />

For question 2: <br />
php index.php 2 5
<br /><br />

For question 3: <br />
php index.php 3 4
<br /><br />

For question 4: <br />
php index.php 4 10 2,4,5,8,10,20,30<br />

In this case you are executing function 4, sending 10 as the number to look<br />
and you can send an array in this case: 2,4,5,8,10,20,30<br />


For question 5, 6 and 7: <br />
php index.php 5<br />
php index.php 6<br />
php index.php 7<br />
<br />

For question 8: <br />
php index.php 8
<br /><br />

For question 9: <br />
php index.php 9 16
<br /><br />

For question 10: <br />
php index.php 10
<br /><br />

For question 11: <br />
php index.php 11 good<br />
php index.php 11 'even better'<br />

You can send an string with more than 1 word using ''<br />

<br />
For question 12: <br />
php index.php 12
<br /><br />

For question 13: <br />
php index.php 13 <br />

Please open the file lightbox.html <br />
<br />

For question 14: <br />
php index.php 14<br />

You can paste this code in a JS terminal:<br />

str_1 = "------- The quick brown fox jumps over the lazy dog -------";			<br />

function custom_str_replace(str){ <br />
return str.replace("The quick brown fox jumps over the lazy dog","The1 quick2 brown3 fox4 jumps5 over6 the7 lazy8 dog9");<br />
}<br />

str_2 = custom_str_replace(str_1);<br />

<br /><br />
For question 15: <br />
php index.php 15