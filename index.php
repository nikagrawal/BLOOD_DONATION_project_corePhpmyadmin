<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood-Bank & Donor</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">
        <hr>
        <center>
            <h1 class="my-4">Welcome to Blood-Bank & Donor </h1>
        </center>
        <hr>
        <center>
            <img class="img-fluid rounded" src="images/banner3.png" alt="">
        </center>
        <hr>
        <!-- Marketing Icons Section -->
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who Can Donate?</h4>
                   
                    <p class="card-text" style="padding-left:2%">You Need to Be 18-65 Years Old Weigh 45 KG or More and be Fit</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                
                <div class="card">
                    <h4 class="card-header">What is it?</h4>
                   
                        <p class="card-text" style="padding-left:2%">Blood Collected Straight From The Donor After Its Donation Usually Separated into Red blood Cells , platelets and plasma. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">User for?</h4>
                   
                        <p class="card-text" style="padding-left:2%">Heart,Stomach,blood and kidney disease,operation,blood loss,cancer,trauma.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Lasts For?</h4>
                   
                        <p class="card-text" style="padding-left:2%">Red Cells Can Be Stored For 42 Days. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">How Long Does it Take?</h4>
                   
                    <p class="card-text" style="padding-left:2%">15 Minutes to Donate.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">How Often Can I Donate?</h4>
                   
                        <p class="card-text" style="padding-left:2%">Every 12 Weeks.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Why Blood Is Needed?</h4>
                   
                        <p class="card-text" style="padding-left:2%">The reason to donate is simple…it helps save lives. In fact, every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Donation Tips?</h4>
                   
                    <p class="card-text" style="padding-left:2%">
                        
                        drink lots of water.<br>
                        eat a salty snack.<br>
                        wear loose, comfortable clothing.<br>
                        avoid heavy lifting and vigorous exercise.<br>
                        share your good deed.<br>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help?</h4>
                   
                        <p class="card-text" style="padding-left:2%">The biggest benefit of being a blood donor is the opportunity to save lives. By donating 350-450 ml of blood you can save up to four lives.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <hr>
        <center>
        <h2>Some of the Donar</h2>
        </center>
        <hr>
        <div class="row">
                   <?php 
                        $status=1;
                        $sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':status',$status,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        { 
                    ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.png" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
                            <p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
                            <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->
        <hr>
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <center><h2>BLOOD GROUPS</h2></center><hr>
                    <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                    <hr>
                    <li>
                        <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">A positive or A negative</a>
                    </li><hr>
                    <li>
                        <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">B positive or B negative</a>
                    </li><hr>
                    <li>
                        <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">O positive or O negative</a>
                    </li><hr>
                    <li>
                        <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">AB positive or AB negative</a>
                    </li><hr>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/17605.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4><hr>
                <p>
                    The most common blood type is O, followed by type A.

                    Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.
                </p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
