<div data-role="page" data-theme='b'>


        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
            <h1>Events</h1>
        </div>

        <div data-role="content">

          <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
          <?php
            foreach ($daten as $r => $value) {
                $tag = substr($r,8,2);
                $monat = substr($r,5,2);
                $jahr = substr($r,0,4);
                $datum = $tag.'.'.$monat.'.'.$jahr;
                print '<li data-role="list-divider">'.$datum.'<span class="ui-li-count">genug</span></li>';
                foreach ($value as $v) {
                    $anzeigezeit = substr($v['uhrzeit'], 0 ,-3 );
                    print '<li>';
                    print '<a href="'.site_url('welcome/eventspecial').'/'.$v['id'].'">';
                    print '<h2>'.$v['eventname'].'</h2>';
                    print '<p>'.$v['beschreibung'].'</p>';
                    print '<p class="ui-li-aside"><strong>'.$anzeigezeit.'</strong> Uhr</p>';
                    print '</a>';
                    print '</li>';
                }
            }
          ?>
        </ul>
        </div>

    </div>