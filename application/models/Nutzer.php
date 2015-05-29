<?php 
class Nutzer extends CI_Model {

	public function sha256($passwort){
		$shapw = hash('sha256', $passwort);
		return $shapw;
	}

	public function login($user, $passwort) {
		$passwort = $this->sha256($passwort);
		$sql = "SELECT * FROM user WHERE user = ? AND passwort = ?";
		$result = $this->db->query($sql, array($user, $passwort));
		$user = $result->result_array();
		
		if( $result->num_rows() == 1 ){
			$this->session->set_userdata(array('eingeloggt' => true, 'id' => $user[0]['id']));
			return "true";
		}
		else {return "false";}	
	}	
	
	public function logout() {
		return $this->session->sess_destroy();
	}
	
	public function addUser($username, $passwort) {
		return $this->db->insert('user', array('user' => $username, 'passwort' => $passwort));
	}
	
	public function delUser($userid) {
		return $this->db->delete('user', array('id' => $userid)); 
	}
}
?>