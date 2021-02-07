<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Orders</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SE/form1.css">
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
        <a href="dealer"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="notEligible"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="newOrder"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="payment"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="complaint><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Executive</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="dealer"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="notEligible"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="newOrder"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="payment"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="complaint"><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
	<div class="wrapper clearfix">
            <div class ="topic">
				<h1>New Orders</h1>
			</div>
		</div>
		
	<div class="wrapper clearfix">
        <div class="form">
            <form action="orderform" method="POST">
                <div class="row">
                <label>
					Dealer Name: <input type="text" name="name" id="name" size="50" >
                </label>
                <label>
					Address: <input type="text" name="address" id="address" size="50">
                </label>
                <label>
          Total Amount: <input type="text" id="total" name="total">
                    <a href="cart"><input type="button" name="cart" value="View Cart"></input></a>
                </label>
                </div>
                <label>
					Item Name: <input type="text" name="id" id="id">
                    <button type="submit" name="find">Find</button>
                </label>
                
          <div class="bar">
				 	<div class="f1">
					 	<a href="newOrder"><input type=button name="momali" value="Momali"></input></a>
						<a href="newOrderF"><input type=button name="ferroli" value="Ferroli"></input></a>
						<a href="newOrderA"><input type=button name="aqua" value="Aquaflex"></input></a>
					</div>
          </div>
        </form>
            
                <div class="wrapper clearfix">
                    <table id="table1">
                                    <tbody>
                                <!-- <div class="contentIn">
                                    <div class=card> -->
                                    	
                                        <?php

                                        if($this->data!=0){
                                            foreach($this->data as $values){
                                        ?>
                                       
                                       <tr>
                                            <td> 
                                                <input type="checkbox" id="box" name="box" value="Item2">
                                            </td>
                                            <td>
                                                <label for="box"><?php echo $values["ItemName"]; ?></label>
                                            </td>
                                            <td>
                                                <input type="number" id="number" name="number" min="0" max="1000" step="50" value="0">
                                            </td>
                                            <td>
                                                <img src="data:image/jpg;base64,<?php echo base64_encode( $values["Image"] ); ?>" style="width:100px;height:100px"/>
                                            </td>
                                        
                                    <!-- </div> -->
                                        <?php    
                                            }
                                        }

                                        ?>
                                        </tr>
                                
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

  </body>
</html>