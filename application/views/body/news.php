<div id='map-canvas'></div>

<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>News</h1>
    </div>

    <div data-role="content">

        <ul data-nativedroid-plugin='cards'>
            <?php
                foreach ($news as $r) {
                    $tag = substr($r['datum'],8,2);
                    $monat = substr($r['datum'],5,2);
                    $jahr = substr($r['datum'],0,4);
                    $datum = $tag.'.'.$monat.'.'.$jahr;

                    print "<li data-cards-type='text'>";
                    //print '<a href="'.site_url('event/show').'/'.$v['id'].'">';
                    print '<h1>'.$r['titel'].'</h1>';
                    print '<p>'.$r['inhalt'].'</p>';
                    print '<p class="ui-li-aside"><strong>'.$datum.'</strong></p>';
                    //print '</a>';
                    print '</li>';
                }
            ?>

        </ul>
    </div>

</div>

