<div data-role="page" data-theme='b'>


        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <h1>ErstiHilfe</h1>
            <a href="http://unilokal.de/" data-ajax='false'><i class='fa fa-android'></i></a>
        </div>
        
        <div data-role="content">   
        	
			<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
	            <li data-role="list-divider">Wichtiges</li>
	            <li>
					<a href="<?php print site_url('welcome/news'); ?>" data-ajax="false"><i class='fa fa-newspaper-o'></i>News</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/locations'); ?>" data-ajax="false"><i class='fa fa-street-view'></i>Wichtige Orte</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/gb'); ?>" data-ajax="false"><i class='fa fa-book'></i>Gästebuch</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/events'); ?>" data-ajax="false"><i class='fa fa-calendar'></i>Events</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/links'); ?>" data-ajax="false"><i class='fa fa-external-link'></i>Wichtige Links</a>
	            </li>
	            <li data-role="list-divider">Information</li>
	            <li>
					<a href="<?php print site_url('welcome/faq'); ?>" data-ajax="false"><i class='fa fa-star'></i>FAQ / Tipps & Tricks</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/contact'); ?>" data-ajax="false"><i class='fa fa-users'></i>Kontakt</a>
	            </li>
	            <li>
					<a href="<?php print site_url('welcome/login'); ?>" data-ajax="false"><i class='fa fa-toggle-up'></i>Login</a>
	            </li>
	        </ul>
	        
	        
        </div>

    </div>