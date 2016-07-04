<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>James Bubb | Does stuff with the web</title>
  <!-- <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'> -->
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <section id="jumbotron">
    <div class="container">
      <header>

        <h1>James Bubb </h1>
        <ul>
          <li><a class="scrollTo" href="#info">About</a></li>
          <li><a class="scrollTo" href="#skills">Skills</a></li>
          <li><a class="scrollTo" href="#projects">Projects</a></li>
          <li><a class="scrollTo" href="#blog">Blog</a></li>
        </ul>
        <div class="social">
          <a href="mailto:contact@jamesbubb.co.uk"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/email.png" alt=""></a>
          <a href="https://www.linkedin.com/in/james-bubb-40753142"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Linkedin.png" alt=""></a>
          <a href="https://github.com/codebubb"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Github.png" alt=""></a>
          <a href="https://twitter.com/codebubb"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Twitter.png" alt=""></a>
        </div>
      </header>
    </div>
  </section>

  <section id="info" class="info">
    <div class="container">
			<h2 style="text-align: center;">Hi, i'm James and I do stuff with the web.<hr></h2>

      <p>
        I've always been interested in coding but it wasn't until last year when I started <a href="http://freecodecamp.com/codebubb">FreeCodeCamp</a> that my passion for development was ignited. Since then i've worked hard to develop a robust set of <a href="#skills">skills</a> that allow me to work both front and back end, giving me flexbility to develop full-stack applications.

        In my current role I work with apprentices, teaching them the the fundamentals of programming.  I have also previously worked within a successful support team for a professional web hosting company which allowed me to develop a keen problem solving mindset.</p>
        <br>
        <h3 >I am 100% dedicated to developing new skills, perfecting my talents and becoming a top-class full-stack developer.</h3>
      </div>
    </section>

    <section class="page" id="skills">
      <div class="container">
        <h2>Skills<hr></h2>
        <!-- Thanks to https://davidwalsh.name/css-flip for flip effect -->
        <h3 style="text-align: center;">These are some technologies I feel pretty confident using.</h3>
        <ul class="skill-list">
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/html5.png" alt="HTML5">
                </div>
                <div class="back">
                  <p>I think it's important to have good semantic HTML. I would like to learn more about accessibility. I sometimes use <a href="http://haml.info">HAML</a>.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/css3.png" alt="">
                </div>
                <div class="back">
                  <p>I like to use SASS to pre-process CSS but have recently been writing selectors independently to better understand the cascade.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/js.png" alt="">
                </div>
                <div class="back">
                  <p>I use BDD frameworks like Jasmine to write unit tests. I like to use vanilla JavaScript wherever possible.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/bootstrap.png" alt="">
                </div>
                <div class="back">
                  <p>BootStrap is great for quickly adding style to forms, buttons etc. I find the collapsible navs great for mobile!</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/jquery.png" alt="">
                </div>
                <div class="back">
                  <p>I like the way jQuery makes XHR easy to implement. I try and avoid it however if it is just needed for CSS selectors.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/nodejs.png" alt="">
                </div>
                <div class="back">
                  <p>Node's async nature took a bit of getting used to but I feel it can be a really powerful way of handling server side tasks.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/git.png" alt="">
                </div>
                <div class="back">
                  <p>I use BitBucket to hold private repos and have some public ones hosted on <a href="https://github.com/codebubb">GitHub</a>.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/php.png" alt="">
                </div>
                <div class="back">
                  <p>I started using PHP a long time ago and have recently looked at the Laravel Framework.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mysql.png" alt="">
                </div>
                <div class="back">
                  <p>I find that it's good to know the SQL statements that your ORM is using and MySQL/MariaDB is good to learn from.</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <h3>And these are some that I am using and would like to learn more about.</h3>
        <ul class="skill-list">
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/angular.png" alt="">
                </div>
                <div class="back">
                  <p>I've been using Angular on recent projects as part of the MEAN stack.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/express.png" alt="">
                </div>
                <div class="back">
                  <p>I use Express to construct APIs to be consumed by Angular and other services.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mongodb.png" alt="">
                </div>
                <div class="back">
                  <p>I find MongoDB to be easy to get along with, usually integrating it with Mongoose for ODM.</p>
                </div>
              </div>
            </div>
          </li>

          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/rails.png" alt="">
                </div>
                <div class="back">
                  <p>I've been a big fan of Rails and have learnt a lot about MVC and software development from building apps using it.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/photoshop.png" alt="">
                </div>
                <div class="back">
                  <p>I have followed several 'design for developers' tutorials and used PhotoShop to create website mockups.</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <h3>Finally, this is what I have plan to focus on in the future.</h3>
        <ul class="skill-list">
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/android.png" alt="">
                </div>
                <div class="back">
                  <p>I want to take the APIs from some of the projects I have created and build native apps that make use of these. </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/react.png" alt="">
                </div>
                <div class="back">
                  <p>I have heard lots of great things about React but haven't had the chance to take a look yet.</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="skill-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gulp.png" alt="">
                </div>
                <div class="back">
                  <p>I want to streamline my build process with the MEAN stack and Gulp looks like an interesting way to do this.</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section id="projects">
      <div class="container">
        <h2>Projects</h2>
        <ul>
          <li>
            <h3>Online Bingo Fans</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/onlinebingofans.png" alt="Online Bingo Fans">
              <div class="mask">
                   <p>Allows users to browse and search through an aggregated list of promotions from several different online bingo sites.</p>
                       <a href="http://onlinebingofans.co.uk" class="info">Visit Site</a>
                   </div>
              </div>
          </li>
          <li>
            <h3>Dad belly</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/dadbelly.png" alt="Dad Belly">
              <div class="mask">
                   <p>An app writen using the MEAN stack for dads to count calories and track their weight loss. (A bit of a work in progress).</p>
                       <a href="http://dadbelly.com" class="info">Visit Site</a>
                   </div>
              </div>

          </li>
          <li>
            <h3>Quick API</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/quickapi.png" alt="Quick API">
              <div class="mask">
                   <p>A developer's tool that generates an API directly from an SQLite database for providing test data.</p>
                       <a href="https://github.com/codebubb/quickapi" class="info">View GitHub Repo</a>
                   </div>
              </div>
          </li>
          <li>
            <h3>SQL Injection Challenge</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/sqlinjection.png" alt="SQL Injection Example">
              <div class="mask">
                   <p>A quick way to spin up a login page where ethical hackers can practice SQL injection techniques.</p>
                       <a href="https://github.com/codebubb/sqlinjectionexample" class="info">View GitHub Repo</a>
                   </div>
              </div>
          </li>
          <li>
            <h3>IT Jobs Board</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/itjobs.png" alt="IT Jobs Board">
              <div class="mask">
                   <p>A jobs board app written in Rails that allows jobs to be created with multiple skills applied to them.</p>
                       <a href="https://it-jobs.herokuapp.com" class="info">Visit Site</a>
                   </div>
              </div>
          </li>
          <li>
            <h3>JS Fundamentals</h3>
            <div class="view view-third">
              <img src="<?php echo get_template_directory_uri(); ?>/img/projects/jsfundamentals.png" alt="JavaScript fundamentals">
              <div class="mask">
                <p>An online presentation for learning the basics of JavaScript.  Written using the <a href="http://lab.hakim.se/reveal-js/#/">Reveal.js</a> presentation framework.</p>
                       <a href="https://codebubb.github.io" class="info">Visit Site</a>
                   </div>
              </div>
          </li>
        </ul>
        <h3 style="text-align: center;">For more examples take a look at my <a href="https://github.com/codebubb">GitHub</a> account.</h3>
      </section>
    </div>
    <section id="blog">
      <div class="container">
				<h2>Recent blog posts<hr></h2>

				<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		?><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		<?php
		the_excerpt();
		?>Posted in: <?php the_category(',');
		echo '<div class="underline"></div>';

		// End of the loop.
	endwhile;
	?>
			</div>
      </section>
    <footer>
      <div class="container">
        <p>Android logo courtesy of Google Inc.<br/> React logo courtesy of Facebook</p>
        <p>All other work: James Bubb 2016</p>
      </div>
    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){
      var socialIcons = document.querySelector('.social');
      window.addEventListener('scroll', function(e){
        var pagePosition = e.pageY;
        socialIcons.style.top = pagePosition> 60 ? pagePosition + 60 + "px" :  "60px";
        socialIcons.style.opacity = pagePosition > 60 ? 0.75 : 1;
      });

      $('.scrollTo').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: $(this.getAttribute('href')).offset().top }, 1000);
      });


    });

    </script>
  </body>
  </html>
