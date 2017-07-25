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
		    echo ucwords($value)."&nbsp;";
		    $i++;
		}else{
			if($i==1){
				echo ucwords(get_title($urlnm));
				$i++;
			}			
		}
}
		
	}
	
?> 

<!DOCTYPE html>
<html>
<head>
	<title>SIZMIC Technical Round</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<style type="text/css">
body{
	margin:0px;
	padding:0px;
	background:#5F9EA0;
	font-family: tahoma;
}
.wrap{
	width:410px;
	overflow: hidden;
	margin: auto;
	margin-top:130px;
	background:#fff;
	padding:20px;
	border: 2px solid silver;
	border-radius: 5px;
}
.wrap h2{
	text-align: center;
}
.wrap input{
	
	width: 400px;
	height: 30px;
	border-radius: 8px;
	border: 1px solid #4caf50;
	margin: 10px;
	padding:5px;
	cursor: pointer;
}
	</style>
</head>
<body>	

<div class='wrap'>
	<form method="post" action="">
		<h2> Fetching Title </h2>	
		Enter your Correct URL:<input type="url" name="urlnm" placeholder='Enter Correct url' required>	
		<input type ="submit" name="sub" value ="Display Title">
	</form>
	<div>
	<?php
	if(isset($_POST['sub']))
	{
		extract($_POST);
		echo "<h5>Your Url:</h5>".$urlnm;  //Display url
		echo "<br> <h5>Fetched Title:</h5>";
		function get_title($url)
		{	
		  $str = file_get_contents($url); //Get title url address
		  $my_title_1=explode("<title>", $str); // fetch form <title> tag to
		  $my_title_2=explode("</title>", $my_title_1[1]); //Ending </title> tag content and varia
		  return $my_title_2[0]; //return array value
		}
		
		$string1 = preg_replace('/[^a-zA-Z0-9]/', ' ', get_title($urlnm));//2. Regular expression 
		$string = preg_replace('/[^a-zA-Z0-9]/', ' ', $urlnm);//1. Regular expression 

		/*echo $string1;*/
		$arr2= explode (" ",$string1);// convert string as array
		$GLOBALS['$glob'] = "";
		$i=1;
		foreach ($arr2 as $key => $value) 
		{
			if( stripos( $string, $value ) !== false ) 
			{
				
			    echo ucwords($value);
			    $i++;
			}
			else
			{
				if($i==1)
				{
					echo ucwords(get_title($urlnm));
					$i++;
				}			
			}
		}		
	}
	?> 
	</div>
</div>

	<script type="text/javascript">
		
	</script>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/style.js"></script>
</body>
</html>