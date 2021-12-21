<?php
    // Input data for form
    include "process.php";

    $res = mysqli_query($mysqli,"SELECT * FROM data WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Data Update</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-borderless">
            <tbody>
                <form action="" method="POST">
                    <tr>
                        <td>Enter Booking Date</td>
                        <td><input type="text" class="form-control" name="b_date" value="<?php echo $row['b_date']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter First Name</td>
                        <td><input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter Last Name</td>
                        <td><input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter your Email</td>
                        <td><input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter your contact Number</td>
                        <td><input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class='text-center'>
                                <button type="submit" class='btn btn-info' name="update">Update</button>
                                <button type="reset" class='btn btn-danger'>Reset</button>
                            </div>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</body>

</html>
