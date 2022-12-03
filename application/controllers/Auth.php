<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

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
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function login()
    {
        $this->load->view('autlay_header');
        $this->load->view('Auten/login');
        $this->load->view('autlay_footer');
    }
    public function forgetPassword()
    {
        $this->load->view('autlay_header');
        $this->load->view('Auten/forget');
        $this->load->view('autlay_footer');
    }
    public function reg()
    {
        $this->load->view('autlay_header');
        $this->load->view('Auten/reg');
        $this->load->view('autlay_footer');
    }
    public function crtnewpass()
    {
        $this->load->view('autlay_header');
        $this->load->view('Auten/newpass');
        $this->load->view('autlay_footer');
    }
}
