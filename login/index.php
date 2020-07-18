
<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>unilorin_remedial_exercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="page_topmost">
        <ul>
            <li class="L1">Remedial Home Page</li>
            <li class="L2">Remedial Portal</li>
            <li class="L3">Today's date is Wednesday, March 6, 2019</li>
        </ul>
    </div>

        <div class="container">
                
            <header class="header">
                <img src="../images/IL_logo.png">
                
           </header>

                <div class="nav">
                    <ul>
                        
                        <li ><a href="index.html"> Remedial Home</a></li>
                        <li class="list_2"><a href="index.html"> Application Instruction</a></li>
                        <li class="list_3"><a href="index.html"> Registration Instruction</a></li>
                        <li class="list_4"><a href="../server/login_2.html">Remedial Login</a></li>  
                    </ul>
                </div>

                   <div class="notice"> <h2><marquee> <a href="index.html"> IMPORTANT NOTICE TO ALL REMEDIAL STUDENT</a></marquee></h2></div>

                <div class="form_container">
                   
                    <section class="reg_form col-3-4">
                            <h2>REMEDIAL APPLICATION FORM - ACCOUNT CREATION (STEP 1 OF 5)</h2>
                        <form class="form1" action="../server/register_action.php" method="post">
                        <p style="color: green" "text-align: center"><?php echo @$_SESSION['successmessage']; ?></p>
                            <div class = "form_group">    
                                <label>Surname:</label>    
                                <input type = "text" name = "sname" value = "" required/>    
                            </div> 
            
                            <div class = "form_group">    
                                <label>Firstname:</label>    
                                <input type = "text" name = "fname" value = "" required/>    
                            </div>
            
                            <div class = "form_group">    
                                <label>Middlename:</label>    
                                <input type = "text" name = "mname" value = "" required/>    
                            </div>
            
                            
                            <div class = "form_group">    
                                <label>Phone:</label>    
                                <input type = "text" name = "phone" value = "" required/>    
                            </div> 
                            <div class = "form_group">    
                                <label>Email Address:</label>    
                                <input type = "email" name = "email" value = "" required/> (must be valid)   
                            </div> 

                            <div class = "form_group">    
                                    <label>Password:</label>    
                                    <input type = "password" name = "password" value = "" required/>    
                            </div> 
            
                            
                            <div class = "form_group">    
                                <label>Confirm Password:</label>    
                                <input type = "password" name = "pword" value = "" required/>    
                            </div>  

                            <div class = "form_group">    
                                    <label>Session of Application:</label>    
                                  <select><option type= "number" name = "session">2018/2019</option></select>    
                                </div>  
                                <div class= "form_group submit">
                                    <input class="submit" type="submit" value="Create Account" class="btn btn-default">
                                 <button class="submit">clear</button>
                                </div>
                        </form>
                           
                </section><!--
                            

                   --> <aside class="col-1-4">
                        <a href="../server/uilug_portal.html">undergraduate portal</a><br>
                        <a href="index.html">Remedial Home Page</a><br>
                        <a href="index.html">Admission Requirement</a><br>
                        <a href="index.html">Remedial Application <br>Instruction</a><br>
                        <a href="index.html">Remedial Registration Instruction</a><br>
                        <a href="index.html">Remedial Application Form</a><br>
                        <a href="../server/login_2.html">Remedial Login <br>(STEP1)</a><br>
                        <a href="index.html">General Portal Help Desk</a>

                    </aside>
                
                </div>

                    <footer class="footer">
                        <small>Copyright&copy; 2019. COMSIT, University of Ilorin. All rights reserved</small>
                  </footer>
            </div> 
            
            <?php

unset($_SESSION['successmessage']);
?>
</body>
</html>