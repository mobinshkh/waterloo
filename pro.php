<?php
	function get_title($url){
		  $str = file_get_contents($url);
		  /*if(strlen($str)>0){
		    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
		    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
		    return $title[1];
		  }*/
		  $my_title_1=explode("<title>", $str);
		  $my_title_2=explode("</title>", $my_title_1[1]);
		  return $my_title_2[0];
		}

		echo get_title("http://startupnoodle.com/");
?>