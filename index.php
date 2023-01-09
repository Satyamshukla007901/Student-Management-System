<html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title> Student Management System</title>
        
    </head>
    <body>
        <nav class="title">
            <div>
            <h1 align="center"> Welcome To Student Management System</h1>
            
        </div>
        <div class="container" style="text-align: right; ">
            <a href="login.php"><button class="btn btn-success">Admin LogIn</button> </a></button>
        </div>
            
            
        </nav>  
        
        
        
        <form method="post" action="index.php" class="form-control">
            <table style="width:50%;" align="center" border="1" class="table table-bordered table-striped">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select name="std" class="form-control">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td>Enter Rollno</td>
                    <td><input type="text" name="rollno" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary mb-3" name="submit" value="Show Info"></td>                    

                    
                </tr>
            </table>
                                   
        </form>
            
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');    
    showdetails($standard,$rollno);   
    
}

?>