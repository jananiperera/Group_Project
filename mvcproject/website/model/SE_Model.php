<?php

class Se_Model extends Model{
    function __construct(){
        parent::__construct(); 
    }

    function getDealers(){
        return $this->db->selectAll('dealers', '*' ); 
    }

    function getNewOrder(){
        return $this->db->selectWhere('item', '*' , "Category='Momali'");
    }

    function getNewOrderF(){
        return $this->db->selectWhere('item', '*' , "Category='Ferroli'");
    }

    function getNewOrderA(){
        return $this->db->selectWhere('item', '*' , "Category='Aquaflex'");
    }

    function updatepayment($id)
    {
        $query = "SELECT *
        FROM payment 
        INNER JOIN orders ON payment.OrderID=orders.OrderID
        INNER JOIN dealers ON orders.DealerID=dealers.u_id
        WHERE payment.InvoiceNo='$id' && payment.Status='not paid' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;  
                   
        }
        
    }

    function setpayment($id,$date,$check)
    {
        if($check==1){
            $query = "UPDATE payment SET Date = '".$date."', Status = 'paid and copy' WHERE InvoiceNo =$id";
        }else{
            $query = "UPDATE payment SET Date = '".$date."', Status = 'paid' WHERE InvoiceNo =$id";
        }
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }
}