<?php

$function = isset($argv[1]) ? $argv[1]: '';

print PHP_EOL.PHP_EOL;

switch($function){
	case 1:
		print 'Passwords must be saved Encrypted'.PHP_EOL.PHP_EOL;;
		print 'PHP has different methods like md5() or sha1(), normally I use md5';
	break;
	case 2:
		$number = isset($argv[2]) ? $argv[2]: '';
		if(empty($number))
			print 'You need to send a 2nd parameter to get the nth Fibonacci item';	
		else{
			$fibonacci = fibonacci($number);
			print 'Fibonacci of '.$number.' is: '.$fibonacci;
		}
	break;
	case 3:
		$number = isset($argv[2]) ? $argv[2]: '';
		if(empty($number))
			print 'You need to send a 2nd parameter to get the nth prime Fibonacci item';			
		else{
			$fibonacci = fibonacci_extended_prime($number);
			print 'Prime # '.$number.' of the fibonacci serie: '.$fibonacci;
		}
	break;
	case 4:
		$probe = '';
		$number = isset($argv[2]) ? $argv[2]: '';
		if(empty($number))
			print 'You need to send a 2nd parameter to get the position of that number';	
		else
		{
			$list = isset($argv[3]) ? explode(',', $argv[3]) : array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
			print_r($list);
			if(Array_BinarySearch($number, $list, 'CompareNumbers', $probe))
				print 'Position of # '.$number.' is: '.$probe.PHP_EOL.PHP_EOL;
			else
				print 'Number doesn\'t exists on the array'.PHP_EOL.PHP_EOL;
		}
	break;
	case 5:
	case 6:
	case 7:
		print 'I would implemented something like this: '.PHP_EOL.PHP_EOL;
		print 'http://stackoverflow.com/questions/3630969/implement-linked-list-in-php';
	break;
	case 8:
		print 'a) Injection vulnerabilities and cross-site scripting'.PHP_EOL.PHP_EOL;
		print 'b) Broken authentication and session management'.PHP_EOL.PHP_EOL;
		print 'c) Insecure direct object references'.PHP_EOL.PHP_EOL;
		print 'Source: http://searchsecurity.techtarget.com/tip/Five-common-Web-application-vulnerabilities-and-how-to-avoid-them'.PHP_EOL;
		print 'Source: http://stackoverflow.com/questions/1267284/common-website-attack-methods-detection-and-recovery'.PHP_EOL.PHP_EOL;	
	break;
	case 9:
		$number = isset($argv[2]) ? $argv[2]: '';
		if(is_power_of_2($number))
			print $number.' is power of 2'.PHP_EOL.PHP_EOL;
		else
			print $number. ' is not power of 2'.PHP_EOL.PHP_EOL;
	break;
	case 10:
		print 'Applyin Regex either on the Server with PHP'.PHP_EOL;
		print 'or on the client with Javascript.'.PHP_EOL.PHP_EOL;
		print 'Example PHP: http://stackoverflow.com/questions/6363108/php-changing-phone-number-format-with-regex'.PHP_EOL;
		print 'Examplo JS: http://stackoverflow.com/questions/8358084/regular-expression-to-reformat-a-phone-number-in-javascript'.PHP_EOL;
	break;
	case 11:
		$string = isset($argv[2]) ? $argv[2]: '';
		print 'String reverse: '.strrev($string).PHP_EOL.PHP_EOL;
	break;
	case 12:
		print 'I didn\'t understan very well this point, however I think something like this would work'.PHP_EOL.PHP_EOL;
		print 'function object(o) { '.PHP_EOL.'
		        function F() {}'.PHP_EOL.'
		        F.prototype = o;'.PHP_EOL.'
		        return new F();
		    }'.PHP_EOL.PHP_EOL;
		print 'Source: http://javascript.crockford.com/prototypal.html';
	break;
	case 13:
		print 'Please open the file "lightbox.html" in a browser'.PHP_EOL.PHP_EOL;
		print 'Source: http://lokeshdhakar.com/projects/lightbox2/';		
	break;
	case 14:		
		print 'Javascript Code: '.PHP_EOL.PHP_EOL;
		print 'You can run the next code in any JS Console [chrome, firefox, etc]'.PHP_EOL;
		print '
			str_1 = "------- The quick brown fox jumps over the lazy dog -------";			

			function custom_str_replace(str){ 
				return str.replace("The quick brown fox jumps over the lazy dog","The1 quick2 brown3 fox4 jumps5 over6 the7 lazy8 dog9");
			}

			str_2 = custom_str_replace(str_1);
		';
	case 15:
		print 'To mention a few of them:'.PHP_EOL.PHP_EOL;
		print '2D drawing'.PHP_EOL;
		print 'Caching'.PHP_EOL;
		print 'Video'.PHP_EOL.PHP_EOL;
		print 'Source: http://www.ibm.com/developerworks/library/wa-html5fundamentals3/';
	break;
	default:
		print '================INVALID FUNCTION ================'.PHP_EOL.PHP_EOL;
		print 'Valid Functions: 1, 2, 3, 4, 5';
}

print PHP_EOL.PHP_EOL;


/**
 * Function to output the nth item in a Fibonacci series.
 * @param int $number
 * @return int
 * Function Source: http://www.codewalkers.com/c/a/Miscellaneous/Recursion-in-PHP/2/
 */
function fibonacci($number){
	// function to output the nth item in a Fibonacci series.
	if ($number == 1 || $number == 2)
		return 1;
	else
		return fibonacci( $number - 1) + fibonacci( $number - 2 );	
}


/**
 * Function to output the nth prime item in athe Fibonacci series.
 * @param int $number
 * @return int
 */
function fibonacci_extended_prime($number){
	$got_it = false;
	$i = 1; 
	$fib = 0;
	while($number)
	{
		$fib = fibonacci($i);
		if(isPrime($fib))
			$number--;
		if($i++ > 50)
			break;
	}
	return $fib;
}

/**
 * Checks if $num is a Prime Number
 * @param int $num
 * @return boolean
 * Function Source: http://icdif.com/computing/2011/09/15/check-number-prime-number/
 */
function isPrime($num){
    if($num == 1)
        return false;
    if($num == 2)
        return true;
    if($num % 2 == 0)
        return false;
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}

/**
 * Binary search functions 
 * @param int $needle, $haystack, $comparator, &$probe
 * @return boolean
 * Function Source: http://us1.php.net/array_search
 */
function Array_BinarySearch( $needle, $haystack, $comparator , &$probe ){
    $high = Count( $haystack ) -1;
    $low = 0;
    while ( $high >= $low )
    {
        $probe = Floor( ( $high + $low ) / 2 );
        $comparison = $comparator( $haystack[$probe], $needle );
        if ( $comparison < 0 )
            $low = $probe +1;
        elseif ( $comparison > 0 ) 
            $high = $probe -1;
        else
            return true;
    }
    if($comparator($haystack[count($haystack)-1], $needle) < 0)
        $probe = count($haystack);
    return false;
}

/**
 * Function to execute Binary comparation
 * @param int $obj, int $needle
 * @return boolean
 * Function Source: http://us1.php.net/array_search
 */
function CompareNumbers($obj, $needle){
    return $obj - $needle;
}

/**
 * Function to determine if a number is power of 2
 * @param int $number
 * @return boolean
 * Function Source: http://stackoverflow.com/questions/4965301/finding-if-a-number-is-a-power-of-2
 */
function is_power_of_2($number){
	if ( $number > 0 & (($number-1) & $number) == 0)
		return true;
	return false;
}
?>