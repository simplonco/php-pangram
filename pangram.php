<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function isPangram($string)
{
   foreach (str_split($text) as $c) {
        if ($c >= 'a' && $c <= 'z')
            $bitset |= (1 << (ord($c) - ord('a')));
        else if ($c >= 'A' && $c <= 'Z')
            $bitset |= (1 << (ord($c) - ord('A')));
    }
    return $bitset == 0x3ffffff;
}
 
$test = array(
    "the quick brown fox jumps over the lazy dog",
    
);
 
foreach ($test as $str)
    echo "$str : ", isPangram($str) ? 'T' : 'F', '</br>';
	?>