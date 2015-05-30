<div data-role="page" data-theme='b'>
    
    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="http://unilokal.de/index.php/login/start" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Event bearbeiten</h1>
    </div>

    <?php //print_r($event);exit;
    foreach ($event as $c) {
        $eventname = $c['eventname'];
        $beschreibung = $c['beschreibung'];
        $datum = $c['tag'];
        $zeit = $c['uhrzeit'];
        $ort = $c['campus'];
    }
    //%print_r($ort."....".$campus['campus']);exit;
    ?>

    <div data-role="content">
        <h3>Event bearbeiten</h3><br>
        <form method="POST" data-ajax="false" action="<?php print site_url('login/edit_event'); ?>">
            <ul>
                <li data-role="fieldcontain">
                    <label for="inputDate">Eventname:</label>
                    <input type="text" name="name" id="Eventname" value='<?php print $eventname?>' data-clear-btn="true" >
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Beschreibung:</label>
                    <input type="text" name="beschreibung" id="Beschreibung" value='<?php print $beschreibung?>' data-clear-btn="true" placeholder="Beschreibung ...">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Datum:</label>
                    <input type="date" name="datum" id="Datum" value='<?php print $datum?>' data-clear-btn="true" placeholder="30.05.2015">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Uhrzeit:</label>
                    <input type="time" name="zeit" id="Zeit" value='<?php print $zeit?>' data-clear-btn="true" placeholder="13:37:00">
                </li>
                <li data-role="fieldcontain">
                    <label for="fieldcontain">Ort:</label>
                    <select name="campus">
                        <?php
                        foreach ($campus as $c) {
                            if($ort == $c['campus']) {
                                print '<option selected value="'.$ort.'">'.$ort.'</option>';
                            }
                            else {
                                print '<option value="'.$c['campus'].'">';
                                print $c['campus'];
                                print '</option>';
                            }
                        }
                        ?>
                    </select>
                </li>
            </ul>
            <button type="submit" data-inline='true'><i class='lIcon fa fa-check'></i>Anlegen</button></form>
            <button type="reset" data-inline='true'><i class='lIcon fa fa-times'></i>Abbrechen</button>
            <!-- <input type="submit" name="submit" value="Anlegen" /> -->

        </form><br><br>

    </div>
</div>