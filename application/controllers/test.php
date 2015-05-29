<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index() {
        $nutzer = $_GET['nutzername'];
        $passwort = $_GET['passwort'];

        $this->load->model('Nutzer');
        print $this->Nutzer->login($nutzer, $passwort);
    }
}