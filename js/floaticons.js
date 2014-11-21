/**
* Plugin Name: Floating Share
* Plugin URI: http://www.shoutmeloud.com/
* Description: Floating Social Buttons Provide an easy way to add floating social sharing button.
* Version: 1.0
* Author: Harsh Agrawal		
* Author URI: http://www.shoutmeloud.com/about
* License: GPL2
*/

var $j=jQuery.noConflict();
$j(document).ready(function () {
var $obj = $j('#floaticons');  
var length = $j('article').height() - $j('#floaticons').height() + $j('article').offset().top;

$j(window).scroll(function (event) {
  // what the y position of the scroll is
  var y = $j(this).scrollTop();   

  if (y >= length) {
	// if so, ad the fixed class
	$obj.addClass('fixed');
  } else {
	// otherwise remove it
	$obj.removeClass('fixed');
  }
});
});