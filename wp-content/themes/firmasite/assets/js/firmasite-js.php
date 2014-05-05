<?php
/*
 * combine js
 */
define('WP_USE_THEMES', false);
if (file_exists($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'wp-blog-header.php')) {
        require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'wp-blog-header.php');
} else {
        while (! file_exists('wp-blog-header.php') )
        chdir('..');
        require ("wp-blog-header.php");
}
// Exit if accessed directly without wp-blog-header.php
if ( !defined( 'ABSPATH' ) ) exit;
 
/*
 * http://css-tricks.com/snippets/php/intelligent-php-cache-control/
 */ 
header('Content-type: text/javascript');

//get a unique hash of this file (etag)
$etagFile = md5_file(__FILE__);

//get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

//set etag-header
header("Etag: $etagFile");

//set last-modified header
$firmasite_js_version = get_transient("firmasite_js_version");
header("Last-Modified: ".gmdate('D, d M Y H:i:s \G\M\T', $firmasite_js_version)." GMT");

//make sure caching is turned on
header('Cache-Control: public');
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 60*60*12));

//check if page has changed. If not, send 304 and exit
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$firmasite_js_version || $etagHeader == $etagFile){
   status_header(304);
   //exit;
} else {
	status_header(200);
}
?>
 	<?php do_action("firmasite_combine_js_before"); ?>

 (function ($) {
	<?php do_action("firmasite_combine_js"); ?>
 } ( jQuery ) );

	<?php do_action("firmasite_combine_js_after"); ?>
