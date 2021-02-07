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
					Dealer Name: <input type="text" name="name" id="name" size="50" value="<?php echo $name ?>">
                </label>
                <label>
					Address: <input type="text" name="address" id="address" size="50" value="<?php echo $address ?>">
                </label>
                <label>
                    Total Amount: <input type="text" id="total" name="total" value="<?php echo $total ?>">
                    <button type="submit" name="amount">Submit</button>
                </label>
                </div>
                <label>
					Item Name: <input type="text" name="id" id="id">
                    <button type="submit" name="find">Find</button>
                </label>
                
                <div class="bar">
				 	<div class="f1">
					 	<a href="newOrder"><input type=button name="momali" value="Momali"></input></a>
						<a href="newOrderF"><input type=button name="fwrroli" value="Ferroli"></input></a>
						<a href="newOrderA"><input type=button name="aqua" value="Aquaflex"></input></a>
					</div>
                </div>
        </form>
            
                    <!-- <div class="col-15">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id">
                    <input type="button" value="Find">
                    </div>
                    <div class="col-15">
                    <label for="name">Name</label>
                    </div>
                    <div class="col-30">
                    <input type="text" id="name" name="name">
                    </div>
                    <div class="col-15">
                    <label for="address">Address</label>
                    </div>
                    <div class="col-30">
                    <input type="text" id="address" name="address">
                    </div> -->
                
                <div class="wrapper clearfix">
                    <table id="table">
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
                                <!-- </div> -->
                                    
                                            <!-- <tr>
                                                <td>
                                                    <input type="checkbox" id="1" name="1" value=>
                                                    <label for="1"> Item 1</label>
                                                    <input type="number" id="1" name="1" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="2" name="2" value="Item2">
                                                    <label for="2"> Item 2</label>
                                                    <input type="number" id="2" name="2" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="3" name="3" value="Item3">
                                                    <label for="3"> Item 3</label>
                                                    <input type="number" id="3" name="3" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="4" name="4" value="Item4">
                                                    <label for="4"> Item 4</label>
                                                    <input type="number" id="4" name="4" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="5" name="5" value="Item5">
                                                    <label for="5"> Item 5</label>
                                                    <input type="number" id="5" name="5" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="6" name="6" value="Item6">
                                                    <label for="6"> Item 6</label>
                                                    <input type="number" id="6" name="6" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="7" name="7" value="Item7">
                                                    <label for="7"> Item 7</label>
                                                    <input type="number" id="7" name="7" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="8" name="8" value="Item8">
                                                    <label for="8"> Item 8</label>
                                                    <input type="number" id="8" name="8" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="9" name="9" value="Item9">
                                                    <label for="9"> Item 9</label>
                                                    <input type="number" id="9" name="9" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="10" name="10" value="Item10">
                                                    <label for="10"> Item 10</label>
                                                    <input type="number" id="10" name="10" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="11" name="11" value="Item11">
                                                    <label for="11"> Item 11</label>
                                                    <input type="number" id="11" name="11" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="12" name="12" value="Item12">
                                                    <label for="12"> Item 12</label>
                                                    <input type="number" id="12" name="12" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="13" name="" value="Item13">
                                                    <label for="13"> Item 13</label>
                                                    <input type="number" id="13" name="13" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="14" name="14" value="Item14">
                                                    <label for="14"> Item 14</label>
                                                    <input type="number" id="14" name="14" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="15" name="3" value="Item15">
                                                    <label for="15"> Item 15</label>
                                                    <input type="number" id="15" name="15" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="18" name="18" value="Item18">
                                                    <label for="18"> Item 18</label>
                                                    <input type="number" id="18" name="18" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="19" name="19" value="Item19">
                                                    <label for="19"> Item 19</label>
                                                    <input type="number" id="19" name="19" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="20" name="20" value="Item20">
                                                    <label for="20"> Item 20</label>
                                                    <input type="number" id="20" name="20" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="21" name="21" value="Item21">
                                                    <label for="21"> Item 21</label>
                                                    <input type="number" id="21" name="21" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="22" name="22" value="Item22">
                                                    <label for="22"> Item 22</label>
                                                    <input type="number" id="22" name="22" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="23" name="23" value="Item3">
                                                    <label for="23"> Item 23</label>
                                                    <input type="number" id="23" name="23" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="24" name="24" value="Item24">
                                                    <label for="24"> Item 24</label>
                                                    <input type="number" id="24" name="24" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="25" name="25" value="Item25">
                                                    <label for="25"> Item 25</label>
                                                    <input type="number" id="25" name="25" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="26" name="26" value="Item3">
                                                    <label for="26"> Item 26</label>
                                                    <input type="number" id="26" name="26" min="0" max="50" value="0">
                                                </td>
                                            </tr> -->
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