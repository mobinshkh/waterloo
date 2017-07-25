<?php
	if(isset($_POST['sub']))
	{
		extract($_POST);
		
		function get_title($url)
		{	
		  $str = file_get_contents($url);
		  $my_title_1=explode("<title>", $str);
		  $my_title_2=explode("</title>", $my_title_1[1]);
		  return $my_title_2[0];
		}
		
		$string1 = preg_replace('/[^a-zA-Z0-9]/', ' ', get_title($urlnm));
		$string = preg_replace('/[^a-zA-Z0-9]/', ' ', $urlnm);
		
		$arr2= explode (" ",$string1);
		$i=1;
		 foreach ($arr2 as $key => $value) {
		if( stripos( $string, $value ) !== false ) 
		{
		    $myres.=ucwords($value);
		    $i++;
		}else{
			if($i==1){
				echo ucwords(get_title($urlnm));
				$i++;
			}	

		}
}
$exp=explode(".", $urlnm);
foreach ($variable as $key => $value) {
	# code...
}
echo $myres;	
		
	}
?> 

