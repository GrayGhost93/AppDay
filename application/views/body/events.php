<div data-role="page" data-theme='b'>


        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
            <h1>Events</h1>
        </div>

        <div data-role="content">

          <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
          <?php
            foreach ($daten as $r => $value) {
                print '<li data-role="list-divider">'.$r.'<span class="ui-li-count">genug</span></li>';
                foreach ($value as $v) {
                    print '<li>';
                    print '<a href="'.site_url('event/show').'/'.$v['id'].'">';
                    print '<h2>'.$v['eventname'].'</h2>';
                    print '<p>'.$v['beschreibung'].'</p>';
                    print '<p class="ui-li-aside"><strong>'.$v['uhrzeit'].'</strong> Uhr</p>';
                    print '</a>';
                    print '</li>';
                }
            }
          ?>
        </ul>
	        <div class='inset'>
	        	<h2>Code</h2>
				<div class='message info'>
					<i class='fa fa-info'></i>
					<p>Alle Termine ohne Gewähr!</p>
				</div>
	        </div>

        </div>

    </div>