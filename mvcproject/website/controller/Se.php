<?php
class Se extends Controller{
    function __construct()
    {
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="sales_executive"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('SE/SE_home');
    }

    function payment(){
    	$this->view->render('SE/collectPayment');
    }

    function pay(){
        if(isset($_POST['find'])){
            $id= $_POST["InvoiceNo"];
			$this->view->value=$this->model->updatepayment($id);
            $this->view->render('SE/collectPayment');
        }
        else if(isset($_POST['update'])){
            $check= $_POST['copy'];
            $id= $_POST["InvoiceNo"];
            $date= $_POST["date"];
            $this->view->value=$this->model->setpayment($id,$date,$check);
            $this->view->render('SE/collectPayment');
        }
    }

    function complaint(){
    	$this->view->render('SE/complaints');
    }

    function dealer(){
        $this->view->data=$this->model->getDealers();
        $this->view->render('SE/dealerInfo');
    }

    function newOrder(){
        $this->view->data=$this->model->getNewOrder();
        $this->view->render('SE/newOrders');
    }

    function newOrderF(){
        $this->view->value=$this->model->getNewOrderF();
        $this->view->render('SE/neworderferroli');
    }

    function newOrderA(){
        $this->view->value=$this->model->getNewOrderA();
        $this->view->render('SE/neworderaqua');
    }

    // function orderform(){
    //     $name=$_POST['name'];
    //     $name=$_POST['address'];
    //     $name=$_POST['total'];
    // }

    function cart(){
    	$this->view->render('SE/cart');
    }

    function notEligible(){
    	$this->view->render('SE/notEligible');
    }

    function settings(){
    	$this->view->render('SE/profile');
    }
    
}
?>