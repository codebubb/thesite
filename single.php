<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>James Bubb | Does stuff with the web</title>
  <!-- <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'> -->
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <header>

      <h1>James Bubb </h1>

      <div class="social">
        <a href="mailto:contact@jamesbubb.co.uk"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/email.png" alt=""></a>
        <a href="https://www.linkedin.com/in/james-bubb-40753142"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Linkedin.png" alt=""></a>
        <a href="https://github.com/codebubb"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Github.png" alt=""></a>
        <a href="https://twitter.com/codebubb"><img src="<?php echo get_template_directory_uri(); ?>/img/sm/Twitter.png" alt=""></a>
      </div>
  </div>
    </header>
<section class="post">
  <div class="container">
    <?php
// Start the loop.
while ( have_posts() ) : the_post();
?><h1><?php the_title();?></h1>
<?php
the_content(null, true);
// Include the page content template.
// get_template_part( 'template-parts/content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
  comments_template();
}

// End of the loop.
endwhile;
?>
  </div>
  </section>
  <footer>
    <div class="container">
      <p>&copy; James Bubb 2016</p>
    </div>
  </footer>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-80318954-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
