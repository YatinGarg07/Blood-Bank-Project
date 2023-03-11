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

    <title>BloodBank & Donor Management System</title>
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

        <h1 class="my-4"><B>FRIENDS 2 SUPPORT</B></h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h6 class="card-header"><B><CENTER>THE NEED FOR BLOOD</CENTER></B></h6>
                   
                        <p class="card-text" style="padding-left:2%">
<PRE><B>
There are many reasons patients need blood. 
A common misunderstanding about blood usage 
is that accident victims are the patients 
who use the most blood. 

Actually, people needing the most blood 
include those:

->Being treated for cancer
->Undergoing orthopedic surgeries
->Undergoing cardiovascular surgeries
->Being treated for inherited blood 
  disorders. </B>
</PRE>
</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h6 class="card-header"><B><CENTER>TIPS FOR A SUCCESSFUL DONOR</CENTER> </B></h6>
                   
                        <p class="card-text" style="padding-left:2%"><PRE><B>
->Keep the strip bandage on for the next 
  several hours; to avoid a skin rash,clean 
  the area around the bandage with soap 
  and water.
->Don't do any heavy lifting or vigorous 
  exercise for the rest of the day.
->If the needle site starts to bleed, apply 
  pressure and raise your arm straight up 
 for 5-10 minutes or until bleeding stops.
->If you donate frequently, be sure to 
  take multivitamins with iron to ensure 
  you continue to replenish your iron 
  stores before your next donation. </B>
</PRE>
</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h6 class="card-header"><B><CENTER>WHY DO WE NEED TO DONATE BLOOD</CENTER></B></h6>

                        <p class="card-text" style="padding-left:2%">          
<PRE><B>
->Giving blood is one of the most selfless 
  things you can do. 
->You're among a select minority. Less 
  than 38% of the population is eligible 
  to give blood or platelets, so if you're 
  one of them, consider yourself among 
  the chosen few.
->You get a free health check-up.Before 
  you give blood, a nurse will check your 
  blood pressure & pulse.Your blood may 
  also be checked for HIV and other 
  diseases. So it's like getting a mini 
  checkup just for doing something good!
 </B>
</PRE>
</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donar</h2>

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
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
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

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
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
