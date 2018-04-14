<?php
/*
@Page : Index.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: An index page starting with home page.
*/
header('Content-Type: text/html; charset=utf-8');
?>
<!--

██╗  ██╗██╗       ██╗     █████╗ ███╗   ███╗    ██████╗ ███████╗███╗   ██╗     ██╗██╗████████╗██╗  ██╗    ██╗   ██╗██████╗
██║  ██║██║       ██║    ██╔══██╗████╗ ████║    ██╔══██╗██╔════╝████╗  ██║     ██║██║╚══██╔══╝██║  ██║    ██║   ██║██╔══██╗
███████║██║       ██║    ███████║██╔████╔██║    ██████╔╝█████╗  ██╔██╗ ██║     ██║██║   ██║   ███████║    ██║   ██║██████╔╝
██╔══██║██║       ██║    ██╔══██║██║╚██╔╝██║    ██╔══██╗██╔══╝  ██║╚██╗██║██   ██║██║   ██║   ██╔══██║    ╚██╗ ██╔╝██╔══██╗
██║  ██║██║▄█╗    ██║    ██║  ██║██║ ╚═╝ ██║    ██║  ██║███████╗██║ ╚████║╚█████╔╝██║   ██║   ██║  ██║     ╚████╔╝ ██║  ██║
╚═╝  ╚═╝╚═╝╚═╝    ╚═╝    ╚═╝  ╚═╝╚═╝     ╚═╝    ╚═╝  ╚═╝╚══════╝╚═╝  ╚═══╝ ╚════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝      ╚═══╝  ╚═╝  ╚═╝



-->
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<html prefix="og: http://ogp.me/ns#" lang="en" class="no-js" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- meta Descrption and keywords -->
<?php
$page = basename(htmlspecialchars($_SERVER['PHP_SELF']));
$title = "";

if($page == "index.php")
{
	$title = "Home";
        require_once("common/metahome.php");
}

if($page == "aboutme.php")
{
	$title = "About Me";
        require_once("common/metaaboutme.php");
}

if($page == "experience.php")
{
	$title = "My Experience";
        require_once("common/metaexperience.php");
}

if($page == "skills.php")
{
	$title = "My Skills";
        require_once("common/metaskills.php");
}

if($page == "contact.php")
{
	$title = "Contact Me";
        require_once("common/metacontact.php");
}

if($page == "renjithvrcv.php")
{
	$title = "My Resume";
        require_once("common/metaresume.php");
}


?>
<link rel="canonical" href="http://www.renjithvr.in/" />
<meta property="og:title" content="Home | Renjith VR - A Detailed Portfolio | Personal Website" />
<meta prefix="og: http://ogp.me/ns#" property="og:title" content="Home | Renjith VR - A Detailed Portfolio | Personal Website" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.renjithvr.in/" />
<meta property="og:image" content="http://www.renjithvr.in/assets/images/renjithvr.png" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:site_name" content="Renjith VR - A Detailed Portfolio | Personal Website" />
<meta property="fb:app_id" content="927901554014171" />
<meta property="og:description" content="Personal website of Renjith VR.You can see full information about Renjith VR. Renjith is a Software Engineer, Web Developer. Renjith VR is a Full Stack Developer." />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@allow1234me" />
<meta name="twitter:domain" content="https://twitter.com/allow1234me" />
<meta name="twitter:title" content="Home | Renjith VR - A Detailed Portfolio | Personal Website" />
<meta name="twitter:description" content="Personal website of Renjith VR.You can see full information about Renjith VR. Renjith is a Software Engineer, Web Developer. Renjith VR is a Full Stack Developer." />
<meta name="twitter:image" content="http://www.renjithvr.in/assets/images/renjithvr.png" />

<meta name="author" content="Renjith VR" />

<!-- Search Engines -->
<meta name="google-site-verification" content="Eh9JBHEwBOjAPfUgA8jvAN1gIlHTy5gO4iDjGYGYQ0g" />
<meta name="msvalidate.01" content="D8441042F2F890446878465F0D376F56" />
<meta name="yandex-verification" content="203a85b52c5b4b85" />


