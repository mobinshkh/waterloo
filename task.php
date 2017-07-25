<?php
	if(isset($_POST['sub']))
	{
		$url1=explode("\n", $_POST['sitenm']);

		foreach ($url1 as $key=>$value) 
		{
			$url= $url1[$key];
			$url= $url2[$key];
			$url= $url3[$key];
			$url= $ur14[$key];

		}
		echo $url;
		echo $url;
		echo $ul3;
		echo $url;

			/*function get_title($url)
			{
			  $str = file_get_contents($url);
			  if(strlen($str)>0)
			  {
			    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
			    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
			    return $title[1];
			  }
			}

			echo get_title($url);*/
	}
?>