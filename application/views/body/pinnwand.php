<style type="text/css">
    .ui-listview > li p {
        white-space: normal;
    }
</style>

<div data-role="page" data-theme='b'>
    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Pinnwand</h1>
    </div>
    <div data-role="content"><form action="<?php print site_url('welcome/postIt'); ?>" method="POST">
            <ul data-role="listview" data-inset="true">
                <li data-role="fieldcontain">
                    <label for="name2b">Name:</label>
                    <input type="text" name="name" id="name2b" value="" data-clear-btn="true" placeholder="Gib hier deinen Namen ein...">
                </li>
                <li data-role="fieldcontain">
                    <label for="name2b">Nachricht:</label>
                    <input type="text" name="nachricht" id="name2b" value="" data-clear-btn="true" placeholder="Meine Nachricht...">
                </li>
            </ul>
            <button type="submit" data-inline='true'><i class='lIcon fa fa-check'></i>Posten</button>
        </form>
        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
            <?php
            foreach ($daten as $r => $value) {
                $tag = substr($r,8,2);
                $monat = substr($r,5,2);
                $jahr = substr($r,0,4);
                $datum = $tag.'.'.$monat.'.'.$jahr;
                $counter = 0;
                foreach ($value as $keks) {
                    $counter++;
                }
                if ($counter == 1){
                    print '<li data-role="list-divider">' . $datum . '<span class="ui-li-count">' . $counter . ' Post</span></li>';
                }else {
                    print '<li data-role="list-divider">' . $datum . '<span class="ui-li-count">' . $counter . ' Posts</span></li>';
                }
                foreach ($value as $v) {
                    print '<li>';
                    print '<h2>'.$v['name'].'</h2>';
                    print '<p>'.$v['inhalt'].'</p>';
                    print '</li>';
                }
            }
            ?>
        </ul>
    </div>
</div>
