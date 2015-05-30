<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="http://unilokal.de/index.php/login/start" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Event bearbeiten</h1>
    </div>

    <div data-role="content">
        <h3>Neues Event anlegen</h3><br>
        <form method="POST" data-ajax="false" action="<?php print site_url('login/addEvent'); ?>">
            <ul>
                <li data-role="fieldcontain">
                    <label for="inputDate">Eventname:</label>
                    <input type="text" name="eventname" id="Eventname" value="" data-clear-btn="true" placeholder="Eventname ...">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Beschreibung:</label>
                    <input type="text" name="beschreibung" id="Beschreibung" value="" data-clear-btn="true" placeholder="Beschreibung ...">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Datum:</label>
                    <input type="date" name="tag" id="Datum" value="" data-clear-btn="true" placeholder="30.05.2015">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Uhrzeit:</label>
                    <input type="time" name="uhrzeit" id="Zeit" value="" data-clear-btn="true" placeholder="13:37:00">
                </li>
                <li data-role="fieldcontain">
                    <label for="fieldcontain">Ort:</label>
                    <select name="ort">
                        <?php
                        foreach ($campus as $c) {
                            print '<option value="'.$c['campus'].'">';
                            print $c['campus'];
                            print '</option>';
                        }
                        ?>
                    </select>
                </li>
            </ul>
            <input type="submit" name="submit" value="Anlegen" />
        </form><br><br>
        <h3>Vorhandene Events bearbeiten</h3><br>
        <ul>
            <?php
            foreach ($events as $row){
                //print_r($row);exit;
                print '<li>';
                print '<h2>'.$row['eventname'].
                    '<a href="'.site_url('login/editEvent').'/'.$row['id'].'" data-ajax="false"> <i class="fa fa-pencil"></i></a>
                    <a href="'.site_url('login/deleteEvent').'/'.$row['id'].'" data-ajax="false"> <i class="fa fa-trash"></i></a>
                    </h2>';
                print '</li>';
            }
            ?>
        </ul>
    </div>

</div>