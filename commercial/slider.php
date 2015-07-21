<?php
$num = $_GET['n'];
if($num==''){
	$num=0;	
}
$all = $_GET['a'];
$dbpath = 'localhost';
$username = 'invisio1_root';
$password = 'UofL2013!';
 $conn = mysql_connect($dbpath, $username, $password);
			  $db = mysql_select_db("invisio1_drupal",$conn);  	
			 if(!$conn ==true){
			  die("Cannot connect to host" . mysql_error());
			 } 
			 if(!$db = true){
			  die("Cannot connect to database" . mysql_error());
			 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Slider</title>
    <link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/style.css" type="text/css" media="screen" />
    <style>
	.theme-light .nivo-controlNav.nivo-thumbs-enabled {
		width:90%;	
	}
	.theme-light .nivo-controlNav.nivo-thumbs-enabled img {
		width:75px;	
	}
	</style>
</head>
<body>
    <div id="wrapper">
    <?php
	if($num<=5 && $all==''){
		?>
	<div style="position:absolute; bottom:45px; left:50%; margin-left:-150px; width:280px; z-index:100"><img src="/images/Tagline_white.png" style="width:100%; border:0; margin:0; padding:0" /></div>
    <div style="position:absolute; bottom:10px; right:40px; width:245px; z-index:100"><a href="/video" target="_parent"><img src="/images/Video_button.jpg" style="width:100%; border:0; margin:0; padding:0; box-shadow: 2px 2px 15px black;" /></a></div>
    <?php
	}
	?>
        <div class="slider-wrapper theme-light">
            <div id="slider" class="nivoSlider">
            <?php
			 if($all==1){
			 	$sql=mysql_query("SELECT * FROM slider_images WHERE active = 1 AND filename NOT LIKE 'Home%'");
			 }else{
			 	$sql=mysql_query("SELECT * FROM slider_images WHERE category = '$num' AND active = 1");
			 }
			 while($row=mysql_fetch_assoc($sql)){
				 if($all==1){
                                     if (check_if_url_exists($row['link']))
                                     {
					 ?>
                     <a href="<?php echo $row['link'];?>" target="_parent"><img src="slider/images/<?php echo $row['filename'];?>.jpg" data-thumb="slider/images/<?php echo $row['filename'];?>.jpg" alt="" /></a>
                     <?php
                                     } else {
                                         ?>
                     <img src="slider/images/<?php echo $row['filename'];?>.jpg" data-thumb="slider/images/<?php echo $row['filename'];?>.jpg" alt="" />
                     <?php
                                     }
				 }else{
					
                     if (check_if_url_exists($row['link']))
                                     {
                                     ?>
                    <a href="<?php echo $row['link'];?>" target="_parent"><img src="slider/images/<?php echo $row['filename'];?>.jpg" alt="" /></a>
                    <?php
                                 } else {
                                     ?>
                    <img src="slider/images/<?php echo $row['filename'];?>.jpg" alt="" />
                    <?php
				 }
			 }
                         }
                         
                         function check_if_url_exists($url) {
                            $array = get_headers($url);
                            $string = $array[0];
                            if(strpos($string,"200")) {
                                return true;
                            } else {
                                return false;
                            }
                        }
				?>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			effect: 'boxRandom',               // Specify sets like: 'fold,fade,sliceDown'
    		slices: 15,                     // For slice animations
    		boxCols: 8,                     // For box animations
    		boxRows: 4,                     // For box animations
    		animSpeed: 900,                 // Slide transition speed
   		 	pauseTime: 5000,                // How long each slide will show
    		startSlide: 0,
			pauseOnHover: false,
			<?php if($all==1){?>directionNav: true,
			controlNavThumbs: true
			<?php }?>
		});
    });
    </script>
</body>
</html>