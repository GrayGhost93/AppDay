<?php

class Events extends CI_Model {
    public function addEvent($eventname, $zeit, $tag, $beschreibung, $ort) {
        return $this->db->insert('events', array('eventname' => $eventname, 'uhrzeit' => $zeit, 'beschreibung' => $beschreibung, 'ort' => $ort, 'tag' => $tag));
    }
    
	public function delEvent($eventid) {
		return $this->db->delete('events', array('id' => $eventid)); 
	}
	
	public function getEvents() {
		$vordaten = $this->db->get('events')->result_array();
		$rückgabe = array();
		foreach ($vordaten as $r) {
			$sql2 = "SELECT * FROM events WHERE tag = ?";
			$erg = $this->db->query($sql2, array($r['tag']))->result_array();

            $zuarray = array();
			foreach ($erg as $r2) {
                $zuarray[] = $r2;
			}
            $rückgabe[$r['tag']] = $zuarray;
		}
		return $rückgabe;
	}

    public function getEventSpecial($eid) {
        return $this->db->select('*')->from('events')->join('orte', 'events.ort=orte.id')->where('events.id', $eid)->get()->result_array();
    }
}

?>