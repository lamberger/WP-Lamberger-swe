//To be safe, you can put jQuery into “no conflict” mode and use a different shortcut for jQuery. In this case $pl
var $pl = jQuery.noConflict();

$pl(document).ready(function(){
	$pl("#mega-container").hide();
	$pl("#top-div a").click(function(){
	   	$pl("#mega-container").slideToggle(500);
   	});  
});