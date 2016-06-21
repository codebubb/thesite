<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section id="blog">
  <div class="container">
    <?php
// Start the loop.
while ( have_posts() ) : the_post();
?><h1><?php the_title();?></h1>
<?php
the_content();
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
</body>
</html>
