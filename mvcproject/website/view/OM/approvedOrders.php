<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Orders</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/table1.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
    <script language="JavaScript" src="<?php echo URL; ?>public/js/approveorders.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
            background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
       }
       
      #input {
        background-image: url("<?php echo URL; ?>public/img/searchIcon.png");
        background-size: 20px 20px;
        background-position: 10px 10px;
				background-repeat: no-repeat;
				width: 50%;
				font-size: 16px;
				padding: 12px 20px 12px 40px;
				border: 1px solid #ddd;
				margin-left: 40px;
				margin-bottom: 12px;
      }
      
      .selected{
        background-color:blue;
        font-weight:bold;
      }
		</style>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BrandLink <span>Overseas</span></h3>
      </div>
      <div class="right_area">
        <a href="../Login/log" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="clearfix">
      <div class ="topic">
				<h1>Approved Orders</h1>
			</div>
		</div>

		<div class="wrapper clearfix">
		  <div class="content1">
        <!-- <div class="searchInput"> -->
				<input type="text" id="input" onkeyup="search()" placeholder="Search for orders..." title="Type in a name">
         <!-- </div> -->
        
				<table id="table">
     					<thead id="head">
        			  <tr id="head">	
                    <th style="width:5%" > Order No </th>
                    <th style="width:10%"> Name </th>
                    <th style="width:5%"> Contact No </th>
                    <th style="width:10%" name="Items"> Items </th>
                    <th style="width:5%" name="Quantity"> Quantity </th>
                    <th style="width:5%"> Amount </th>
                    <th style="width:5%"> Select </th>
                    <th style="width:5%"> Option </th>
                </tr>  

								 
							</thead>
							<tbody>

                  <?php
                    
                    //if($this->data!=0){
                      foreach($this->data as $values){
                        ?>
                      <tr>
                      <form action="operationStock" method="POST">
                        <td><?php echo $values["OrderID"];?></td>
                        <td><?php echo $values["f_name"];?></td>
                        <td><?php echo $values["contact"];?></td>
                        <td><?php echo $values["Items"];?></td>
                        <td><?php echo $values["Quantity"];?></td>
                        <td><?php echo $values["Amount"];?></td>
      
                        <td>
                          <input type="checkbox" name="keyToUpdate" value="<?php echo $values['OrderID']?>" required>
                        </td> 
                    
                        <td>
                          <button type="submit" name="stockupdate" class="btn btn-info" value="<?php echo $values['itemID']?>">Update</button>
                          <input type="text" name="keyToIssue" value="<?php echo $values['OrderID']?>" hidden>
                          <button type="submit" name="invoice">Issue Invoice</button>
                        </td>
                      </form>
                    </tr>
                  <?php
                  }
                  ?>
               
              </tbody>
          </table>
          
				</div>
			</div>
	
		   
    <div class="footercontent">
      <?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?> 
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

    <script>
			$(document).ready(function(){
				$("#input").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("#table tbody").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
	  </script>

    <script>
      function selectRow(){
        var check = document.getElementsByName("keyToUpdate");
        for(var i=0; i<check.length; i++){
          check[i].onclick = function(){
            var el = document.getElementById("head");
            while(el = el.nextSibling){
              if(el.tagName === "TR"){
                el.classList.remove("selected");
              }
            }
            this.parentElement.parentElement.classList.toggle("selected");
          };
        }
      }
      selectRow();
    </script> 

    <?php

    if(isset($_GET['alert']) && $_GET['alert']=='stocksuccess'){
      echo '<script> $(window).ready(stockSuccess()); </script>';
    }
    if(isset($_GET['alert']) && $_GET['alert']=='stockfail'){
      echo '<script> $(window).ready(stockFail()); </script>';
    }
    ?>

  </body>
</html>