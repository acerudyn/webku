<?php
mysql_connect("localhost","root","");
mysql_select_db("jne_bandung");
$propinsi = $_GET['provinsi'];
$kota = mysql_query("SELECT zone_id,name FROM oc_zone WHERE country_id='$propinsi' order by name");
echo "<option>-- Pilih Kabupaten/Kota --</option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=\"".$k['zone_id']."\">".$k['name']."</option>\n";
}
?>