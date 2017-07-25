<?php
	if(isset($_POST['sub']))
	{
		extract($_POST);
		//echo $urlnm;
		function get_title($url)
		{	
			//echo $url;
		  $str = file_get_contents($url);
		  $my_title_1=explode("<title>", $str);
		  $my_title_2=explode("</title>", $my_title_1[1]);
		  $my_title_3=explode("–", $my_title_2[0]);
		  	echo "<pre>";
		  	//print_r($my_title_3);
		  	echo "</pre>";
		  return $my_title_3[0];
		}
		echo $geturl=$_POST['txtnm'];
		//foreach ($geturl as $key => $value) {
			# code...
		//	echo get_title($value);
		//}
	}
?>

