<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="http://unilokal.de/index.php/login/start" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Event bearbeiten</h1>
    </div>

    <div data-role="content">
        <h3>Neues Event anlegen</h3><br>
        <form method="POST" data-ajax="false" action="<?php print site_url('login/addevent'); ?>">
            <ul>
                <li data-role="fieldcontain">
                    <label for="inputDate">Eventname:</label>
                    <input type="date" name="name" id="Eventname" value="" data-clear-btn="true" placeholder="Eventname ...">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Beschreibung:</label>
                    <input type="date" name="beschreibung" id="Beschreibung" value="" data-clear-btn="true" placeholder="Beschreibung ...">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Datum:</label>
                    <input type="date" name="datum" id="Datum" value="" data-clear-btn="true" placeholder="30.05.2015">
                </li>
                <li data-role="fieldcontain">
                    <label for="inputDate">Uhrzeit:</label>
                    <input type="date" name="zeit" id="Zeit" value="" data-clear-btn="true" placeholder="13:37:00">
                </li>
                <li data-role="fieldcontain">
                    <label for="fieldcontain">Ort:</label>
                    <select name="campus">
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
        <h3>Vorhandene Nutzer bearbeiten</h3><br>
        <ul>
            <?php
            foreach ($users as $row){
                print '<li>';
                print '<h2>'.$row['user'].'<a href="'.site_url('login/deleteNutzer').'/'.$row['id'].'" data-ajax="false"> <i class="fa fa-trash"></i></a></h2>';
                print '</li>';
            }
            ?>
        </ul>
    </div>

</div>