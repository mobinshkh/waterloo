<?php
$urlnm="http://topresultscoaching.com/";
$str=(explode("/", $urlnm));
print_r($str) ;
$string = preg_replace('/[^a-zA-Z0-9]/', ' ', $urlnm);//Regular expression for url
//$string1 = preg_replace('/[^a-zA-Z0-9]/', '', get_title($urlnm));
//echo $string1;

function get_title($url)
		{	
		  $str = file_get_contents($url); //Get title url address
		  $my_title_1=explode("<title>", $str); // fetch form <title> tag to
		  $my_title_2=explode("</title>", $my_title_1[1]); //Ending </title> tag content and varia
		  return $my_title_2[0]; //return array value
		}
?>

<?php
echo stripos("I love php, I love php too!","PHP");
?>