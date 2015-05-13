<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package portfolio
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <a href="#" class="scrollToTop">go to top</a>
    
	<header>
            <div class='clearfix'>
                <nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                
                
                    
                
                
                <div id="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo3.png" />
                </div>
            
		<div class="site-branding">
                        
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    		
		</div><!-- .site-branding -->
            
            </div>
	</header>
    
   <div id="bg">
    <div class="wrapper">
           <div class="about" id="about">
            
            <div class="headingContainer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
                <h2>About Me</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow2.png" />
            </div>
            
            <div class="intro clearfix">
                
                <div id="sillyFace">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" />
                </div>
                
                <div class="textWithButtons">
                    
                    <p>Hi, I'm Daria. I am self-taught junior front-end developer based in San Diego, CA. 
                                I’ve taken up programming fairly recently but I’m proud to say I’ve already covered a lot.
                                I am in love with creating beautiful web sites and making things to work with the magic of code. 
                                I thrive on learning and challenging myself to go above and beyond and always hungry for new best practices.</p>
                    
                    <div class="button left">      
                         <span> 3 random facts about me </span>       
                    </div>
                            
                    <div class="button right">
                        <a href="http://www.dariazolotko.com/wp-content/uploads/2015/05/DariaZolotko_JuniorWebDeveloper.pdf" target="_blank">
                            Download my resume
                        </a>
                    </div>  
                    
                </div>
                
                <div class="randomFacts clearfix">
                             
                            
                </div>
                
            </div>
            
        </div>
            
            <div class="skills clearfix" id="skills">
                
                <div class="headingContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
                    <h2>My Skills</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow2.png" />
                </div>
                
                <div id="skillBarsWrapper">
                   
                    <div class="skillbar  " data-percent="90%">
                        <div class="skillbar-title" style="background: #547980;"><span>HTML / CSS </span></div>
                        <div class="skillbar-bar" style="background: #547980;"></div>
                        <div class="skill-bar-percent">2 Years</div>
                    </div>
                    
                    <div class="skillbar  " data-percent="80%">
                        <div class="skillbar-title" style="background: #45ADA8;"><span>Responsive</span></div>
                        <div class="skillbar-bar" style="background: #45ADA8;"></div>
                        <div class="skill-bar-percent">1 year</div>
                    </div>
                    
                    <div class="skillbar  " data-percent="65%">
                        <div class="skillbar-title" style="background: #9DE0AD;"><span>Jquery / JS</span></div>
                        <div class="skillbar-bar" style="background: #9DE0AD;"></div>
                        <div class="skill-bar-percent">0.5 year</div>
                    </div>
                    
                    <div class="skillbar " data-percent="70%">
                        <div class="skillbar-title" style="background: #E5FCC2;"><span>Wordpress / PHP</span></div>
                        <div class="skillbar-bar" style="background: #E5FCC2;"></div>
                        <div class="skill-bar-percent">0.5 year</div>
                    </div>
                    
                 
                    
                </div>
                
                <div id="skillsExtra">
                    <h3>Also:</h3>
                    <ul>
                        <li class="fade">I used to get my hands dirty with Angular.js, Bootstrap, SQL queries, Ruby and ASP.Net MVC </li>
                        <li class="fade">I use Git</li>
                        <li class="fade">Have a solid understanding of OOP principles</li>
                        <li class="fade">I am a creative thinker, able to be resourceful in any environment</li>
                        <li class="fade">...and just fun, kind and easygoing person :)</li>
                        
                    </ul>
                    
                  
                    
                </div>
                
            </div>
            
            <div class="portfolio clearfix" id="portfolio">
                     <div class="headingContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
                        <h2>My Portfolio</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow2.png" />
                    </div>
                
                <p>I do not have a "real world" commercial experience yet, but I consider myself a 
                    useful entry-level web developer who can get things done.</p>
                <p>Hover over thumbnails to see the details or click to check out the live site</p>
                <p>Several projects are not online yet, but the info is present and I'm gonna add them soon.</p>
                    
                
                <div class="project">
                    <h5>Designer's portfolio</h5>
                    <a href="http://www.kingamila.com"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kinga.jpg" />
                        <div class="caption"><p>Site-portfolio for my friend Kinga who is a designer. HTML, CSS, Jquery</p></div>
                    </a>
                    
                    
                </div>
                
                <div class="project">
                    <h5>Designer's portfolio/previous</h5>
                    <a href="http://www.kinga.dariazolotko.com"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kinga2.jpg" />
                        <div class="caption"><p>Previous Kinga's portfolio site version that was never in use. HTML, CSS, Jquery, Custom design from scratch</p></div>
                    </a>
                    
                    
                </div>
                
                <div class="project">
                    <h5>HTML5 ToDo List</h5>
                    <a href="http://www.todolist.dariazolotko.com"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/images/todo.png" />
                        <div class="caption"><p>HTML5 ToDo list that uses localStorage. Includes drag-and-drop, clear and delete features. </p></div>
                    </a>
                </div>
                 
                <div class="project">
                    <h5>Angular.js application</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
                        <div class="caption"><p>Angular.js web application that can handle multiple users, registration, and real-time data</p></div>
                    
                </div>
             
                
                <div class="project">
                    <h5>Bootstrap application</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
                        <div class="caption"><p>Bootstrap app, MindMaps and Balsamiq Mockups, Scaffolding, Less</p></div>
                    
                </div>
                
                <div class="project">
                    <h5>Node.js & Express.js application</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
                        <div class="caption"><p>Node.js and Express.js server-side app</p></div>
                    
                </div>
                
                <div class="project">
                    <h5>JS landing page for a hotel</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.png" />
                        <div class="caption"><p>Landing page for Landon hotel. Javascript, Node.js</p></div>
                    
                </div>
                    
                
            </div>
            
            <div class="contact clearfix" id="contact">
                 <div class="headingContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
                        <h2>Contact Me</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow2.png" />
                </div>
                
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
               
                
            </div>
        
      
            
                
        
        
    </div>
  </div>     
    
    <?php get_footer(); ?>
 
    <?php wp_footer(); ?>
    
</body>

</html>

        



