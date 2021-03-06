<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SC/SChome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
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
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="<?php echo URL; ?>public/img/profile.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Co-ordinator</h4>
      </div>
       <a href="profile"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="container">
		<div class= "op1">
			<h3>PRICE<br />LIST</h3>
			<a href="priceList"><img src="<?php echo URL; ?>public/img/price_list.png" height="110px" width="100px"></a>
		</div>
		<div class= "op2">
			<h3>NEW<br />ORDERS</h3>
			<a href="orders"><img src="<?php echo URL; ?>public/img/new_orders.png" height="110px" width="100px"></a>
		</div>
		<div class= "op3">
			<h3>ITEM<br />STOCK</h3>
			<a href="stock"><img src="<?php echo URL; ?>public/img/stock.png" height="120px" width="120px"></a>
		</div>
		<div class= "op4">
			<h3>COMPLAINTS<br /> <br /></h3>
			<a href="complaint"><img src="<?php echo URL; ?>public/img/complaints.png" height="110px" width="120px"></a>
		</div>
		<div class= "op5">
			<h3>NOTIFY<br />DEALERS</h3>
			<a href="notify"><img src="<?php echo URL; ?>public/img/notify.png" height="110px" width="110px"></a>
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