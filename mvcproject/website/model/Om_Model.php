<?php

class Om_Model extends Model{
    function __construct(){
        parent::__construct(); 
    }

    function getMomali(){
        return $this->db->selectWhere('item', '*' , "Category='Momali'"); 
    }

    function getFerroli(){
        return $this->db->selectWhere('item', '*' , "Category='Ferroli'"); 
    }

    function getAqua(){
        return $this->db->selectWhere('item', '*' , "Category='Aquaflex'"); 
    }

    function getSMomali(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='momali'"); 
    }
 
    function getSFerroli(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='ferroli'"); 
    }

    function getSAqua(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='aquaflex'"); 
    }
 
    function insert($item,$name,$quantity,$price,$photoTmpPath,$table,$category)
    {
        $query = "insert into $table (`ItemID`,`ItemName`,`Quantity`,`Price`,`Image`,`Category`) values('$item','$name','$quantity','$price','$photoTmpPath','$category')";
        $result = mysqli_query($this->db->conn,$query);
        
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insertS($item,$name,$quantity,$price,$img,$table,$category)
    {
        $query = "insert into $table (`itemNo`,`name`,`quantity`,`unitPrice`,`photo`,`category`) values('$item','$name','$quantity','$price','$img','$category')";
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insertcart($item,$table)
    {
        $query = "insert into $table (`ID`) values('$item')";
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function fetch($id,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE ItemID='$id' && Category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    function fetchS($id,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE itemNo='$id' && category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    function fetchName($name,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE ItemName='$name' && Category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    public function update($id,$name,$quantity,$price,$photoTmpPath,$table,$category)
    {
        if($photoTmpPath != ""){
            $data = file_get_contents($photoTmpPath);
            $image = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            $query = "UPDATE $table SET ItemID = '".$id."', ItemName = '".$name."',Quantity = '".$quantity."',Price = '".$price."', Image='$image' WHERE ItemID =$id && Category='$category'";
            $result = mysqli_query($this->db->conn,$query);
        } else{
            $query = "UPDATE $table SET ItemID = '".$id."', ItemName = '".$name."',Quantity = '".$quantity."',Price = '".$price."' WHERE ItemID =$id && Category='$category'";
            $result = mysqli_query($this->db->conn,$query);   
        }

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function updateS($id,$name,$quantity,$price,$photoTmpPath,$table,$category)
    {
        if($photoTmpPath != ""){
            $data = file_get_contents($photoTmpPath);
            $image = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            $query = "UPDATE $table SET name = '".$name."',itemNo = '".$id."',quantity = '".$quantity."',unitPrice = '".$price."', photo='$image' WHERE itemNo ='".$id."' && category='$category'";
            $result = mysqli_query($this->db->conn,$query);
        } else{
            $query = "UPDATE $table SET name = '".$name."',itemNo = '".$id."',quantity = '".$quantity."',unitPrice = '".$price."' WHERE itemNo ='".$id."' && category='$category'";
            $result = mysqli_query($this->db->conn,$query);   
        }

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function delete($id,$table,$category)
    {
        $query = "delete from `$table` where ItemID = $id && Category='$category'";
        $result = mysqli_query($this->db->conn,$query);
            
            
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

    public function deleteS($id,$table,$category)
    {
        $query = "delete from `$table` where itemNo = $id && category='$category'";
        $result = mysqli_query($this->db->conn,$query);
            
            
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

    public function getAOrders()
    {
        $query = "SELECT * 
                    FROM orders 
                    INNER JOIN dealers ON orders.DealerID=dealers.u_id
                    WHERE orders.Status='approved'";
        $result = mysqli_query($this->db->conn,$query);
        return $result;             
        
    }

    public function updatestock($id)
    {
        $query = "UPDATE item
                    INNER JOIN orders ON item.ItemID=orders.itemID
                    SET item.Quantity = item.Quantity-orders.Quantity
                    WHERE item.ItemID='$id' && orders.Status='approved'"; 
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getInvoice($id)
    {
        $query = "SELECT *
                    FROM payment
                    INNER JOIN orders ON payment.OrderID=orders.OrderID
                    INNER JOIN dealers ON orders.DealerID=dealers.u_id
                    WHERE payment.OrderID='$id' && payment.Status='not issued' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        return $result; 
    }

    public function sendInvoice($id)
    {
        $query = "UPDATE payment SET Status='issued' WHERE InvoiceNo='$id'";
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }

    public function stockreport()
    {
        $query = "SELECT ItemID, ItemName, Quantity, Price FROM item";
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }

    public function stockcategory()
    {
        $query = "SELECT Category, sum(Quantity) AS TotalQuantity FROM item group by Category";
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }

    public function getreport($datefrom,$dateto)
    {
        $query = "SELECT itemID, Items, sum(Quantity) AS TotalQuantity, sum(Amount) AS TotalAmount FROM orders WHERE `Date`
        between '$datefrom' and '$dateto' group by itemID";
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }

    public function monthrep(){
        $query = "SELECT itemID, Items, sum(Quantity) AS TotalQuantity, sum(Amount) AS TotalAmount FROM orders WHERE 'Date' >=
        DATE_SUB(CURRENT_DATE, INTERVAL 30 DAY) group by itemID";
        $result = mysqli_query($this->db->conn,$query);
        return $result;  
    }

}

?>