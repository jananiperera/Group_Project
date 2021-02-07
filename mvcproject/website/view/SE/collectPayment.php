<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collected Payments</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SE/form2.css">
   
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
				<h1>Collected Payments</h1>
			</div>
		</div>
        
        
		<div class="form">
      <fieldset>
            <form id="payform" name="payform" action="pay" method="POST">
                <div class="row">
                    <div class="col-25">
                    <label for="invoice">Invoice No</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="invoice" name="InvoiceNo" value="<?=isset($this->value[0]['InvoiceNo']) ? $this->value[0]['InvoiceNo'] : '';?>">
                    <input type="submit" name="find" value="Find">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="id">Dealer id</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="id" name="deaerId" value="<?=isset($this->value[0]['DealerID']) ? $this->value[0]['DealerID'] : '';?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="amount">Amount</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="amount" name="amount" value="<?=isset($this->value[0]['Amount']) ? $this->value[0]['Amount'] : '';?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="name">Dealer Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="name" name="name" value="<?=isset($this->value[0]['f_name']) ? $this->value[0]['f_name'] : '';?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="date">Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="date" name="date" value="<?=isset($this->value[0]['Date']) ? $this->value[0]['Date'] : '';?>">
                    <input type="checkbox" id="copy" name="copy" value="1">
                    <label for="copy"> Send a copy to HOM</label>
                    </div>
                </div>
                
                <div class="row">
                <div class="lastbtn">
                    <input type="submit" name="update" value="Submit">
                    </div>
                </div>
            </form>
    </fieldset>
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