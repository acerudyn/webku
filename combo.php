<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#provinsi").change(function(){
    var propinsi = $("#provinsi").val();
    $.ajax({
        url: "kota.php",
        data: "provinsi="+propinsi,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#kabupaten").html(msg);
        }
    });
  });
  $("#kabupaten").change(function(){
    var kota = $("#kabupaten").val();
    $.ajax({
        url: "kecamatan.php",
        data: "kabupaten="+kota,
        cache: false,
        success: function(msg){
            $("#kecamatan").html(msg);
        }
    });
  });
   $("#kecamatan").change(function(){
    var kota = $("#kecamatan").val();
    $.ajax({
        url: "ongkos.php",
        data: "kecamatan="+kota,
        cache: false,
        success: function(msg){
            $("#ongkos").html(msg);
        }
    });
  });
});
 
</script>

<?php
mysql_connect("localhost","root","");
mysql_select_db("jne_bandung");
?>
<table width="208" height="90" border="0">
  <tr>
    <td width="202"><select name="provinsi" id="provinsi">
      <option>--Pilih Provinsi--</option>
      <?php
//mengambil nama-nama propinsi yang ada di database
$propinsi = mysql_query("SELECT * FROM oc_country ORDER BY country_id");
while($p=mysql_fetch_array($propinsi)){
echo "<option value=\"$p[country_id]\">$p[name]</option>\n";
}
?>
    </select></td>
  </tr>
  <tr>
    <td><select name="kabupaten" id="kabupaten">
      <option>--Pilih Kabupaten/Kota--</option>
      <?php
//mengambil nama-nama propinsi yang ada di database
$kota = mysql_query("SELECT * FROM oc_zone ORDER BY name");
while($p=mysql_fetch_array($propinsi)){
echo "<option value=\"$p[zone_id]\">$p[name]</option>\n";
}
?>
    </select></td>
  </tr>
  <tr>
    <td><select name="kecamatan" id="kecamatan">
      <option>--Pilih Kecamatan--</option>
      <?php
//mengambil nama-nama propinsi yang ada di database
$kota = mysql_query("SELECT * FROM oc_city ORDER BY name");
while($p=mysql_fetch_array($propinsi)){
echo "<option value=\"$p[city_id]\">$p[name]</option>\n";
}
?>
    </select></td>
  </tr>
  <tr>
    <td> 
<input type="text" name="ongkos" id="ongkos" readonly="readonly" value="<?php echo $ongkos['jnereg']; ?>"/>   
</td>
  </tr>
</table>