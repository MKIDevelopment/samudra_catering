<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardCashier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('master/dashboard/cashier', $data);
    }
}