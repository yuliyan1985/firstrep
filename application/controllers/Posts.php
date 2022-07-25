<?php
class Posts extends CI_Controller{
	public function index(){
		$data['copyright'] = 'Yuliyan GOAT';
		$data['title'] = 'Latest posts';
		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($slug = NULL){
		$data['post'] = $this->post_model->get_posts($slug);
		$data['copyright'] = 'Yuliyan GOAT';

		if (empty($data['post'])){
			show_404();
		}
		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view1', $data);
		$this->load->view('templates/footer');
	}


	public function create()
	{
		$data['title'] = 'Create Post';
		$data['copyright'] = 'Yuliyan GOAT';

		$data['categories'] = $this->post_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} else {
			//upload image
			$config['upload_path'] = '/app/assets/images';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '1100';

			$this->load->library('upload', $config);

			if (!empty($_FILES['postimage']['name']) && !$this->upload->do_upload('postimage')) {
				$errors = array('error' => $this->upload->display_errors());
				var_dump($this->upload->display_errors());
				$post_image = 'noimage.jpg';
			} else {
				$data = array('upload-data' => $this->upload->data());
				$post_image = $_FILES['postimage']['name'];
			}


			$this->post_model->create_post($post_image);
			redirect('posts');
		}
	}
	public function delete($id){
		$this->post_model->delete_post($id);
		redirect('posts');
	}

	public function edit($slug){
		$data['copyright'] = 'Yuliyan GOAT';

		$data['post'] = $this->post_model->get_posts($slug);

		$data['categories'] = $this->post_model->get_categories();


		if (empty($data['post'])){
			show_404();
		}
		$data['title'] = 'Edit Post';

		$this->load->view('templates/header');
		$this->load->view('posts/Edit', $data);
		$this->load->view('templates/footer');
	}



	public function update(){


		$this->post_model->update_post();
		redirect('posts');

	}

	public function contact(){
		$this->load->view('posts/contact');
	}
}


























