Static Site Wrapper
==============

The basic tools for creating an ajaxified, bootstrap nav menu wrapper for static-ish sites

* index.php
	* loads the layouts/main.php and config/main.php files to get the site running.
	* These are the only two files you need to change to set up the wrapper for your site
	* All of your static files will go in the views folder as explained below

* assets/layouts/main.php is the template used to wrap the content from the other pages
* config/main.php contains the global configuration variables stored in the $config array

  
##Folders
* assets
    Contains all of the js,css, and fonts for the entire site

    All of these files are loaded from layouts/main.php
    
    * js/bootstrap-hover-dropdown.min.js allows us to have the navbar dropdown on hover
    * js/main.js has the custom code that allows for ajaxifying the site
    
    * css/style.css has the site specific css
    * css/bootstrap-nrl-theme.css has general nrl css like primary and action button colors and navbar stuff

    * img/ contains the images for the site navigation wrapper
    
* config
    * Contains a main.php file that set the $config array, which will be available throughout the site
    * Loaded in index.php
    
* views
    This is the only really interesting folder
      * Each major navigation menu item should have it's own folder (e.g., mail_processing, records, etc)
      * sub menu files should be placed within these folders
      
##Dependencies
* Bootstrap 3.0 -- Gives you all the power of Twitter's bootstrap css/js http://getbootstrap.com
* jquery 1.11 -- Gives you all of the power that comes along with jquery. Plus bootstrap requires it
* bootstrap-nrl-theme.css -- This file contains the standardized css for implementing navigation menus, etc across NRL sites It modifies Bootstrap 3.0 to create NRL specific styles
* bootstrap-dropdown-hover.min.js -- This creates the hover experience for the dropdown menus
* history.min.js -- This awesome library allows you to do ajax calls and store the url in the browser so that the refresh, back and forward buttons work
* main.js -- Just a simple script that attaches to .site-link classes to perform the logic in clicking on links. Basically it uses history.js to keep track of where you are and puts the ajax content into the #main-content div in assets/layouts/main.php

##Adding Pages 

  Adding pages to the site should be fairly simple. 
  
  If you are adding a new Top Level Navigation Link like "Dropdown" or "Static Link" you will need to create the corresponding folder and index.php file in the views folder.

  For example, the Dropdown menu button is associated with /views/dropdown/index.php and the "Static Link" menu button is associated with  /views/static_link/index.php

  Now you just need to add the menu items.

  To add a static menu button like "Static Link" (i.e., no dropdown sub menu items) add the following code to layouts/main.php navbar menu 
  

    
    <li >
        <a class='site-link ' href="views/static_link/index.php">Static Link</a>
    </li>

   To add a dynamic menu button with dropdown sub menu items like the "Dropdown" button add the following code
    
    <li class='dropdown'>
		<a class='site-link dropdown-toggle' data-toggle="dropdown" data-hover="dropdown" href="views/dropdown/index.php">
			Dropdown <span class="caret"></span>
		</a>
		<ul class='dropdown-menu'>
			<!-- <li></li> list items go here. See below for an example -->
    </li>

    
  Sub menu items can be added by placing additional files in the Top Level Navigation Folder and then adding the following code in layouts/main.php
  
     
	<li class='dropdown'>
  		<a class='site-link dropdown-toggle' data-toggle="dropdown" data-hover="dropdown" href="views/dropdown/index.php">
  			Dropdown
  		</a>
	 	<ul class="dropdown-menu" >
	 		<li><a class='site-link' tabindex="-1" href="views/dropdown/page1.php">Page 1</a>
    			<li><a class='site-link' tabindex="-1" href="views/dropdown/page2.php">Page 2</a>
 		</ul>
	</li>

##Adding Links to External Sites

* This is done in the old fashion way just:
	
	`<a href='http://path.com' target='_blank'>Website</a>`
	
* NOTE: Make sure that 'a tag' does not have the 'site-link' class

##Adding PDFs and other Documents

* Because the site uses ajax to put the content in the wrapper, make sure that links to documents do NOT have the 'site-link' class

##Adding Dynamic Content

* Most dynamic content should work fine using the site-link class, but be careful if it isn't working just remove the site-link class and everything should work fine [Of course the navigation bar will go away but otherwise the functionality will continue to exist]


