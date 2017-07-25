<?php
	
	$urlnm=$_SERVER['QUERY_STRING'];
	
		echo "<h5>Your Url:</h5>".$urlnm."<br>";  //Display url

		function get_title($url)
		{	
		  $str = file_get_contents(trim($url)); //Get title url address
		  $my_title_1=explode("<title>", $str); 
		  $my_title_2=explode("</title>", $my_title_1[1]);
		  return $my_title_2[0];
		}
		
		$string1 = preg_replace('/[^a-zA-Z0-9]/', ' ', get_title($urlnm));
		$string = preg_replace('/[^a-zA-Z0-9]/', ' ', $urlnm);

		$arr2= explode (" ",$string1);
		$c_word="";
		$i=1;
		$j=0;
		foreach ($arr2 as $key => $value) 
		{
			if( stripos( $string, $value ) !== false ) //for check all arr element with url
			{
				
				$c_word.=ucwords($value);
			    $i++;
			    $j++;
			   
			}
			else  //Not matched arr with url
			{
				if($i==1)
				{
					$i++;					
				}			
			}
		}
		$str='';
		if($i!=2 || $j==1)//condition for only .com display
		{	
		 $pos = strpos($urlnm, '.');
		 $rest = substr($urlnm, $pos); 
		 $str = str_replace(array('/',' ', '<', '>', '&', '{', '}', '*'), array(''), $rest );
		}

		echo "Title=".get_title($urlnm)."<br><br>";
		echo "Capitalized version=".ucwords(get_title($urlnm))."<br><br>";
		if($str!=null){

		echo "Capitalized version with domain=".$c_word.$str."<br><br>";
		}else{
			echo "URL not matched with title =".get_title($urlnm)."<br><br>";
		}
?> 