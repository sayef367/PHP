<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>PHP Data handling</title>
</head>
<body>
    <?php require_once "process.php"; ?>
    
    <?php
        $mysqli = new mysqli("localhost", "root", "", "php_class") or die(mysqli_error($mysqli));
        $result = mysqli_query($mysqli,"SELECT * FROM data") or die($mysqli->error);
    ?>

    <?php echo $message; ?>
    
    <h1 class='text-center p-5'>PHP Insert Update Delete data in MySQL</h1>
    <div class="container mt-1">
        <table class="table table-borderless">
            <tbody>
                <form action="process.php" method="POST">
                    <tr>
                        <td>Enter Booking Date</td>
                        <td><input type="datetime-local" class="form-control" name="b_date" value="<?php echo $b_date; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter First Name</td>
                        <td><input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter Last Name</td>
                        <td><input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter your Email</td>
                        <td><input type="text" class="form-control" name="email" value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter your contact Number</td>
                        <td><input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class='text-center'>
                                <button type="submit" class='btn btn-primary' name="save">Save</button>
                                <button type="reset" class='btn btn-danger'>Reset</button>
                            </div>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

    <div class='container'>
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th>Booking Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['b_date']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td>
                        
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class='text-light'>Edit</a>
                        </button>
                        <a href="process.php?delete=<?php echo $row['id']; ?>"
                        class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>
</html>
