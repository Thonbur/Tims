<html>
<head>
  <title> </title>
</head>
<body>
<?php

/*$string ="som har lite text";
//echo substr ($string, 0,7);

//echo $string[5];
 //echo strlen ($string);
 
 function writeVertical($string)
 {
 $slut = strlen($string);
 $start = 0;
 while ( $start < $slut)
 {
 echo $string[$start];
 echo "<br>";
 $start++;
 }
 
}
writeVertical ($string);*/

function randomColor()
{
  
 return "#". dechex(rand(0,15) ) . dechex(rand(0,15) ) . dechex(rand(0,15) );
}
echo randomColor();

function colorMe($string)
 {
 $slut = strlen($string);
 $start = 0;
 while ( $start < $slut)
 {
 echo "<span style='color:".randomColor()."'>";
 echo $string[$start];
 echo"</span>";
 
 $start++;
 }
}
colorMe ("visst funkar det");
/*function letterTab($string)
{
$slut = strlen($string);
 $start = 0;
 while ( $start < $slut)
 {
 echo $string[$start];
 echo "<span style='margin-left:50px'>";
 $start++;
 }
}
letterTab ($string);

function reverse($string)
{
$start = strlen($string) -1;
while ($start >= 0)
{
echo $string[$start];
$start --;
}
}
*/
?>
</body>

</html>