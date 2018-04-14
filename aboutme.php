<?php
/*
@Page : aboutme.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: about page of renjithvr.in.
*/

require_once("common/header.php");
date_default_timezone_set('UTC');
?>
<link href="./css/plugins/timeline.css" rel="stylesheet"  type="text/css" media="all"/>
<!-- aboutme navigation -->
<div class="aboutme-body">
        <div class="pages-nav">
                <div class="pages-nav__item"><a class="link link--page" href="#RenjithVR">I'm Renjith VR</a></div>
                <div class="pages-nav__item"><a class="link link--page" href="#Hobbies">Hobbies</a></div>
                <div class="pages-nav__item"><a class="link link--page" href="#Education">Education</a></div>
                <div class="pages-nav__item"><a class="link link--page" href="#social-Profiles">Social Profiles</a></div>
                <div class="pages-nav__item"><a class="link link--page" href="#Blogs">Blogs</a></div>
                <div class="pages-nav__item"><a class="link link--page" href="#developer-Profiles">Developer Profiles</a></div>


        </div>
        <!-- // about me navigation-->

        <!-- pages stack -->
        <div class="pages-stack">
                <!-- page -->
                <div class="page" id="RenjithVR">
                        <!-- Blueprint header -->
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">I'M RENJITH VR</h1>
                                <div class="container-fluid">
                                        <div class="pagebody mebody">

                                                <div>
                                                        <p>Hi, I'm <b>Renjith VR</b>. Friends call me <b>Renju</b>. I'm a programming Enthusiast. This is my detailed personal website. You can see all information about me. But not that all! LOL! You can find my blogs, social networks, my experience, skills etc. from here. Here you can see some common questions and answers. Please click on Menu button <img src="assets/images/menubutton.png" alt="menubutton" title="menu-button"> to explore my more details.</p>
                                                        <span class="space2x"></span>
                                                        <!-- <p class="notification">IF YOU ARE A <span class="danger"> OPERA MINI OR UC BROWSER </span> USER, PLEASE TURN OFF(DISABLE)<span class="danger"> SPEED MODE OR DATA SAVING MODE</span>. OTHERWISE, YOU WOULD NOT ABLE TO SEE MY INFORMATION.</p> -->
                                                </div>

                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Where are you from?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                I'm from India. I'm an Indian. I live in <a class="element texteffect underline-opening" title="Thrissur" target="_blank" href="https://en.wikipedia.org/wiki/Thrissur">Thrissur</a> district in <a class="element texteffect underline-opening" title="Kerala" target="_blank" href="https://en.wikipedia.org/wiki/Kerala">Kerala</a> state (District is like a county).
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What is the 'VR' in your name?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                It is the short form my middle and last name. My full name is <b class="element texteffect underline-opening">Renjith Valanighat Ramakrishnan</b>. But all of my records has my official name - RENJITH VR. <b>Valanighat</b> is my family name. And<b> Ramakrishnan</b> is my father's name. His full name is <b>V.S Ramakrishnan</b>. I hope you got it now.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What is your mother tongue(Native language)?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                I'm a Keralite(Kerala). So my mother tongue is Malayalam. But I can speak English fluently.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How old are you?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                I'm
                                                                <?php $bday = new DateTime('06.05.1990');

                                                                $today = new DateTime();

                                                                $diff = $today->diff($bday);

                                                                printf('%d years', $diff->y);
                                                                ?>
                                                                old now. My date of birth is 6th May 1990.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Could you tell about your family?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                Yes. My family is a nuclear family. There are 4 members in my family. My father, Mother, Brother &amp; me. Happy Family. :)
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Are you married?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                No. I'm not married yet(<?php echo date("F j, Y, g:i a"); ?>). I'm single :)
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How many years of Programming experience have you now?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                I have
                                                                <?php $jday = new DateTime('04.09.2013');

                                                                $today = new DateTime();

                                                                $diff = $today->diff($jday);

                                                                printf('%d years & %d months', $diff->y, $diff->m);
                                                                ?> of experience in programming. You can see more details in the  <a class="element texteffect underline-opening" target="_blank" href="http://www.renjithvr.in/experience.php" title="Renjith VR Experience">Experience</a> page.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Are you a degree holder?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                No. I skipped some examinations when I was in college because of personal problems. I have written those failed subjects again. I'm waiting for the results. I completed studies in Bachelor of Technology - Computer Science and Engineering from  Vidya Academy of Science and Technology under Calicut university. It was a 4 years degree course.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Could you give a summary of your programming experience?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                When I was in college, I started learning C. But I interested in web development. Then I started learning HTML &amp; CSS. After that, learned backend section. So I started with PHP &amp; MYSQL. So I got some knowledge on web development. And I got my first job in  <a class="element texteffect underline-opening" target="_blank" href="http://www.summerminds.com/" title="Summerminds Dot Com Private Limited">Summerminds</a>, Ernakulam, India as a <b>Software Engineer - PHP</b> in September 2013. I learned some technical stuff using PHP(OOPS &amp; Core), MYSQL and Codeigniter. I used git repository tool. I learned excellent coding standard.
                                                        </p>
                                                        <span class="space2x"></span>
                                                        <p>
                                                                After two years I resigned from this company. I joined in <a class="element texteffect underline-opening" target="_blank" href="http://mobiotics.com/" title="Mobitoics">Mobiotics</a>, Bangalore, India as <b>Software Engineer - Web and Backend</b> in October 2015.  Here, I learned more skills. The first thing was mastering in Javascript and Jquery. And then, learned and worked with Cassandra &amp; Redis. Basically, I was working with development of Rest API by using PHP with Mysql database. I used Javascript, Jquery, Bootstrap, HTML &amp; CSS for front-end Development. Before resigning from the company, I was working with Roku by using Brightscript and Scenegraph. That was courage I had. I did not have any experience on TV channel development. I started reading and learning. First two weeks, I struggled to get the idea for implementing it. I used to work continuously more than 24 hours for this Roku project. Now, I'm confident to accept new challenges. I got some good colleagues for each project. Enjoyed the teamwork. I resigned on 30th November 2016 from Mobiotics.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Why did you choose IT job? Who inspired you to become a Software Engineer?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                It was one of my choice of ambitions,to become an international soccer player or a software developer. I did not get a chance for my first choice. Because, in India, people are not promoting soccer that much! But to become an engineer is very easy in India. So I choose it. A huge number of colleges and universities are available for engineering studies in India. It was easy to get education loans from banks. And most of the parents wanted their children to become Engineer or Doctor. But it was one of my ambitions. I was curious to know technical stuff. When I started my computer education in school, I was curious to know, what kind of things happening inside the computer. So I decided to know more about it. And I found, more jobs are related to the computer and Internet. So I chose to learn web development. Nobody Inspired me to become an Engineer. I chose myself this field.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Which programming languages do you prefer?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I'm a programming enthusiast. I know PHP, Javascript, SQL, Python,  &amp; BrightScript. The first preference goes to PHP.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Which programming languages/frameworks/libraries do you prefer to learn more?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                Actually, I have some IT skills. But some of them are just average and below average knowledge. I can learn things from documentation. I don't seek help from others. If it is very critical and tough, then it is the time to seek help! You can see my skills with ratings on <a class="element texteffect underline-opening" target="_blank" href="http://www.renjithvr.in/skills.php" title="Skills Page">Skills page</a>. I don't have good knowledge on some skills, but I can say "<i>Average knowledge</i>". I used to search internet, read and then implement things.
                                                        </p>
                                                        <span class="space2x"></span>
                                                        </p>
                                                                Among programming languages, I would like to learn Ruby, Go, Erlang, C++ &amp; Scala from the beginning. Among Frameworks, I wanted to learn Python - Django, Javascript - ReactJS, NodeJS, AngularJS &amp; VueJS. PHP - Laravel &amp; Symfony. For CMS, I prefer PHP programming language. So I would like to learn more about Wordpress &amp; Drupal. And I wanted to learn more about some Python libraries Kivy, Splinter, OpenCV &amp; Scrapy. Among Databases, I wanted to learn more about MongoDB, Neo4J, Cassandra, BigTable, Firebase, PostgreSQL &amp; Oracle.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Which IDE are you using?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I don't believe that coding should do with an IDE. I think it is not mandatory. If we have vim editor or text editor, we can start coding. But IDEs have some more options for the development of a project. I would prefer Atom &amp; Sublime. I have experience in VS Code, Eclipse &amp; Netbeans.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Could you mention some of your major works and contributions?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <div>
                                                                <p>
                                                                        When I was in <b>summerminds dot com private limited</b>, I contributed to B2B, news portal &amp; matrimonial projects. We used Codeigniter and Object Oriented PHP for the development of projects.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>MarunadanMalayali - An Online News Portal</li>
                                                                        <li>Bethlehem Matrimonial - A Christian Matrimonial.</li>
                                                                        <li>Exporters.hk - A B2B project for HongKong.</li>
                                                                        <li>E4Emrites - An online Classifieds for UAE.</li>
                                                                        <li>Halal Matrimonial - A Muslim Matrimonial for Kerala.</li>
                                                                </ol>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        In my second company, I created some features related to following projects. It was weekly based tasks.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>Hinduja HITS(Headend In The Sky) - A Cable TV operation project having 6M+ customers</li>
                                                                        <li>Hinduja IMCL(IndusInd Media &amp; Communications Ltd) - A Cable TV operation project having 3M+ customers</li>
                                                                </ol>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        I contributed to some OTT projects with Google Widewine DRM player and a Roku channel Project.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>planetcast.in - An OTT project</li>
                                                                        <li>ALT Balaji Roku Channel - A Roku Channel Project for the subsidiary of Balaji Telefilms Limited</li>
                                                                        <li>Fastflimz - An OTT project</li>
                                                                </ol>
                                                                <span class="space2x"></span>

                                                                <p>
                                                                        These are the major works that I contributed. Some of the works are not released yet. Some of the projects are not completed yet(may be dropped!). Both companies were following teamwork. And you can visit my <a class="element texteffect underline-opening" target="_blank" href="https://github.com/RenjithVR4" title="GitHub">Github</a> to see my own projects and code samples.
                                                                </p>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Which are your favorite Operating systems?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                Ubuntu is my favorite OS. I have been using Ubuntu for the last 7 years. I started using Ubuntu from college. I like centOS &amp; Mint too.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Would you like to work abroad?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                Yes, But I don't prefer African countries. If the company is willing to sponsor me with the work visa, I can come abroad and work.I can speak  English and Malayalam fluently. I don't speak any other languages.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Do you have any work visa from any country?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                No. I don't have. I'm an Indian. But I need the work visa to work abroad.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Would you accept remote jobs?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                Yes of course. I can do it.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How many days do you need to learn and implement things that unfamiliar for you?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I cannot give an exact number of days. It depends on the new stuff and project.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What are your weaknesses?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I'm not a bold man. Sometimes, a bad conversation or shouting would make me sad. This will affect my work. It would make a difference the speed of coding. I think it's normal like other people. So I always try to maintain pleasant mind. And I will neglect to remember bad incidents happened in my life.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What are your strengths?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I'm a programming enthusiast. I have a deep curiosity on programming. So I can start learning new things without any problems. I have good analytical and critical thinking skills. I will clear my doubts by making a healthy conversation to colleagues. I have good behavior to help colleagues and friends to solve their coding problems and issues. A good knowledge of coding. I can accept new challenges. You can see my technical skills on <a class="element texteffect underline-opening" target="_blank" href="http://www.renjithvr.in/skills.php" title="Skills Page">Skills page</a>.
                                                        </p>
                                                </div>
                                        </div>
                                </div>

                        </header>

                </div>
                <!-- /page -->
                <div class="page" id="Hobbies">
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">HOBBIES</h1>

                                <div class="container-fluid">
                                        <div class="pagebody mebody">

                                                <p>
                                                        This is hobbies section. You can see some questions and answers related to my hobbies and interests.
                                                </p>

                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What are your hobbies?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                I have some hobbies. Hobbies depending on my mood. Listening music, Blogging, watching superhero movies. And I would like to travel. Not interested in driving a long distance. I would like to be a passenger and travel. I used to listen to music different languages and genres.  Hobbies have changed from age to age. When I was a kid, I have a weird hobby. A collection of feathers. I used to collected feathers of different birds from forests, fields, farms. And pinned in a book with labels. I was thinking different. Other friends got some collection like coins, stamps. But I found this. LOL!
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How does your average day look like?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                If I'm in the office, I would work like a normal employee. On holidays, I don't go outside. I would like to spend time with family(If I got a job in my district). After resigning from Mobiotics, I spent more time to create new blogs and funny trolls for social networks.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>So, you are a blogger too. Could you list your blogs?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <div>
                                                                <p>You can see my blogs and other profiles with URL. Please go the menu <img src="assets/images/menubutton.png" alt="menubutton" title="menu-button">.</p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>Coding Alien</li>
                                                                        <li>RVR Superheroes</li>
                                                                        <li>RVR Favorites</li>
                                                                        <li>RVR Comments</li>
                                                                        <li>Renjith VR - Medium</li>
                                                                        <li>Renjith VR - Creators</li>
                                                                </ol>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>What are the other social networks and profiles that you didn't mention here?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <div>
                                                                <p>I have Five more. But I'm not using all these social networks regularly.</p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li><a class="element texteffect underline-opening" href="https://www.reddit.com/user/RenjithVR4/" target="_blank" title="Renjith VR">Renjith VR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; <i class="fa fa-reddit fa-lg"></i> Reddit</li>
                                                                        <li><a class="element texteffect underline-opening" href="https://www.flickr.com/photos/renjuvr/" target="_blank" title="Renjith VR">Renjith VR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   -&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-flickr fa-lg"></i> Flickr</li>
                                                                        <li><a class="element texteffect underline-opening" href="http://www.imdb.com/user/ur65768879/" target="_blank" title="Renjith VR">Renjith VR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-imdb fa-lg"></i> IMDB</li>
                                                                        <li><a class="element texteffect underline-opening" href="https://vk.com/renjithvr" target="_blank" title="Renjith VR">Renjith VR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-vk fa-lg"></i> VK</li>
                                                                        <li><a class="element texteffect underline-opening" href="http://9gag.com/u/renjithvr/" target="_blank" title="Renjith VR">Renjith VR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <i><img class="fa-9gag " alt="9GAG" src="assets/images/9gag.png"/></i>9GAG</li>

                                                                </ol>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How are you maintaining these blogs and profiles? How much time would you spend with these things in a day?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <div>
                                                                <p>
                                                                        I'm not a daily blogger. Yes, I have some blogs and social networks. <b>I created my blog and personal website after resigning from Mobiotics</b>. I always spend less than 10 minutes on social networks. But I'm not a regular user. I don't use these social networks daily. If I get more time, then I would try to write a blog. I have a list of a plan on writing blogs. Writing blog is fully depending upon the time.  But I would check the notifications and statuses on social networks before sleeping.  I would spend 15 minutes for these social networks before sleeping.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        For example :: <a class="element texteffect underline-opening" href="https://www.instagram.com/codingalien/" target="_blank" title="Coding Alien Instagram">Coding Alien - Instagram</a> profile.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        Users are following this profiles for my new updates. I always make some funny troll images related to coding/programming. I could spent less than 5 minutes for posting images on Instagram.  That's all for a day. This is same for RVR Superheroes, RVR Comments, RVR Favorites.
                                                                </p>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Do you dance?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <p>
                                                                Yes, I do. I used to dance when I was in school. Participated some dance competitions. After joining college, I did not participate in any competitions. But I can do. I cannot say that I'm good and professional.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Who are your Favorite Actors?</h3>
                                                        <hr>
                                                </div>

                                                <div class="answers">
                                                        <div>
                                                                <p>I have 6 favorite actors in different languages.</p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>Christian Bale in English movies.</li>
                                                                        <li>Mohan Lal in Malayalam movies.</li>
                                                                        <li>Kamal Hassan &amp; Chiyaan Vikram in Tamil movies.</li>
                                                                        <li>Sharukh Khan &amp; John Abraham in Hindi Movies.</li>
                                                                </ol>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Which are your favorite songs?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                There are many songs. So I created a blog about my favorite songs.I always share my favorite songs from youtube &amp; online radios. I love all genres. I used to listen to songs from different languages. <a class="element texteffect underline-opening" href="https://rvrfavorites.tumblr.com/" target="_blank" title="RVR Favorites">RVR Favorites</a> - A blog for my favorite songs.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Who are your favorite comic superheroes?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <div>
                                                                <ol>
                                                                        <li>Batman from DC Comics.</li>
                                                                        <li>Ironman from Marvel.</li>
                                                                        <li>Deadpool from Marvel.</li>
                                                                        <li>Wolverine from Marvel.</li>
                                                                        <li>Spiderman from Marvel.</li>
                                                                        <li>Flash from DC Comics.</li>
                                                                        <li>Swat Kats from Hanna-Barbera Productions.</li>
                                                                </ol>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        I'm a superhero fan. That's why I created a blog for superheroes -  <a class="element texteffect underline-opening" href="https://rvrsuperheroes.tumblr.com" target="_blank" title="RVR Favorites">RVR SuperHeroes.</a>
                                                                </p>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Do you drink and smoke?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                No. I don't. I wanted to be a different man. Drinking and Smoking are common. But I want to be a different man. I could start drinking and smoking. But I don't want that. I don't like to get fun from drugs, marijuana or other stuff. LOL!
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How could blogging and solving bugs on StackOverflow are the part of your hobbies?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <div>
                                                                <p>
                                                                        I always help others if I can. If I found something related to coding, I would create a blog for others. Maybe the same topic already in the Google. But I don't care. I will create the blog in my view by including the way I used. So for each experiment on coding, I used to write some important points. I use this points to create the blog. I would investigate things related to the topic on the internet. And I would include these investigated data to my blog. If people visits and refers my content is kinda special feeling for me. This is the motivation to write more blogs.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <p>
                                                                        Stackoverflow is the best problem-solving network. Users are ready to help people by answering questions. But the reputation is a big factor. Some people are crazy about it. But for me, I wanted to help people. I don't ask/seek these questionnaires to give an upvote! LOL! I would do run the given issue or problem on my machine. Sometimes I will refer from other resources to find the right answer.
                                                                </p>
                                                        </div>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>How are you selecting topics for your blogs?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I'm selecting topics from my own coding experiments and projects. If tried something new and implemented, then I would create a blog about it. And I would use computer science and engineering study topics.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>Could you tell about your future plans?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <p>
                                                                I would like to work as a Developer/Engineer under a reputed company with beautiful salary :). And I would start a business after some years. I cannot make any prejudice about my future. If I plan something, sometimes  it won't work. Because god is handling everything. He has more control than me. He is the Super Admin.
                                                        </p>
                                                </div>
                                                <span class="space2x"></span>
                                                <div class="questions">
                                                        <h3>For Learning PHP for a Beginner, which books would you suggest?</h3>
                                                        <hr>
                                                </div>
                                                <div class="answers">
                                                        <div>
                                                                <p>
                                                                        I would suggest books from CEO of the <b>Stripe Payments</b> - Mr. Larry Ullman. And some other good books. The names of the books are following.
                                                                </p>
                                                                <span class="space2x"></span>
                                                                <ol>
                                                                        <li>PHP 6 and MySQL 5 for Dynamic Web Sites - Larry Ullman</li>
                                                                        <li>PHP 5 Advanced: Visual QuickPro Guide - Larry Ullman</li>
                                                                        <li>Head First PHP &amp; MySQL: A Brain-Friendly Guide</li>
                                                                        <li>PHP for the World Wide Web - Larry Ullman</li>
                                                                        <li>PHP Objects, Patterns, and Practice</li>
                                                                        <li>PHP in a Nutshell</li>
                                                                        <li>PHP &amp; MySQL: Novice to Ninja</li>
                                                                </ol>
                                                        </div>

                                                </div>

                                        </div>
                                </div>
                        </header>

                </div>

                <!-- Blogs -->
                <div class="page" id="Blogs">
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">Blogs</h1>
                        </header>
                        <div class="container">
                                <div class="row">
                                        <div class="pagebody center-block blogs-body">
                                                <div class="box">
                                                        <a href="https://www.codingalien.com/" target="_blank" data-toggle="tooltip" data-placement="top" title="Coding Alien">
                                                                <blockquote class="quote-box quote-box-codingalien">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                Coding Alien! My official blog for programming and technical stuff.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        Coding Alien
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i><img class="fa-custom-icons " alt="Coding Alien" src="assets/images/CALogo.png"/></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>

                                                <div class="box">
                                                        <a href="https://rvrfavorites.tumblr.com/" target="_blank" data-toggle="tooltip" data-placement="top" title="RVR Favorites">
                                                                <blockquote class="quote-box quote-box-rvrfavorites">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                A Tumblr blog my favorite songs from different languages.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        RVR Favorites
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i class="fa fa-tumblr fa-2x"></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>
                                                <div class="box">
                                                        <a href="https://rvrsuperheroes.tumblr.com/" target="_blank" data-toggle="tooltip" data-placement="top" title="RVR Superheroes">
                                                                <blockquote class="quote-box quote-box-rvrsuperheroes">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                A Tumblr blog for superhero comparisons &amp; informations.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        RVR Superheroes
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i class="fa fa-tumblr fa-2x"></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>
                                                <div class="box">
                                                        <a href="http://rvrcomments.tumblr.com/" target="_blank" data-toggle="tooltip" data-placement="top" title="RVR Comments">
                                                                <blockquote class="quote-box quote-box-rvrcomments">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                A Tumblr blog for selected best comments from social medias.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        RVR Comments
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i class="fa fa-tumblr fa-2x"></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>

                                                <div class="box">
                                                        <a href="https://medium.com/@Renjthvr" target="_blank" data-toggle="tooltip" data-placement="top" title="Medium">
                                                                <blockquote class="quote-box quote-box-medium">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                My social blog for writing about general topics &amp; social issues.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        Medium
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i class="fa fa-medium fa-2x"></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>
                                                <div class="box">
                                                        <a href="https://creators.co/@RVR" target="_blank" data-toggle="tooltip" data-placement="top" title="Creators/Movie Pilot">
                                                                <blockquote class="quote-box quote-box-creators">
                                                                        <p class="quotation-mark">
                                                                                “
                                                                        </p>
                                                                        <p class="quote-text">
                                                                                Blogging about movies and superheros. I'm enjoying this platform.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="blog-post-actions">
                                                                                <p class="blog-post-bottom pull-left">
                                                                                        Creators/Movie Pilot
                                                                                </p>
                                                                                <p class="blog-post-bottom pull-right">
                                                                                         <i><img class="fa-custom-icons fa-creators" alt="Creators" src="assets/images/CMPLogo.svg"/></i>
                                                                                        <span class="hidden-xs"></span>
                                                                                </p>
                                                                        </div>
                                                                </blockquote>
                                                        </a>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>
                <!-- Social Profiles -->
                <div class="page" id="social-Profiles">
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">SOCIAL PROFILES</h1>
                        </header>
                        <div class="container">
                                <div class="row">
                                        <div class="pagebody center-block social-profiles-body">
                                                <div class="social-profiles-box">

                                                        <!-- <div class="box">
                                                                <a href="https://www.flickr.com/photos/renjuvr/" target="_blank" data-toggle="tooltip" data-placement="top" title="Flickr">
                                                                        <blockquote class="quote-box quote-box-flickr">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        I'm no Photographer. But I would like to share some pictures.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Flickr
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-flickr fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div> -->


                                                        <div class="box">
                                                                <a href="https://www.facebook.com/renjithvr.cruiser" target="_blank" data-toggle="tooltip" data-placement="top" title="Login Facebook,to see my profile">
                                                                        <blockquote class="quote-box quote-box-facebook">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        For me, Facebook is quite personal. I won't add strangers!
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Facebook
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-facebook fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://plus.google.com/u/0/+RenjithVR4" target="_blank" data-toggle="tooltip" data-placement="top" title="Google Plus">
                                                                        <blockquote class="quote-box quote-box-google">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        I always share featured blogs and images to communities.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Google+
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-google-plus fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <!-- <div class="box">
                                                                <a href="http://www.imdb.com/user/ur65768879/" target="_blank" data-toggle="tooltip" data-placement="top" title="IMDB">
                                                                        <blockquote class="quote-box quote-box-imdb">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        I would like to create movie lists and reviews. Loves superhero films!
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                IMDB
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-imdb fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div> -->

                                                        <div class="box">
                                                                <a href="https://www.linkedin.com/in/renjithvr4" target="_blank" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                                                                        <blockquote class="quote-box quote-box-linkedin">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        My best professional network.  I always keep it clean.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                LinkedIn
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-linkedin fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <div class="box">
                                                                <a href="https://www.quora.com/profile/Renjith-VR" target="_blank" data-toggle="tooltip" data-placement="top" title="Quora">
                                                                        <blockquote class="quote-box quote-box-quora">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Answered questions on some topics. Enjoyed by answering.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Quora
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-quora fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://www.xing.com/profile/Renjith_VR2" target="_blank" data-toggle="tooltip" data-placement="top" title="Xing">
                                                                        <blockquote class="quote-box quote-box-xing">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        My German Professional Network. I would like to make more connections.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Xing
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-xing fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <div class="box">
                                                                <a href="https://www.instagram.com/codingalien/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram">
                                                                        <blockquote class="quote-box quote-box-instagram">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Sharing images related to coding and programming blogs.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Instagram
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-instagram fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <div class="box">
                                                                <a href="https://twitter.com/allow1234me" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">
                                                                        <blockquote class="quote-box quote-box-twitter">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        If I found something new or special, twitter is the right platform.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Twitter
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                <i class="fa fa-twitter fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://www.youtube.com/channel/UC-NsW9hQMf3WvZDGchEF7KA" target="_blank" data-toggle="tooltip" data-placement="top" title="Youtube">
                                                                        <blockquote class="quote-box quote-box-youtube">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Sharing random videos about superheroes and personal stuff.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Youtube
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-youtube fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>

                <!-- Developer Profiles -->
                <div class="page" id="developer-Profiles">
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">DEVELOPER PROFILES</h1>
                        </header>
                        <div class="container">
                                <div class="row">
                                        <div class="pagebody center-block developer-body">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="box">
                                                                <a href="https://www.stackoverflow.com/users/5857047/renjith-vr" target="_blank" data-toggle="tooltip" data-placement="top" title="StackOverflow">
                                                                        <blockquote class="quote-box quote-box-stackoverflow">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Happy to help programmers by asking &amp; answering questions.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                StackOverflow
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-stack-overflow fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <div class="box">
                                                                <a href="https://www.hackerrank.com/Renjithvr" target="_blank" data-toggle="tooltip" data-placement="top" title="HackerRank">
                                                                        <blockquote class="quote-box quote-box-hackerrank">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Ranking! Solved some problems from an excellent platform.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                HackerRank
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i><img class="fa-custom-icons " alt="Hacker Rank" src="assets/images/HRLogo.png"/></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://www.codechef.com/users/renjithvr4" target="_blank" data-toggle="tooltip" data-placement="top" title="CodeChef">
                                                                        <blockquote class="quote-box quote-box-codechef">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Trying to solve different problems. That's why I chose CodeChef.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                CodeChef
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i><img class="fa-custom-icons  fa-code-chef" alt="Code Chef" src="assets/images/CCLogo.png"/></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://www.techgig.com/renjithvr4" target="_blank" data-toggle="tooltip" data-placement="top" title="Techgig">
                                                                        <blockquote class="quote-box quote-box-techgig">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        I wanted to learn more coding skills. Not only with a single language!
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Techgig
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i><img class="fa-custom-icons  fa-techgig" alt="TechGig" src="assets/images/TGLogo.png"/></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>

                                                        <div class="box">
                                                                <a href="http://codepen.io/renjithvr/" target="_blank" data-toggle="tooltip" data-placement="top" title="Codepen">
                                                                        <blockquote class="quote-box quote-box-codepen">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Best online code editing platform to dance with front-end development.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Codepen
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-codepen fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://jsfiddle.net/user/RenjithVR4/" target="_blank" data-toggle="tooltip" data-placement="top" title="JSFiddle">
                                                                        <blockquote class="quote-box quote-box-jsfiddle">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        Saved some Javascript codes for some online demonstration.
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                JSFiddle
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-jsfiddle fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://github.com/RenjithVR4" target="_blank" data-toggle="tooltip" data-placement="top" title="GitHub">
                                                                        <blockquote class="quote-box quote-box-github">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        My public code repository. You can find my public works here!
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                GitHub
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                <i class="fa fa-github fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                        <div class="box">
                                                                <a href="https://bitbucket.org/codingalien/" target="_blank" data-toggle="tooltip" data-placement="top" title="Bitbucket">
                                                                        <blockquote class="quote-box quote-box-bitbucket">
                                                                                <p class="quotation-mark">
                                                                                        “
                                                                                </p>
                                                                                <p class="quote-text">
                                                                                        I used Mercurial version control tool here. My private code repository!
                                                                                </p>
                                                                                <hr>
                                                                                <div class="blog-post-actions">
                                                                                        <p class="blog-post-bottom pull-left">
                                                                                                Bitbucket
                                                                                        </p>
                                                                                        <p class="blog-post-bottom pull-right">
                                                                                                 <i class="fa fa-bitbucket fa-2x"></i>
                                                                                                <span class="hidden-xs"></span>
                                                                                        </p>
                                                                                </div>
                                                                        </blockquote>
                                                                </a>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>

                </div>
                <!-- Education -->
                <div class="page" id="Education">
                        <header class="bp-header cf">
                                <h1 class="bp-header__title">EDUCATION</h1>
                        </header>
                        <div class="container-fluid">
                                <div class="row example-centered">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                                                <ul class="timeline timeline-centered">
                                                        <li class="timeline-item">
                                                                <div class="timeline-info">
                                                                        <span>October, 2013</span>
                                                                </div>
                                                                <div class="timeline-marker"></div>
                                                                <div class="timeline-content">
                                                                        <h3 class="timeline-title">Certified PHP Candidate</h3>
                                                                        <hr>
                                                                        <div class="space5x"></div>
                                                                        <p>I got PHP training Certification from Vidya Academy Of Science &amp; Technology - IT Division. I learned some good things about PHP, MYSQL &amp; APACHE. This helped me to get the job in Summer Minds</p>
                                                                </div>
                                                        </li>
                                                        <li class="timeline-item">
                                                                <div class="timeline-info">
                                                                        <span>July, 2013</span>
                                                                </div>
                                                                <div class="timeline-marker"></div>
                                                                <div class="timeline-content">
                                                                        <h3 class="timeline-title">Started PHP Training</h3>
                                                                        <hr>
                                                                        <div class="space5x"></div>
                                                                        <p>I joined in Vidya Academy Of Science &amp; Technology - IT Division to learn about PHP programming language. </p>
                                                                </div>
                                                        </li>
                                                        <!-- <li class="timeline-item period">
                                                                <div class="timeline-info"></div>
                                                                <div class="timeline-marker"></div>
                                                                <div class="timeline-content">
                                                                        <h2 class="timeline-title"> May 2013</h2>
                                                                </div>
                                                        </li> -->
                                                        <li class="timeline-item">
                                                                <div class="timeline-info">
                                                                        <span>May, 2013</span>
                                                                </div>
                                                                <div class="timeline-marker"></div>
                                                                <div class="timeline-content">
                                                                        <h3 class="timeline-title">Completed Degree Course</h3>
                                                                        <hr>
                                                                        <div class="space5x"></div>
                                                                        <p>I just finished Bachelor of Technology - Computer Science &amp; Engineering. But I was not a degree holder. I skipped some examinations.</p>
                                                                  </div>
                                                          </li>
                                                          <li class="timeline-item">
                                                                  <div class="timeline-info">
                                                                          <span>June, 2009</span>
                                                                  </div>
                                                                  <div class="timeline-marker"></div>
                                                                  <div class="timeline-content">
                                                                          <h3 class="timeline-title">Started Degree </h3>
                                                                          <hr>
                                                                          <div class="space5x"></div>
                                                                          <p>Got admission in Vidya Aacdemy of Science &amp; Technology college under Calicut University for Bachelor of Technology - Computer Science &amp; Engineering. I wrote a state Engineering Entrance Examination. Based on my score and rank, I got the seat in this college.</p>
                                                                  </div>
                                                          </li>
                                                          <li class="timeline-item">
                                                                  <div class="timeline-info">
                                                                          <span>March, 2008</span>
                                                                  </div>
                                                                  <div class="timeline-marker"></div>
                                                                  <div class="timeline-content">
                                                                          <h3 class="timeline-title">Completed High School</h3>
                                                                          <hr>
                                                                          <div class="space5x"></div>
                                                                          <p>I completed High School studies under kerala state board syllabus with 69% of marks.</p>
                                                                 </div>
                                                         </li>
                                                         <li class="timeline-item">
                                                                 <div class="timeline-info">
                                                                         <span>July, 2006</span>
                                                                 </div>
                                                                 <div class="timeline-marker"></div>
                                                                 <div class="timeline-content">
                                                                         <h3 class="timeline-title">Started High School Studies</h3>
                                                                         <hr>
                                                                         <p>I got the admission in GHSS Kattilapoovam for Science branch. So I learned, Maths, Chemistry, Physics, &amp; Biology as main subjects. This was actually two years(11th &amp; 12th). </p>
                                                                 </div>
                                                         </li>
                                                         <li class="timeline-item">
                                                                 <div class="timeline-info">
                                                                         <span>March, 2006</span>
                                                                 </div>
                                                                 <div class="timeline-marker"></div>
                                                                 <div class="timeline-content">
                                                                         <h3 class="timeline-title">Completed School Studies</h3>
                                                                         <hr>
                                                                         <p>Completed 10th Standarad from Kerala Agricultural University School with 70% Score. </p>
                                                                 </div>
                                                         </li>
                                                 </ul>
                                         </div>
                                 </div>
                         </div>
                                        </li>
                                </ul>
                        </div>
                </div>

        </div>
        <!-- /pages-stack -->
        <button class="menu-button"><span>More About Me</span></button>
</div>
<!--Aboutme JS -->
<script src="js/plugins/classie.js"></script>
<script src="js/plugins/timeline.js"></script>
<script src="js/about_pagestack.js"></script>

<!-- //Aboutme JS -->

<?php
require_once("common/footer.php");
?>
