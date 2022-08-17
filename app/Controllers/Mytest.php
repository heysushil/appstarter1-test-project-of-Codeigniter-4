<?php

namespace App\Controllers;
use App\Models\MytestModal;
// use CodeIgniter\Model;

class Mytest extends BaseController
{
    // public function __construct()
    // {
    //     helper(['form','url']);
    // }

    function index()
    {
        return view('mytest/home');
    }

    function useractivity()
    {
        echo view('mytest/useractivity');
    }

    public function useractivity_formdata(){
        helper(['form','url']);

        echo 'hello dierect method';die;

        $arrayData = array(
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),            
        );

        $this->pr($arrayData);

    }

    function name()
    {
        $data = array(
            'name'=>'deva',
            'age'=>22,
        );
        return print_r($data);
    }

    function funWithData($data=false)
    {
        if($data != 1){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the data ' . $data);
        }
        return 'how to get this data' . $data;
    }

    // Createing table form here it's via modal or direct in controller but for controller case need to first create modal object in controller then use it.
    // On ci3 modal was seperated but we can create the db code in controller but in ci4 need to create object first then use the model related works.
    function db()
    {
        // helper(['form','url']);
        $model = model(MytestModal::class);
        echo $model->db();

    }

    public function pr($arrayData){
        echo '<pre>';
        print_r($arrayData);
    }
}