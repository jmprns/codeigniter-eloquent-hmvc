<?php

class Home extends MY_Controller{
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->slice->view('index');
    }

    function test()
    {
        echo 'TEST';
    }
}