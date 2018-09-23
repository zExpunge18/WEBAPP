<?php

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('test_model');
    }

    public function index() {
        $data = array(
            'title' => "My WebPage",
            'items' => $this->test_model->fetchItems('item_tble')
        );
        $this->load->view('test/includes/header', $data);
        $this->load->view("test/index");
        $this->load->view('test/includes/footer');
    }

    public function deleteall() {
        $this->test_model->deleteItem('item_tble');
        redirect('test/');
    }

    public function insert() {
        $dataArray = [
            'item_name' => $this->input->post('itmname', true),
            'item_description' => $this->input->post('itmdesc', true),
            'item_price' => $this->input->post('itmprice', true)
        ];

        $this->test_model->insertRecord('item_tble', $dataArray);
        redirect('test/');
    }

    public function view() {
        $data = array(
            'title' => "My WebPage",
            'items' => $this->test_model->fetchItems('item_tble', ['item_id' => $this->uri->segment(3)])
        );
        $this->load->view('test/includes/header', $data);
        $this->load->view("test/index");
        $this->load->view('test/includes/footer');
    }

    public function delete() {
        $this->test_model->deleteItem('item_tble', ['item_id' => $this->uri->segment(3)]);
        redirect('test/');
    }
    public function update() {
        $id = $this->input->post('id', true);
        $dataArray = [
            'item_name' => $this->input->post('itmname', true),
            'item_description' => $this->input->post('itmdesc', true),
            'item_price' => $this->input->post('itmprice', true)
        ];
        $this->test_model->updateRecord('item_tble', $dataArray,$id);
        redirect('test/');
    }

    public function formsample() {
        $this->load->view("test/form");
    }

    public function formsubmit() {
        echo '<pre>';
        //Native POST = $_POST
        //CI = $this->input->post();
        print_r($this->input->post('myinput', true));
        echo '</pre>';
    }

    public function aboutpage() {
        $data = array('title' => "About Page");
        $this->load->view("test/includes/header", $data);
        $this->load->view("test/about");
        $this->load->view("test/includes/footer");
    }

    public function edit() {
        $data = array('title' => "Update Record",
        'id' => $this->uri->segment(3),
        'items' => $this->test_model->fetchItems('item_tble', ['item_id' => $this->uri->segment(3)]));
        $this->load->view("test/includes/header", $data);
        $this->load->view("test/updateRecord");
        $this->load->view("test/includes/footer");
    }

}
?>