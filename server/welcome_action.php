<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Undergraduate Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <script src="main.js"></script>
   
</head>

<body class="body">

<?php 
session_start();

$email=$_SESSION['email'];

require_once('connect.php');

$result="SELECT * FROM rem_applicant WHERE EmailAddress='$email' ";
$query=mysqli_query($conn,$result);
$row=mysqli_fetch_array($query);
?>
<p style= "color: green">welcome!!</P>
<?php echo $row['Surname']." ".$row['Firstname']." ".$row['Middlename'];?>


            <!-- student portal-->

            <!DOCTYPE html>
<html>
<head>
   
</head>


    <div class="ug">
        <header class="top-header">
            <h1>University of Ilorin</h1>
            <img src="../images/ilorin_logo_2.jpg">
            <p>better by far</p>
            <h2>Undergraduate Portal</h2>
        </header>

        <div class="header-nav">
            <ul>
                <li>HOME</li>
                <li class="h1">HELP DESK</li>
                <li class="h2">REGISTRATION</li>
                <li class="h3"><a href="login_2.html">LOGOUT</a></li>
            </ul>
        </div>

            <div class="sess-aside">
                <aisde class="col-1-4">
                    <a href="index.html">procedure for Registration</a><br>
                    <a href="index.html">Download academic programme</a><br>
                    <a href="index.html">Current charges</a><br>
                    <a href="index.html">School Charges payment</a><br>
                    <a href="index.html">course Registration</a><br>
                    <a href="../navigation_pages/course_reg_print.html">Print completed course form</a><br>
                    <a href="index.html">Print payment receipt</a><br>
                    <a href="index.html">General payment revalidation</a><br>
                    <a href="index.html">Bandwidth payment revalidation</a><br>
                    <a href="index.html">Print admission clearance</a><br>
                    <a href="index.html">Admission screening result</a>
                </aisde><!--
                --><section class="col-3-4">
                    <h1>Returning Students instruction for 2018/2019 session</h1>
                        <ul>
                            <li>Students LOGIN on the Portal</li>
                            <li>Students Update their Profile (e-mail)</li>
                            <li>Students Pay the University Fees</li>
                            <li>Student receives an e-mail alert on the status of his/her registered courses</li>
                            <li>Student receives an e-mail alert on the status of his/her registered courses</li>
                            <li> Student finally prints out the registered courses, fee payments and submits to the level adviser</li>
                        </ul>

                </section>
            </div>
            <footer class="footer">
                    <small>Copyright&copy; 2019. COMSIT, University of Ilorin. All rights reserved</small>
              </footer>
            
    </div>

    
</body>
</html>
