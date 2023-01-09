<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
 

include('header.php');
?>
    <div class="admintitle container" align="center">
        <h4><a href="../logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
        <h1  align="center"> Welcome To Admin Dashboard </h1>
        
    </div>
    
    <center>
        <div class="container col-md">
            <a href="addstudent.php"><button class="btn btn-primary">Insert Student</button></a>
            <a href="updatestudent.php"><button class="btn btn-primary">Update Student</button></a>
            <a href="deletestudent.php"><button class="btn btn-primary">Delete Student</button></a>
        </div>
        
    </center>
        

    </div>        

</body>
</html>
