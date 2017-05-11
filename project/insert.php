<?php
    session_start();
    $servername = "localhost";    $username = "root";
    $password = "";
    $dbname = "dbname";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $hallticketno = $_POST['hallticket'];
    $studname = $_POST['name'];
    $fname= $_POST['fname'];
    $gender= $_POST['gender'];
    $dob = $_POST['bday'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $college=$_POST['cname'];

    $sql = "INSERT INTO reg(hallticketno,name,fname,gender,dob,course,branch,cname)
    VALUES ('$hallticketno','$studname','$fname','$gender','$dob','$course','$branch','$college')";                
   if (mysqli_query($conn, $sql)) {
        // echo mysqli_insert_id($conn);
        $_SESSION["userID"] = mysqli_insert_id($conn);
         echo "<script>
                alert('Success');
                window.location.href='form1.html';
               </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>