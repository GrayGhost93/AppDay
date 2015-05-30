<style type="text/css">
    .ui-listview > li p {
        white-space: normal;
    }
</style>

<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Wichtige Orte</h1>
    </div>

    <div data-role="content">
        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
            <?php
            foreach ($orte as $r) {
                    print '<li>';
                    print '<a data-ajax="false" href="'.site_url('welcome/locationsspecial').'/'.$r['id'].'">';
                    print '<h2>'.$r['name'].'</h2>';
                    print '<p><i class="fa fa-newspaper-o"></i>'.$r['beschreibung'].'</p>';
                    print '</a>';
            }
            ?>
        </ul>
        <div id="map" style="height: 300px;"></div>
    </div>

</div>