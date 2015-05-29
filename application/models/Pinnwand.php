<?php

class Pinnwand extends CI_Model {
    public function addPost($inhalt, $datum, $uhrzeit, $name) {
        return $this->db->insert('pinnwand', array('tag' => $datum, 'uhrzeit' => $uhrzeit, 'inhalt' => $inhalt, 'name' => $name));
    }

    public function getPosts() {
        $vordaten = $this->db->order_by('tag DESC')->get('pinnwand')->result_array();
        $rückgabe = array();
        foreach ($vordaten as $r) {
            $sql2 = "SELECT * FROM pinnwand WHERE tag = ? ORDER BY uhrzeit";
            $erg = $this->db->query($sql2, array($r['tag']))->result_array();

            $zuarray = array();
            foreach ($erg as $r2) {
                $zuarray[] = $r2;
            }
            $rückgabe[$r['tag']] = $zuarray;
        }
        return $rückgabe;
    }
}
?>