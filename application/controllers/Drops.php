<?php


class Drops extends CI_Controller
{
	public function male()
	{
		$data['copyright'] = 'Yuliyan THE GOAT';

		$this->load->view('templates/header');

		$this->load->view('drops/male', $data);
		$this->load->view('templates/footer');
	}

	public function hotchicks(){
		$data['copyright'] = 'Yuliyan THE GOAT';

		$this->load->view('drops/hotchicks', $data);
		$this->load->view('templates/footer');
	}

	public function transgender(){
		$data['copyright'] = 'Yuliyan THE GOAT';

		$this->load->view('drops/transgender', $data);
		$this->load->view('templates/footer');
	}
}
