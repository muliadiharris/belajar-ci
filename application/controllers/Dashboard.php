<?php


class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
		// echo "ini halaman awal";
	}
	public function about()
	{
		$this->load->view('about');
		
	}
    public function contact()
	{
		$this->load->view('contact');
		
	}
}
