<?php 
/**
 * Template file.
 *
 * @package WordPress
 * @subpackage My_Theme_Development
 * @since My Theme Development 1.0
**/
?>

<?php

  // Includes the header.php template file from your current theme's directory.
  // if a name is specified then a specialised header header-{name}.php will be included.
  // If the theme contains no header.php file then the header from the
  // default theme wp-includes/theme-compat/header.php will be included.

  // codex.wordpress.org/Function_Reference/get_header
?>
<?php get_header(); ?>





<?php // html & php stuff goes below you can delete this line of code if you do not want it. ?>





<?php
  // Includes the footer.php template file from your current theme's directory.
  // if a name is specified then a specialised footer footer-{name}.php will be included.
  // If the theme contains no footer.php file then the footer from the
  // default theme wp-includes/theme-compat/footer.php will be included.

  // codex.wordpress.org/Function_Reference/get_footer
?>
<?php get_footer(); ?>