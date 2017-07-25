<?php
	$ar=array(10,20,30,'str',50,'xyz');

	function abc( $ar){
		print_r( $ar);
	}
	abc($ar);
?>

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

		echo get_title($urlnm);
?>