<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>News</h1>
    </div>

    <div data-role="content">

        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
            <?php
            foreach ($news as $r) {
                print '<li data-role="list-divider"></li>';
                    print '<li>';
                    //print '<a href="'.site_url('event/show').'/'.$v['id'].'">';
                    print '<h2>'.$r['titel'].'</h2>';
                    print '<p>'.$r['inhalt'].'</p>';
                    print '<p class="ui-li-aside"><strong>'.$r['zeit'].'</strong></p>';
                    //print '</a>';
                    print '</li>';
                }
            }
            ?>
        </ul>
    </div>

</div>