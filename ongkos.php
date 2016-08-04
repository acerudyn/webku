<?php
mysql_connect("localhost","root","");
mysql_select_db("jne_bandung");
$kota = $_GET['kabupaten'];
$kec = mysql_query("SELECT * FROM oc_city WHERE city_id='$kota' ");
$ongkos = mysql_fetch_array($kec);
echo $ongkos['jnereg'];
?>