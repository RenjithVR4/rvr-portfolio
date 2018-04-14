<?php
/*
@Page : index.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: An index page starting with home page.
*/

require_once("common/header.php");

 ?>
<!-- banner -->
<div id="video" class="video" data-vide-bg="assets/videos/bgv" data-vide-options="loop: true, autoplay: true, muted: true">
        <div class="container">
                <div class="banner-text col-md-8 col-sm-8 col-lg-8 col-md-offset-2">
                        <h1>Renjith VR</h1>
                        <h4 class="cd-headline letters type">
        			<span>I'm</span>
        			<span class="cd-words-wrapper waiting">
        				<b class="is-visible">a Software Engineer</b>
        				<b>a Backend Developer</b>
                                        <b>a LAMP Stack Developer</b>
        				<b>a Web Developer</b>
                                        <b>an API Developer</b>
                                        <b>a MEAN Stack Developer</b>
                                        <b>a Coding Enthusiast</b>
                                        <b>a Soccer Player!</b>
                                        <b>a Superhero fan!</b>
        			</span>
        		</h4>
                </div>
        </div>
</div>
<!-- //banner -->

<!-- /container -->

<!--Home JS -->
<script src="js/plugins/jquery.vide.js"></script>
<script src="js/plugins/title.js"></script>
<!--//Home JS -->

<?php
require_once("common/footer.php");
?>
