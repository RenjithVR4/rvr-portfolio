<?php
/*
@Page : index.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: A work experience page of renjithvr.in.
*/

require_once("common/header.php");

?>

<link href="css/plugins/timeline.css" rel="stylesheet"  type="text/css" media="all"/>

        <div class="container experience-timeline">
                <header class="bp-header cf">
                        <h1 class="bp-header__title">Experience</h1>
                </header>

                <div class="container-fluid">
                        <div class="row example-centered">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                                        <ul class="timeline timeline-centered">
                                                <li class="timeline-item">
                                                        <div class="timeline-info">
                                                                <span><?php echo Date('F j, Y'); ?></span>
                                                        </div>
                                                        <div class="timeline-marker"></div>
                                                        <div class="timeline-content">
                                                                <h3 class="timeline-title">Senior Software Engineer</h3>
                                                                <hr>
                                                                <div class="space5x"></div>
                                                                <p>Currently, I'm working in SJ Enterprises as Senior Software Engineer. I'm managing projects. We are converting some LAMP Stack projects to MEAN Stack. I worked in Heroku and Mlabs. We are updating our old projects. So we are using most revelant stacks.</p>
                                                        </div>
                                                </li>
                                                <li class="timeline-item">
                                                        <div class="timeline-info">
                                                                <span>December 14, 2016</span>
                                                        </div>
                                                        <div class="timeline-marker"></div>
                                                        <div class="timeline-content">
                                                                <h3 class="timeline-title">Senior Software Engineer, SJ Enterprises</h3>
                                                                <hr>
                                                                <div class="space5x"></div>
                                                                <p>I joined in SJ Enterprises as Senior Software Engineer. SJ Enterprises was handling medical based projects. They have their own products. Here I worked with both MEAN Stack &amp; LAMP Stack. I created APIs in both stacks. I learned Meteor and Cordova to develop mobile applications. </p>
                                                        </div>
                                                </li>
                                                <!-- <li class="timeline-item period">
                                                        <div class="timeline-info"></div>
                                                        <div class="timeline-marker"></div>
                                                        <div class="timeline-content">
                                                                <h2 class="timeline-title">2013</h2>
                                                        </div>
                                                </li> -->
                                                <li class="timeline-item">
                                                        <div class="timeline-info">
                                                                <span>November 30, 2016</span>
                                                        </div>
                                                        <div class="timeline-marker"></div>
                                                        <div class="timeline-content">
                                                                <h3 class="timeline-title">Left Mobiotics</h3>
                                                                <hr>
                                                                <div class="space5x"></div>
                                                                <p>I left Mobiotics. It was a wonderful experience in Mobiotics. Learned many things within a year. I personally recommend this company, if you want to learn new things and work.  </p>
                                                          </div>
                                                  </li>
                                                  <li class="timeline-item">
                                                          <div class="timeline-info">
                                                                  <span>October 1, 2015</span>
                                                          </div>
                                                          <div class="timeline-marker"></div>
                                                          <div class="timeline-content">
                                                                  <h3 class="timeline-title">Software Engineer, Mobiotics</h3>
                                                                  <hr>
                                                                  <div class="space5x"></div>
                                                                  <p>I joined in Mobiotics as Software Engineer. This was an OTT company. Mobiotics is a certified <a class="element texteffect underline-opening" target="_blank" href="http://www.widevine.com/cwip/integrators.html" title="Wide Wine DRM">Widewine</a> implementation partner. I learned many backend skills like Cassandra, RabbitMQ, Redis etc. I developed both front end and backend features. But most of features are based on Admin side. Worked with BootStrap, Javascript and Jquery. All projects were in REST. So I developed many Rest APIs. Created dozens of Cron jobs. I worked in Centos. This company used LAMP Stack for their projects. Also, I contributed to the Roku channel project.</p>
                                                          </div>
                                                  </li>
                                                  <li class="timeline-item">
                                                          <div class="timeline-info">
                                                                  <span>September 25, 2015</span>
                                                          </div>
                                                          <div class="timeline-marker"></div>
                                                          <div class="timeline-content">
                                                                  <h3 class="timeline-title">Left Summer Minds</h3>
                                                                  <hr>
                                                                  <div class="space5x"></div>
                                                                  <p>I left Summer Minds. I got another job in Bangalore, Karnataka, India.</p>
                                                         </div>
                                                 </li>
                                                 <li class="timeline-item">
                                                         <div class="timeline-info">
                                                                 <span>September 4, 2013</span>
                                                         </div>
                                                         <div class="timeline-marker"></div>
                                                         <div class="timeline-content">
                                                                 <h3 class="timeline-title">Software Engineer, Summer Minds</h3>
                                                                 <div class="space5x"></div>
                                                                 <hr>
                                                                 <p>Joined in Summer Minds Dot Com Private Limited. This was my first company. I joined as a fresher. And It was a start-up company. Learned so many things about PHP and LAMP Stack. Developed features with PHP core &amp; OOP. I got a good experience in Codeigniter. Contributed to some Codeigniter projects. I contributed to two matrimonial websites. And one B2B project for Hong Kong. I contributed to a classifieds portal. Here I mostly concentrated on server-side. All tasks are based on PHP and MYSQL.</p>
                                                         </div>
                                                 </li>
                                         </ul>
                                 </div>
                         </div>
                 </div>
         </div>

<?php
require_once("common/footer.php");
?>