<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Person",
  "name" : "Renjith VR",
  "additionalName" : "Renjith Valanighat Ramakrishnan",
  "address" : "Thrissur,Kerala,India",
  "birthPlace" : "Thrissur",
  "birthDate" : "May 6 1990",
  "familyName" : "Valanighat",
  "gender" : "Male",
  "height" : "1.71M",
  "homeLocation" : "West Vellanikkara",
  "jobTitle" : "Programming Enthusiast",
  "nationality" : "Indian",
  "parents" : "V.S Ramakrishnan, Prema Ramakrishnan",
  "sibling" : "Vishak VR",
  "image" : "http://www.renjithvr.in/assets/images/renjithvr.png",
  "mainEntityOfPage" : "http://www.renjithvr.in",
  "description" : "Renjith is a Software Engineer, Web Developer. Renjith VR is a Full Stack Developer.",
  "url" : "http://www.renjithvr.in",
  "sameAs" : ["https://www.codingalien.com/,https://in.linkedin.com/in/renjithvr4,http://stackoverflow.com/users/5857047/renjith-vr,https://github.com/RenjithVR4,https://www.hackerrank.com/Renjithvr,https://twitter.com/allow1234me,https://plus.google.com/u/0/+RenjithVR4,https://www.youtube.com/channel/UC-NsW9hQMf3WvZDGchEF7KA,https://www.quora.com/profile/Renjith-VR,https://medium.com/@Renjthvr"]
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92656855-1', 'auto');
  ga('send', 'pageview');

</script>
<title><?php echo $title. " | ";?>Renjith VR - A Detailed Portfolio | Personal Website</title>
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="./css/plugins/bootstrap.css" rel="stylesheet"  type="text/css" media="all"/>
<link href="./css/plugins/font-awesome.css" type="text/css" rel="stylesheet" media="all">

<link href="./css/plugins/base.css" rel="stylesheet"  type="text/css" media="all"/>
<link href="./css/plugins/css-classes.min.css" rel="stylesheet"  type="text/css" media="all"/>
<link href="./css/plugins/title.css" rel="stylesheet"  type="text/css" media="all"/>
<link href="./css/plugins/fakeLoader.css" rel="stylesheet" type="text/css" media="all">
<link href="./css/plugins/notifit.css" rel="stylesheet"  type="text/css" media="all">

<script src="./js/plugins/jquery-2.2.3.min.js"></script>
<script src="./js/plugins/modernizr-2.5.3.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="./js/plugins/fakeLoader.min.js"></script>

<link href="./css/common.css" type="text/css" rel="stylesheet" media="all">
<link href="./css/style.css" type="text/css" rel="stylesheet" media="all">

<link rel="icon" href="./assets/images/renjithvr.png" type="image/png" />
<link rel="shortcut icon" href="./assets/images/renjithvr.ico" />
</head>
<!-- top-nav -->
<body itemscope itemtype="https://schema.org/WebPage">
<div id="fakeLoader"></div>
<div class="top-nav">
        <div class="container">
                <div class="navbar-header logo">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                Menu
                        </button>
                </div>
                <!-- nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse section section--menu" id="bs-example-navbar-collapse-1">
                        <nav class="menu">
                                <ul class="nav navbar">
                                        <li itemscope itemtype="https://schema.org/WebPage" class="element underline-opening"><a href="index.php" >Home</a></li>
                                        <li itemscope itemtype="https://schema.org/AboutPage" class="element underline-opening"><a href="aboutme.php">About Me</a></li>
                                        <li class="element underline-opening"><a href="experience.php">Experience </a></li>
                                        <li class="element underline-opening"><a href="skills.php">Skills</a></li>
                                        <li itemscope itemtype="https://schema.org/ContactPage" class="element underline-opening"><a href="contact.php">Contact</a></li>
                                        <li class="element underline-opening"><a href="web/renjithvrcv.php">Resume </a></li>

                                </ul>
                                <div class="clearfix"> </div>
                        </nav>
                </div>
        </div>
</div>
<!-- //top-nav -->
