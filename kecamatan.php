<?php
mysql_connect("localhost","root","");
mysql_select_db("jne_bandung");
$kota = $_GET['kabupaten'];
$kec = mysql_query("SELECT city_id,name FROM oc_city WHERE zone_id='$kota' order by name");
echo "<option>-- Pilih Kecamatan --</option>";
while($k = mysql_fetch_array($kec)){
    echo "<option value=\"".$k['city_id']."\">".$k['name']."</option>\n";
}
?>