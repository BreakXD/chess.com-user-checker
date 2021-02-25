<?php 
$user = $_GET['user'];
$ch = curl_init('https://www.chess.com/callback/user/valid?username='.$user);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
$result = curl_exec($ch); 
curl_close($ch); 
$result = json_decode($result, 1); 
if($result['valid'] !== false){
	echo $user.' is available!';
}else{
	echo $user.' is in use!';
}	
