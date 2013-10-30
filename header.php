<?php 
/**
 * The Header for our theme.
 * 
 * Displays the calls to the wp_head, wp_nav_menu, and get_search_form
 * 
 * @package WordPress
 * @subpackage My_Theme_Development
 * @since My Theme Development 1.0
**/
?>

<!DOCTYPE html>
<?php 
  // Display the language attributes for the <html> tag.
  // Builds up a set of html attributes containing the text direction
  // and language information for the page.

  // codex.wordpress.org/Function_Reference/language_attributes
?>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php
  // Displays information about your site,
  // mostly gathered from the information you supply in
  // your User Profile and General Settings WordPress Administration Screens.
  // It can be used anywhere within a template file.
  // This always prints a result to the browser.
  // If you need the values for use in PHP, use get_bloginfo().
  // NOTE: Due to how many ways you can call the bloginfo,
  // this reference was included once here.

  // codex.wordpress.org/Function_Reference/bloginfo
?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php
  // Retrieve stylesheet directory URI for the current theme/child theme. Checks for SSL.
  // Note: Does not contain a trailing slash.
  // Note: For the favicon we are using the echo get_stylesheet_directory_uri to print the
  // the url to the directory.

  // codex.wordpress.org/get_stylesheet_directory_uri
?>

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />



<?php
  // Fire the 'wp_head' action. Put this template tag immediately before </head> tag
  // in a theme template (ex. header.php, index.php).
  // 

  // codex.wordpress.org/Function_Reference/wp_head
?>

<?php
  // Always have wp_head() just before the closing </head>
  // tag of your theme, or you will break many plugins, which
  // generally use this hook to add elements to <head> such
  // as styles, scripts, and meta tags.
 wp_head(); ?>

</head>

<?php // This function gives the body element different classes and can be added,
  // typically, in the header.php's HTML body tag.

  // codex.wordpress.org/Function_Reference/body_class
?>
<body <?php body_class(); ?>>


<?php
  // Always use esc_url when sanitizing URLs (in text nodes, attribute nodes or anywhere else).
  // Rejects URLs that do not have one of the provided whitelisted protocols
  // (defaulting to http, https, ftp, ftps, mailto, news, irc, gopher, nntp, feed, and telnet),
  // eliminates invalid characters, and removes dangerous characters.
  // This function encodes characters as HTML entities: use it when generating an (X)HTML or
  // XML document. Encodes ampersands (&) and single quotes (') as numeric entity references (&#038, &#039).
  // NOTE: To see how this works, wrap the php tag below in an <a href> tag.

  // codex.wordpress.org/Function_Reference/esc_url
?>
<?php echo esc_url( home_url( '/' ) ); ?>


<?php
 // Displays a navigation menu created in the Appearance → Menus panel.

  // codex.wordpress.org/Function_Reference/wp_nav_menu
?>
<?php wp_nav_menu(); ?>


<?php
  // Display search form using searchform.php Theme file.
  // If you don't have searchform.php in your Theme, WordPress will render its built-in search form:
  // NOTE: In this theme, there is no searchform.php file.

  // codex.wordpress.org/Function_Reference/get_search_form
?>
<?php get_search_form(); ?>

<?php // the rest is up to you ?>