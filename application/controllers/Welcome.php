<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
        $this->load->view('body/startpage');
        $this->load->view('footer');
	}

    public function news() {
        $this->load->model('News');
        $this->data['news'] = $this->News->getNewsOrdered();

        $this->load->view('header');
        $this->load->view('body/news', $this->data);
        $this->load->view('footer');
    }

    public function events() {
        $this->load->model('Events');
        $this->data['daten'] = $this->Events->getEvents();
        $this->load->view('header');
        $this->load->view('body/events', $this->data);
        $this->load->view('footer');
    }

    public function locations() {
        $this->load->model('Orte');
        $this->data['campi'] = $this->Orte->getCampi();
        $this->load->view('header');
        $this->load->view('body/locations', $this->data);
        $this->load->view('footer');
    }

    public function locationscampi() {
        $campus = $_GET['campus'];
        $this->load->model('Orte');
        $this->data['orte'] = $this->Orte->getOrteByCampus($campus);
        $this->load->view('header');
        $this->load->view('body/locations_campus', $this->data);
        $this->load->view('footer');
    }

    public function locationsspecial($id) {
        $this->load->model('Orte');
        $this->data['value'] = $this->Orte->getInfoByOrt($id);

        $this->load->view('header');
        $this->load->view('body/locationsspecial', $this->data);
        $this->load->view('footer');
    }

    public function links() {
        $this->load->view('header');
        $this->load->view('body/links');
        $this->load->view('footer');
    }
    
    public function login() {
        $this->load->view('header');
        $this->load->view('backend/login');
        $this->load->view('footer');
    }

    public function eventspecial($eid) {
        $this->load->model('Events');
        $this->data['event'] = $this->Events->getEventSpecial($eid);

        $this->load->view('header');
        $this->load->view('body/eventspecialpage', $this->data);
        $this->load->view('footer');
    }

    public function kontakt() {
        $this->load->view('header');
        $this->load->view('body/kontakt');
        $this->load->view('footer');
    }
    
    public function faq() {
        $this->load->view('header');
        $this->load->view('body/faq');
        $this->load->view('footer');
    }

    public function pinnwand() {
        $this->load->model('Pinnwand');
        $this->data['daten'] = $this->Pinnwand->getPosts();
        $this->load->view('header');
        $this->load->view('body/pinnwand', $this->data);
        $this->load->view('footer');
    }

    public function postIt() {
        $name = $_POST['name'];
        $nachricht = $_POST['nachricht'];

        $this->load->model('Pinnwand');
        $this->Pinnwand->addPost($nachricht, date("Y.m.d"), date("H:i:s"), $name);
        header("Location: ".site_url('welcome/pinnwand'));
    }

    public function impressum() {
        $this->load->view('header');
        $this->load->view('body/impressum');
        $this->load->view('footer');
    }
}
