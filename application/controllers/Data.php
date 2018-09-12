<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        
    }
    
    public function employees()
    {
        // instance object
        $crud = new grocery_CRUD();
        // pilih tabel yg akan digunakan
        $crud->set_table('employees');
        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view
        // $this->_example_output($output);
        $this->load->view('template.php', $output);
        
    }
}

/* End of file Controllername.php */

?>