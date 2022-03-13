<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');    

    class Users extends CI_Controller {

        public function index() {
            $this->load->view('users/showProducts');
        }

        public function cart() {
            $this->load->view('users/cart');
        }

        public function item() {
            $this->load->view('users/item');
        }

        public function admin() {
            $this->load->view('users/admin');
        }

        public function dashboard() {
            $this->load->view('partials/navHeaderAdmin');
            $this->load->view('admin/dashboard');
        }

        public function product() {
            $this->load->view('partials/navHeaderAdmin');
            $this->load->view('admin/product');
        }

        public function info() {
            $this->load->view('partials/navHeaderAdmin');
            $this->load->view('admin/info');
        }


    }
?>