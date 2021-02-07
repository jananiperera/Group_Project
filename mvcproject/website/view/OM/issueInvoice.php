<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Invoice</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/split3.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
                background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
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
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Issue Invoice</h1>
			</div>
		</div>
        
        <div class="clearfix">
            <div class="left">
                <form action="sendinvoice"  method="POST">
                      <fieldset>
                      <?php
                      // if($this->data==1) {
                        foreach($this->data as $values){
                      ?>
                        <label>
                          Invoice No: <input type="text" name="id" size="50" value="<?php echo $values['InvoiceNo']?>">
                        </label>
                        <label>
                          Dealer Name: <input type="text" name="id" size="50" value="<?php echo $values['f_name']?>">
                        </label>
                        <label>
                          Address: <input type="text" name="id" size="50" value="<?php echo $values['address']?>">
                        </label>
                        <label>
                          Email: <input type="text" name="id" size="50" value="<?php echo $values['email']?>">
                        </label>
                        <div class="formbtn">
                          <button type="submit" name="invoice" value="<?php echo $values['InvoiceNo']?>">Send Invoice</button>
                        </div>
                      <?php
                        }
                      //}
                      ?>
                      </fieldset>
                  </form>
              </div>

            <div class="right">
                
                  <div class="content1">
                  <input type="date" id="date" name="date">
				            <table id="table1">
                                <thead>
                                <tr>
                                  <th style="width:30%">Item ID</th>
                                  <th style="width:40%">Quantity</th>
                                  <th style="width:30%">Price</th>
                                </tr>
                              </thead>
                                <tbody>
                                <tr>	
                                  <?php

                                    
                                      foreach($this->data as $values){

                                      echo '<tr><td>'.$values["itemID"].'</td>';	
                                      echo '<td>'.$values["Quantity"].'</td>';
                                      echo '<td>'.$values["Amount"].'</td>';
                                     
                                      
                                      }
                                    

                                  ?>
                                </tr>
                                       
                                </tbody>
                            </table>
                        </div>
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

  </body>
</html>