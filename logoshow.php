<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>Flexisel - A responsive jQuery Carousel</title>
<link href="css/style-flexisel.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

</head>

<body>

<ul id="flexiselDemo3">
    <li><img src="/images/toyota2.png" /></li>
<li><img src="/images/WFM.png" /></li>
<li><img src="/images/applebees2.png" /></li>
<li><img src="/images/Hooters.png" /></li>
<li><img src="/images/IGA.png" /></li>
<li><img src="/images/jcpenney.png" /></li>
<li><img src="/images/Heinz.png" /></li>
<li><img src="/images/foodlion.png" /></li>
<li><img src="/images/cheesecake.png" /></li>
<li><img src="/images/CrackerBarrel.png" /></li> 
<li><img src="/images/outbacklogo.png" /></li>
<li><img src="/images/texasroadhouse.png" /></li> 
<li><img src="/images/chickfila.png" /></li>
<li><img src="/images/goldencorral.png" /></li>
<li><img src="/images/jasons.png" /></li>
<li><img src="/images/wafflehouse.png" /></li>                                               
</ul>    

<script type="text/javascript">

$(window).load(function() {

    $("#flexiselDemo3").flexisel({
        visibleItems: 6,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: false,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
    
});
</script>
    
    
</body>
</html>