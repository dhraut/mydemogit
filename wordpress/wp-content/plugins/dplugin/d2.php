<?php 

/*
Plugin Name: D2 Plugin
Description: D2 Plugin 
Author: Dennis
Version: 1
Author URI : http://getursolutions.com/
Plugin URI: http://getursolutions.com/d2-plugin/
*/

add_action('admin_menu', 'd2_plugin_menu');

function d2_plugin_menu() {
	add_options_page('D2 Options', 'D2 Plugin', 'manage_options', 'd2-plugin.php', 'd2_plugin_page');
}
function d2_plugin_page(){
?>
<h1>	<?php echo "this is d2 plugin from d2_plugin_page";?></h1>
<?php }
?>