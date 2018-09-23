<?php

class Calculator extends CI_Controller {

    public function index() {
        $data = array('title' => "Lab Exercise 2", 'label' => "Calculator");
        $this->load->view("lab2/calculator", $data);
    }

    public function calculate() {
        $num1 = $this->input->post('num1', true);
        $num2 = $this->input->post('num2', true);
        $operation = $this->input->post('operation');
        $ans = 0;
        $data = array('title' => "Result", 'result' => "", 'operation' => "");


        if ($num2 == 0 && $operation == "4") {
            $data['operation'] = "Quotient";
            $data['result'] = " (Math Error)- You Cannot Divide a number By Zero";
        } else {
            if ($operation == 1) {
                $ans = $num1 + $num2;
                $data['operation'] = "Sum";
            } else if ($operation == 2) {
                $ans = $num1 - $num2;
                $data['operation'] = "Difference";
            } else if ($operation == 3) {
                $ans = $num1 * $num2;
                $data['operation'] = "Product";
            } else if ($operation == 4) {
                $data['operation'] = "Quotient";
                $ans = $num1 / $num2;
            } else {
                echo 'invalid input';
            }
            $data['result'] = $ans;
        }     
        $this->load->view("lab2/result", $data);
    }

}
