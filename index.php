<!doctype html>
 <html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="jquery.zweatherfeed.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function () {
$('#test').weatherfeed(['IDXX0022'], {
forecast: true
});
});
</script>

<title>Acerudyn</title>

<script type="text/javascript" src="http://static.tumblr.com/dxr7fsd/Wvmmpdd8c/jquery-1.2.6.min.js"></script>
    <script type="text/javascript">
/**Slider**/
    function slideSwitch() {
        var $active = $('#slideshow IMG.active');

        if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

        // use this to pull the images in the order they appear in the markup
        var $next =  $active.next().length ? $active.next()
            : $('#slideshow IMG:first');

        // uncomment the 3 lines below to pull the images in random order
        
        // var $sibs  = $active.siblings();
        // var rndNum = Math.floor(Math.random() * $sibs.length );
        // var $next  = $( $sibs[ rndNum ] );


        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1500 /* << Atur Kecepatan lebih menurun lebih cepat !*/, function() {
                $active.removeClass('active last-active');
            });
    }

    $(function() {
        setInterval( "slideSwitch()", 3000 );
    });
	</script>


</head>

<?php
date_default_timezone_set("Asia/Jakarta");
$hari	= date("D");
$tgl	= date("d");
$bulan	= date("F");
?> 

<body bgcolor="#003399">
<div id="wrapper">

<div id="hello"></div>
<div id="me"></div>

<div class="left-aside">
        <a href="aboutme.html"><div id="aboutme"></div></a>
        <a href="address.html"><div id="alamat"></div></a>
        <a href="skill.html"><div id="skill"></div></a>
</div>

<div class="right-aside">
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1420423296113!2d109.8433711846655!3d-7.765529161647119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac471d0d95941%3A0x5027a76e3555b60!2sTanjunganom%2C+Butuh%2C+Kabupaten+Purworejo%2C+Jawa+Tengah+54264%2C+Indonesia!5e1!3m2!1sid!2sid!4v1446131703090" width="359" height="179" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
       <div id="music"><iframe width="179px" height="179px"scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/214970146&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
       </div>
    <a href="https://www.facebook.com/bagoesragil.sapoetra">
        <div id="facebook"></div> </a>
       <a href="http://www.weather.com/weather/today/l/IDXX0022:1:ID">
       <div id="weather">
       <div id="test"></div>
       </div></a>
</div>

<div class="center">
        <a href="mailto:acerudyn@yahoo.com">
        <div id="email"></div></a>
        <div id="galeri">
        	<a href="skill.html"><div id="slideshow">
        <img src="gambar/kaos7.png" alt="kaos7"   class="active" />
        <img src="gambar/kaos2.png" alt="kaos2"  />
        <img src="gambar/kaos4.png" alt="kaos4" />
        <img src="gambar/kartu1.png" alt="kartu1" />
        <img src="gambar/kartu3.png" alt="kartu3" />
        <img src="gambar/kartu4.png" alt="kartu4" />
        <img src="gambar/logo1.png" alt="logo1"  />
        <img src="gambar/logo2.png" alt="logo2"  />
        <img src="gambar/logo3.png" alt="logo3"  />
        <img src="gambar/poster2.png" alt="poster2" />
        <img src="gambar/poster3.png" alt="poster3" />
        <img src="gambar/poster6.png" alt="poster6" />
        <img src="gambar/web1.png" alt="web1" />
        	</div></a>
        </div>
        <div id="kalender"><br><span id="tanggal"><?php echo $tgl; ?></span><br><br>
        <span id="hari"><?php echo "$hari, $bulan";?></span>
        </div>
        <a href="https://twitter.com/acerudyn">
        <div id="twitter"></div></a>
</div>

</div>
</body>
</html>
