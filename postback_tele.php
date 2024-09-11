<?php

$pesan = urlencode($_GET["pesan"]);
$token = "bot7119872825:AAGF-eJ3-y8gBDUWOgUFY9jD8hKojz8I4rk";
$chat_id = "5258425524";
$proxy = "";

$url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

$ch = curl_init();

if($proxy==""){
	$optArray = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_CAINFO => "cacert.pem"	
	);
}
else{ 
	$optArray = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_PROXY => "$proxy",
		CURLOPT_CAINFO => "cacert.pem"	
	);	
}
	
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
	
$err = curl_error($ch);
curl_close($ch);	
	
if($err<>"") echo "Error: $err";
else echo "";

$pic="SingoBarong.jpg";


?>

<html>
<head>
<style>

body{
       background-image: url('<?php echo $pic;?>');
       background-size:100% 100%;
       
}

</style>
</head>    
</body>
</html>