<?php

/*
Plugin Name: Help Menu
Version: 1.4
Plugin URI: https://blog.reverbstudios.ie/2010/10/18/wordpress-help-menu-plugin/
Description: Adds a "Help" Menu and Page in admin with links to WordPress resources.
Author: Leon Quinn
Author URI: https://www.reverbstudios.ie
*/

// mt_add_pages() is the function for the 'admin_menu' hook
function mt_add_pages() {
    //Add a new top-level menu
    add_menu_page('Wordpress Help', 'Reverb Help','5','help', 'mt_toplevel_page', plugins_url('help-menu/help.png'), 1 );
	// Add Submenus
	add_submenu_page('help', 'Screenshots', 'Screenshots','5','screenshots','mt_submenu_page_screenshots' );
	add_submenu_page('help', 'Video Manual', 'Video Manual','5', 'videos','mt_submenu_page_videos' );
	add_submenu_page('help', 'Links', 'Links & Resources','5', 'links','mt_submenu_page_links' );
}

// mt_toplevel_page() displays the page content for the Toplevel menu
function mt_toplevel_page() {
	
	echo "<div class='wrap'>

			<h2>WordPress Help</h2>	  

      		<p>You are using the <a href='http://www.wordpress.org' target='_blank'>WordPress Content Management System</a> as the basis of your site.<br /><br />

	  			WordPress is widely considered to be one of the easiest and most flexible such systems to use but if you find that you can't get the hang of it on first play then please have a look at the Resources left for further help.</p> 
				
				<a href='https://www.reverbstudios.ie' target='_blank' title='Reverb Studios Design' /><img src='../wp-content/plugins/help-menu/reverb-studios-logo.png' /></a>   			
      
      			<p>Leon Quinn<br>
      			<a href='https://www.reverbstudios.ie' target='_blank'>ReverbStudios.ie</a></p>			
		</div>";		  
}

// Displays the submenu content
function mt_submenu_page_screenshots() {
	
	echo "<div class='wrap'>

			<h2>Screenshots</h2>
			
			<p>Some helpful screen grabs pointing out common functions in WordPress.</p>
			
      		<p><a href='../wp-content/plugins/help-menu/wordpress_manual.pdf' target='_blank'>View/Download these screen shots in PDF form.</a></p>
			
			<h3>Add/Edit a Page</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp1.png ' width='100%' />  
			
			<img src='../wp-content/plugins/help-menu/wp2.png ' width='100%' />
			
			<h3>Add/Edit a Post</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp3.png ' width='100%' />
			
			<img src='../wp-content/plugins/help-menu/wp4.png ' width='100%' />
			
			<h3>Add/Edit Widgets</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp5.png ' width='100%' />
			

		</div>";
	 	  
}

// Displays the submenu content
function mt_submenu_page_videos() {
	
	echo "<div class='wrap'>

			<h2>WordPress Video Manual</h2>
			
			<p>A helpful Video screen recording on how to do some of the most common things in WordPress.</p>
            
            <iframe width='100%' height='850' src='https://www.youtube.com/embed/l5RHAxJDzV4' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>

		</div>";
	 	  
}

// Displays the submenu content
function mt_submenu_page_links() {
	
	echo "<div class='wrap'>

			<h2>Links & Resources</h2>

			<h3>WordPress Visual Manual (PDF)</h3>

      		<p><a href='../wp-content/plugins/help-menu/wordpress_manual.pdf' target='_blank'>View/Download the Manual</a></p>	
			
			<h3>WordPress Video Manual (youTube)</h3>

      		<p><a href='https://www.youtube.com/watch?v=l5RHAxJDzV4' target='_blank'>Watch the Tutorial on youTube</a></p>    

	 		<h3>Official WordPress Video Tutorial Site</h3>

      		<p><a href='http://wordpress.tv/category/how-to/' target='_blank'>Wordpress.TV Video Tutorials</a></p>  
	  
	 		<h3>WordPress Support Forums</h3>
	  
      		<p><a href='http://wordpress.org/support/' target='_blank'>Wordpress.org/Support</a></p>

	 		<h3>Twitter</h3>

      		<p><a href='http://twitter.com/wordpress' target='_blank'>Twitter.com/Wordpress</a></p>	  

	 		<h3>Facebook</h3>

      		<p><a href='http://www.facebook.com/WordPress' target='_blank'>Facebook.com/WordPress</a></p>
			
			<h3>Reverb Studios Blog (WordPress Tips)</h3>

      		<p><a href='https://blog.reverbstudios.ie/category/wordpress-tips/' target='_blank'>Blog.ReverbStudios.ie/Category/Wordpress-Tips/</a></p>	
      
		</div>";	 	  
}

// Insert the mt_add_pages() sink into the plugin hook list for 'admin_menu'
add_action('admin_menu', 'mt_add_pages');
?>