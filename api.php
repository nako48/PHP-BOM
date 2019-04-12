<?php
//CODE BY NAKOCODERS
if(!empty($_POST['nomor'])) {
    $nomor= $_POST['nomor'];
}
if($nomor == null) {
    exit("Masukan Nomor!\n");
}
$ch = curl_init('https://nakocoders.org/boom/0x.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch,CURLOPT_COOKIEFILE, $config);
curl_setopt($ch,CURLOPT_COOKIEJAR,  $config);
curl_setopt($ch,CURLOPT_POSTFIELDS,"nomor=$nomor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
if(empty($result)){
}elseif(preg_match('/Berhasil/i',$result)){
    header('location: index.php?berhasil=1');
}else{
    header('location: index.php?gagal=1');
} 
?>
