<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>James Bubb | Does stuff with the web</title>
  <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <section class="jumbotron">
    <div class="container">
      <header>

        <h1>James Bubb </h1>
        <ul>
          <li><a class="scrollTo" href="#info">About</a></li>
          <li><a class="scrollTo" href="#skills">Skills</a></li>
          <li><a class="scrollTo" href="#projects">Projects</a></li>
          <li><a class="scrollTo" href="#blog">Blog</a></li>
          <li><a class="scrollTo" href="#contact">Contact</a></li>
        </ul>
        <div class="social">
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
        I've always been interested in coding and design but it wasn't until last year that I started <a href="">FreeCodeCamp</a> that my passion for development was ignited. Since then i've worked hard to develop a robust set of <a href="#skills">skills</a> that allow me to work both front and back end giving me flexbility to develop full-stack applications.

        I have previously worked for a successfull web hosting company which gifted me with the technical abilities of server administration.</p>
        <h3 style="text-align: center;">I am 100% dedicated to learning more and improving skills around web dev.</h3>
      </div>
    </section>

    <section class="page" id="skills">
      <div class="container">
        <h2>Skills<hr></h2>

        <h3 style="text-align: center;">These are some technologies I feel pretty confident using.</h3>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/html5.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/css.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/js.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/jquery.gif" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/nodejs.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/git.png" alt=""></li>
        </li>
        <h3>And these are some I have experience with (but i'm not an expert).</h3>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/angular.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/photoshop.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/expressjs.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/rails.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/mongodb.jpeg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/php.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/mysql.png" alt=""></li>
        </li>
        </ul>
        <h3>Finally, this is what i'm currently learning.</h3>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/android.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/react.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/gulp.png" alt=""></li>
        </ul>
      </div>
    </section>
    <section id="projects">
      <!-- Thanks to https://davidwalsh.name/css-flip for flip effect -->
      <div class="container">
        <h2>Projects</h2>
        <ul>
          <li>
            <h3>Dad belly</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/dadbelly.png" alt="">
                </div>
                <div class="back">
                </div>
              </div>
            </div>
          </li>
          <li>
            <h3>Online Bingo Fans</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/onlinebingofans.png" alt="">
                </div>
                <div class="back">
                  <p>
                    Bingo fans every will be delighted!
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h3>Quick API</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/quickapi.png" alt="">
                </div>
                <div class="back">
                  <p>
                    A quick api
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h3>SQL Injection Challenge</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/sqlinjection.png" alt="">
                </div>
                <div class="back">
                  <p>
                    SQL Injection
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h3>IT Jobs Board</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/itjobs.png" alt="">
                </div>
                <div class="back">
                  <p>
                    An IT Jobs board
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <h3>JS Fundamentals</h3>
            <div class="project-container">
              <div class="flipper">
                <div class="front">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/jsfundamentals.png" alt="">
                </div>
                <div class="back">
                  <p>
                    JS Fundamentals
                  </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <h3 style="text-align: center;">For more examples take a look at my <a href="">GitHub</a> account.</h3>
      </section>
    </div>
    <section id="blog">
      <div class="container">
				<h2>Blog</h2>
				<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		?><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		<?php
		the_excerpt();
		?>Posted in: <?php the_category(',');
		echo "<br>" . get_comments_number() ?> comments<?php

		// End of the loop.
	endwhile;
	?>
			</div>
      </section>
    <footer>
      <div class="container">
        <p>Android logo courtesy of Google Inc. React logo courtesty of Facebook</p>
        <p>All other work &copy; James Bubb 2016</p>
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
