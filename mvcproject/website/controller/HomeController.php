<?php
class HomeController extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('Home/home');
    }
}
?>