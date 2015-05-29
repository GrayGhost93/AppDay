<?php

class Events extends CI_Model {
    public function addEvent($eventname, $zeit, $beschreibung, $ort) {
        return $this->db->insert(	'events', array('eventname' => $eventname, 'zeitpunkt' => $zeitpunkt, 
        							'beschreibung' => $beschreibung, 'ort' => $ort));

    }
    
	public function delEvent($userid) {
		return $this->db->delete('events', array('id' => $eventid)); 
	}
	
	public function getEvents() {
		$sql = "SELECT id FROM events GROUP BY tag";
		$vordaten = $this->db->get('events')->result_array();
		$rückgabe = array();
		foreach ($vordaten as $r) {
			$sql2 = "SELECT * FROM events WHERE tag = ?";
			$erg = $this->db->query($sql, array($r['tag']))->result_array();
			
			$rückgabe[$r['tag']] = array();
			foreach ($erg as $r2) {
				$rückgabe[$r['tag']] = $r2;
			}
		}
		return $rückgabe;
	}
}

?>