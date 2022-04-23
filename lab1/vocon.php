<?php



function vowel($str1)

{

$ca=0;$ce=0;$ci=0;$co=0;$cu=0;

$len=strlen($str1);

  

for($i=0; $i<$len; $i++)

{

switch($str1[$i])

{

case'a':

case'A':echo"\n <br> $str1[$i] found at position $i";

$ca++;

break;

 

case'e':

case'E':echo"\n <br> $str1[$i] found at position $i";

$ce++;

break;

 

case'i':

case'I':echo"\n <br> $str1[$i] found at position $i";

$ci++;

break;

 

case'o':

case'O':echo"\n <br> $str1[$i] found at position $i";

$co++;

break;

 

case'u':

case'U':echo"\n <br> $str1[$i] found at position $i";

$cu++;

break;

 }

}

echo " <br>Occurence of 'a' : ".$ca;

echo "<br>Occurence of 'e' : ".$ce;

echo "<br>Occurence of 'i' : ".$ci;

echo "<br>Occurence of 'o' : ".$co;

echo "<br>Occurence of 'u' : ".$cu;

}

 function palindrome($str1)

{

$len=strlen($str1);

for($i=0,$j=$len-1;$i<$len/2&&$j>=0;$i++,$j--)

{

if($str1[$i]!=$str1[$j])

{

echo"$str1 is not pailindrome";

return;                       

}

}

echo "$str1 is pailindrome";

}


?>