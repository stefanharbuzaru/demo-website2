<?php
require_once 'core/init.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>myMag</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable-no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>

  </head>
  <body>
<?php
$sql="SELECT * FROM categories WHERE parent=0";
$pquery=$db->query($sql);
?>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container">
        <a href="mymag/index.php" class="navbar-brand" id="text">myMag</a>
        <ul class="nav navbar-nav">
          <?php while ($parent=mysqli_fetch_assoc($pquery)) : ?>
            <?php
            $parent_id= $parent['id'];
            $sql2="SELECT * FROM categories WHERE parent='$parent_id'";
            $cquery=$db->query($sql2);
            ?>
          <!--Drop Down Menu-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"  data-toggle="dropdown" id="text"><?php echo $parent['category'];?><span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <?php while($child=mysqli_fetch_assoc($cquery)) :?>
              <li><a href="#"><?php echo $child['category']?></a></li>
            <?php endwhile;?>
        </ul>
      </li>
      <?php endwhile;?>
    </ul>
   </div>
    </nav>
    <!--Images-->
    <div id="background-image">
      <div id="image-1"></div>
      <div id="image-2"></div>
      </div>

      <!--remove spaces and center products-->
      <div class="col-md-2 col-centered" align="center"></div>



      <!--main class of featured products-->

      <div class="col-md-8 col-centered">
        <br / />
        <h2 class="text-center">Featured Products</h2>
        <p></p>
        <br / / / / />
        <div class="row row-centered">


          <div class="col-md-3">
            <h4>Pants 1</h4>
            <img src="images/pants1.jpg" alt="Levi's jeans" id="images"/>
            <p class="list-price text-danger"> List price: <s>$25</s></p>
            <p class="price">Our price: $20</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1" name="button">Details</button>
         </div>

         <div class="col-md-3">
           <h4>Pants 2</h4>
           <img src="images/pants2.jpg" alt="Pants no 2" id="images"/>
           <p class="list-price text-danger"> List price: <s>$25</s></p>
           <p class="price">Our price: $20</p>
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2" name="button">Details</button>
        </div>

        <div class="col-md-3">
          <h4>Pants 3</h4>
          <img src="images/pants3.jpg" alt="Pants no 3" id="images"/>
          <p class="list-price text-danger"> List price: <s>$25</s></p>
          <p class="price">Our price: $20</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3" name="button">Details</button>
       </div>

       <div class="col-md-3">
         <h4>Shoe 1</h4>
         <img src="images/shoe1.jpg" alt="Shoe no 1" id="images"/>
         <p class="list-price text-danger"> List price: <s>$25</s></p>
         <p class="price">Our price: $20</p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4" name="button">Details</button>
      </div>

      <div class="col-md-3">
        <h4>Shoe 2</h4>
        <img src="images/shoe2.jpg" alt="Shoe no 2" id="images"/>
        <p class="list-price text-danger"> List price: <s>$25</s></p>
        <p class="price">Our price: $20</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5" name="button">Details</button>
     </div>

     <div class="col-md-3">
       <h4>Shoe 3</h4>
       <img src="images/shoe3.jpg" alt="Shoe no 3" id="images"/>
       <p class="list-price text-danger"> List price: <s>$25</s></p>
       <p class="price">Our price: $20</p>
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6" name="button">Details</button>
    </div>

    <div class="col-md-3">
      <h4>shoe 4</h4>
      <img src="images/shoe4.jpg" alt="Shoe no 4" id="images"/>
      <p class="list-price text-danger"> List price: <s>$25</s></p>
      <p class="price">Our price: $20</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7" name="button">Details</button>
   </div>

   <div class="col-md-3">
     <h4>Tshirt 1</h4>
     <img src="images/tshirt1.jpg" alt="Tshirt no 1" id="images"/>
     <p class="list-price text-danger"> List price: <s>$25</s></p>
     <p class="price">Our price: $20</p>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8" name="button">Details</button>
  </div>
      </div>

      <footer class="text-center" id="footer">&copy; Copyright 2020 myMag
      </footer>

    </div>

    <!--detail module-->
    <?php
    include 'details-modal-pants1.php';
    include 'details-modal-pants2.php';
    include 'details-modal-pants3.php';
    include 'details-modal-shoe1.php';
    include 'details-modal-shoe2.php';
    include 'details-modal-shoe3.php';
    include 'details-modal-shoe4.php';
    include 'details-modal-tshirt1.php';
    ?>
    <!--end of <detailsmodel-->











  </body>
</html>
