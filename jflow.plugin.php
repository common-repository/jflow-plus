<?php
/*
Plugin Name: jFlow Plus 
Version: 2.0.0
Description: This plugin implements the brilliant jFlow Plus Slider into your WordPress blog easily, without touching other galleries.
Author: Pritesh Gupta
Author URI: http://www.priteshgupta.com
Plugin URI: http://www.priteshgupta.com/plugins/jflow
License: GPL
*/
/*  Copyright (C) 2012  Pritesh Gupta {http://www.priteshgupta.com/plugins/fix-fblike}

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php
    add_action('activate_jflow_plus.php', 'jflow_plus');
	function jflow_plus(){
			add_option("jflow_plus", '800');
			add_option("jflow_plus2", '350');
			add_option("jflow_plus3", '400');
			add_option("jflow_plus4", '10000');
			add_option("jflow_plus_display", 'yes');
		}
	add_action('wp_head', 'jflow_plus_session');
	function jflow_plus_session(){$_SESSION['jflow_plus_nri'] = 0;}
	
    add_action('admin_menu', 'jflow_plus_menu');
    function jflow_plus_menu() {
        if (function_exists('add_options_page')) {
            add_options_page('jFlow Plus', 'jFlow Plus', 9, 'jflow_plus', 'jflow_plus_display');
        }
    }
    function jflow_plus_display(){
		
        if($_POST['Submit']){
			$jflow_plus = $_POST['jflow_plus'];
			$jflow_plus2 = $_POST['jflow_plus2'];
			$jflow_plus3 = $_POST['jflow_plus3'];
			$jflow_plus4 = $_POST['jflow_plus4'];
			update_option("jflow_plus", $jflow_plus);
			update_option("jflow_plus2", $jflow_plus2);
			update_option("jflow_plus3", $jflow_plus3);
			update_option("jflow_plus4", $jflow_plus4);
			update_option("jflow_plus_display", $_POST['jflow_plus_display']);
			
			echo '<div id="message" class="updated fade"><p>Update Successful!</p></div>';
		}
		$output = '<form method="post" action="'.$_SERVER['REQUEST_URI'].'">';
		?>
	<style type="text/css">
	.author{
	text-decoration:none;
	}
		
	table{
	width:60%;
	border-collapse:collapse;
	table-layout:auto;
	vertical-align:top;
	margin-bottom:15px;
	border:1px solid #CCCCCC;
	}

	table thead th{
	color:#FFFFFF;
	background-color:#666666;
	border:1px solid #CCCCCC;
	border-collapse:collapse;
	text-align:center;
	table-layout:auto;
	vertical-align:middle;
	}

	table tbody td{
	vertical-align:top;
	border-collapse:collapse;
	border-left:1px solid #CCCCCC;
	border-right:1px solid #CCCCCC;
	}
	
	table thead th, table tbody td{
	padding:5px;
	border-collapse:collapse;
	}

	table tbody tr.light{
	color:#333333;
	background-color:#F7F7F7;
	}

	table tbody tr.dark{
	color:#333333;
	background-color:#E8E8E8;
	}
	
	input[type=text]{
	background: #cecdcd; /* Fallback */
	background: rgba(206, 205, 205, 0.6);
	border: 2px solid #666;
	padding: 6px 5px;
	line-height: 1em;
	-webkit-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-moz-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-webkit-border-radius: 8px !important; 
	-moz-border-radius: 8px !important;
	border-radius: 8px !important; 
	margin-bottom: 10px;
	width: 300px;
	}
	
	select{
	background: #cecdcd; /* Fallback */
	background: rgba(206, 205, 205, 0.6);
	border: 2px solid #666;
	padding: 6px 5px;
	height: 2.8em !important;
	-webkit-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-moz-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-webkit-border-radius: 8px !important; 
	-moz-border-radius: 8px !important;
	border-radius: 8px !important; 
	margin-bottom: 10px;
	width: 300px;
	text-align:center;
	}
	
	</style>
		<?php
		$output .= '<div class="wrap">'."\n";
		$output .= '	<h2>jFlow Plus Plugin Options</h2>'."\n";
		$output .= '	WordPress Plugin by <strong><a href="http://www.priteshgupta.com" target="_blank" class="author">Pritesh Gupta</a></strong> || jFlow Plus by <strong><a href="http://www.wordimpressed.com/" target="_blank" class="author">Devin Walker</a></strong> with code from <strong><a href="http://www.karmagination.com/" target="_blank" class="author">ktan</a></strong> || <a href="http://www.priteshgupta.com/plugins/jflow-plus" target="_blank" class="author">Visit Release Page</a>'."\n";
		$output .= '	<br /> <br />'."\n";
		$output .= '	<table border="0" cellspacing="0" cellpadding="6">'."\n";
		
		$jflow_plus_display = get_option('jflow_plus_display', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enter the numerical value of width of slider in pixels: </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="jflow_plus" value="'.get_option('jflow_plus', '800').'" /></td>';
		$output .= '		</tr>'."\n";

		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter the numerical value of height of slider in pixels:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="jflow_plus2" value="'.get_option('jflow_plus2', '350').'" /></td>';
		$output .= '		</tr>'."\n";

		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="50%">Enter time in miliseconds to transition one slide:  </td>'."\n";
		$output .= '			<td><input type="text" name="jflow_plus3" value="'.get_option('jflow_plus3', '400').'" /></td>';
		$output .= '		</tr>'."\n";

		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Automatically change slides(Autoplay)?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="jflow_plus_display">'."\n";
		$output .= '					<option value="no"';if ($jflow_plus_display == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($jflow_plus_display == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";

		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="50%">Enter time in miliseconds to display one slide(Display time per slide):  </td>'."\n";
		$output .= '			<td><input type="text" name="jflow_plus4" value="'.get_option('jflow_plus4', '10000').'" /></td>';
		$output .= '		</tr>'."\n";

		$output .= '	</table>'."\n";
		$output .= "\n";
		$output .= '				<input type="submit" name="Submit" class="button-primary" style="float:left" value="Update Options &raquo;" /><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=doubleagentcreative%40gmail%2ecom&lc=US&item_name=Pritesh%20Gupta&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHostedGuest" title="PayPal Donate" style="float:left; margin-left: 7px"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" /></a>&nbsp;&nbsp;'."\n";
		$output .= '</form>';
		$output .= '</div>'."\n";
        echo $output;
    }
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    wp_register_script( 'jflow', plugins_url('/jflow.plus.js', __FILE__));
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jflow' );
}  	
function jFlowHeader() {
$width= get_option("jflow_plus", 800);
$height = get_option("jflow_plus2", 350);
$time = get_option("jflow_plus3", 400);
$time_slider = get_option("jflow_plus4", 10000);
?>	
<!-- Begin jFlow Plus WordPress Plugin -->
<script language="javascript"> 
	$(document).ready(function(){
	    $("#jFlowController").jFlow({
			controller: ".jFlowControl", // must be class, use . sign
			slideWrapper : "#jFlowSlider", // must be id, use # sign
			slides: "#jFlow",  // the div where all your sliding divs are nested in
			selectedWrapper: "jFlowSelected",  // just pure text, no sign
			timer_slider: <?php echo $time_slider ?>, // time in miliseconds to display one slide		
			width: "<?php echo $width ?>px",  // this is the width for the content-slider
			height: "<?php echo $height ?>px",  // this is the height for the content-slider
			duration: <?php echo $time ?>,  // time in miliseconds to transition one slide
			prev: ".jFlowPrev", // must be class, use . sign
			next: ".jFlowNext", // must be class, use . sign
			auto: <?php if (get_option("jflow_plus_display") == 'yes'){ ?>true<?php } else {?>false<?php }?>
    });
});
</script> 
<style type="text/css">
#jFlowcontainer{
	width: <?php echo $width ?>px;
	height: <?php echo $height ?>px;
}
</style>
<!-- End jFlow Plus WordPress Plugin -->
<?php }	
wp_enqueue_style('jflow-slider', plugins_url('/jflow.style.css', __FILE__));
add_action('wp_enqueue_scripts', 'my_scripts_method');
add_action('wp_head', 'jFlowHeader'); 
function simonbattersby_shortcode_format($content){
$content = preg_replace('/(<p>)\s*(<div)/','<div',$content);
$content =  preg_replace('/(<\/div>)\s*(<\/p>)/', '</div>', $content);
$autop = array('<br />');
$content = str_replace($autop, "", $content);
return $content;
}
add_filter('the_content','simonbattersby_shortcode_format',11);
function jFlow_Slider( $atts, $content = null ) {
		$output2 .= '<div id="jFlowController">'."\n";
		$output2 .= '<span class="jFlowControl"></span>'."\n";
 		$output2 .= '<span class="jFlowControl"></span>'."\n";
 		$output2 .= '<span class="jFlowControl"></span>'."\n";
 		$output2 .= '</div>'."\n";
 		$output2 .= '<span class="jFlowPrev"><div></div></span>'."\n";
 		$output2 .= '<span class="jFlowNext"><div></div></span>';
		return '<div id="jFlowcontainer">'."\n".'<div id="jFlow">'. do_shortcode($content).'</div>'."\n".$output2."\n".'</div>';
	    return '';
}
function jFlow_Slide($atts, $content = null) {
    extract(shortcode_atts(array(
        "imgpath" => '',
		"imgalt" => '',
		"heading" => '',
		"slidetext" => '',
		"linktitle" => '',
		"linktext" => '',
    ), $atts));
		return '<div class="slide">'."\n".'<img src="'.$imgpath.'" alt="'.$imgalt.'"'.'/>'."\n".'<span><h3>'.$heading.'</h3><p>'.$slidetext.'<a href="#" title="'.$linktitle.'" class="readmore">'.$linktext.'</a></p></span>'."\n".'</div>'."\n";
		return '';
} 
	add_shortcode('jflow' , 'jFlow_Slider' );
	add_shortcode('jflowslide' , 'jFlow_Slide' ); 
	$file_name = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/jflow-plus/jflow.plus.1.php';
	if (file_exists($file_name)) { 
	remove_filter('the_content', 'wpautop'); 
	wp_enqueue_style('jflow-slider-old', plugins_url('/jflow.style.old.css', __FILE__));
	}; 
?>