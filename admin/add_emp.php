<?php
    if(isset($_SESSION['valid'])==True){?>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add a new Employee
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="add_emp.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Employee Name</label>
                            <input name="name" class="form-control" placeholder="Enter Employee Name">
                        </div>

                        <div class="form-group">
                            <label>Location (separate with a comma)</label>
                            <input name="location" class="form-control" placeholder="Enter Location(s)">
                        </div>

                        <div class="form-group">
                            <label>Contact</label>
                            <input name="contact" class="form-control" placeholder="Enter Mobile number">
                        </div>

                        <input type="submit" class="btn btn-default" name="btn-resadd" value="Submit">

                    </form>

                </div>
                
            </div>

    <?php
}
?>
</div>

<?php
include_once 'connect.php';

if(isset($_POST['btn-resadd']) != 0 ){

    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];


    if ((strlen($name) == 0) || (strlen($location) == 0)|| (strlen($contact) == 0)) {
        echo '<script language="javascript">';
        echo 'alert("Please fill all the fields")';
        echo '</script>';
    }
    else {
        $query = "SELECT empname FROM employee WHERE empname='$name'";
        $result = mysqli_query($conn,$query);
        
        $count = mysqli_num_rows($result);
        
        if ($count==0) {

            $query = "INSERT INTO `employee`(`empname`, `emploc`, `empcontact`) VALUES ('$name','$location','$contact')";

            mysqli_query($conn,$query);
            
            header("location:success.php?ref=6");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Sorry the employee already exists.")';
            echo '</script>';
        }
    }
}
?>