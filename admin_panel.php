
<?php session_start();
if (!isset($_SESSION["uid"])) {
  header('Location: /Website');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="css/admin_menu.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <title>TechNoLogic Xstore</title>
</head>

<body>

  <input type="checkbox" id="check">

  <!--header area start-->

  <header>

    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
      <h3>Techno <span>Xstore</span></h3>
    </div>

    <div class="right_area">
      <a href="/Website?c=login&action=logout" class="logout_btn">Logout</a>
    </div>

  </header>

  <!--mobile navigation bar start-->

  <div class="mobile_nav">

    <div class="nav_bar">
      <img src="images/users/admin.png" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>

    <div class="mobile_nav_items">
      <a href="/Website?c=home"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="/Website?c=edit"><i class="fas fa-list-ul"></i><span>Edit Products</span></a>
      <a href="/Website?c=product&action=add"><i class="fas fa-cart-plus"></i><span>Add New Product</span></a>
      <a href="/Website?c=create_admin"><i class="fas fa-user-plus"></i><span>Add New Admin</span></a>
    </div>

  </div>

  <!--sidebar start-->

  <div class="sidebar">

    <div class="profile_info">
      <img src="images/users/admin.png" class="profile_image">
      <h4>Admin</h4>
    </div>
    <a href="/Website?c=home"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="/Website?c=edit"><i class="fas fa-list-ul"></i><span>Edit Products</span></a>
    <a href="/Website?c=product&action=add"><i class="fas fa-cart-plus"></i><span>Add New Product</span></a>
    <a href="/Website?c=create_admin"><i class="fas fa-user-plus"></i><span>Add New Admin</span></a>

  </div>

  <!--sidebar end-->

  <div class="content">
  </div>

  <script type="text/javascript" src="js/admin.js"></script>
  
</body>

</html>