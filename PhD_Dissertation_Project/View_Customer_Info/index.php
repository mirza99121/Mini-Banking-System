<!DOCTYPE html>
<html>
<head>
    <title>Customer Info</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


</head>
<body>


<div class="container">
    <h3>Customer Info (View, Edit, Delete)</h3>
    <table class="table table-bordered">
        <tr>
            <th>Customer_id</th>
            <th>Customer_name</th>
            <th>SSN</th>
            <th>Gender</th>
            <th>Date_of_Birth</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>PIN</th>
            <th>Mobile_Number</th>
            <th>Email</th>
            <th>Password</th>
        </tr>


        <?php
        require('config.php');

        $SSN=$_GET['SSN'];

        $LOG_PATH = "C:\wamp64\www\PhD_Dissertation_Project\View_Customer_Info\LOG";

        $myfile = fopen($LOG_PATH."/log.txt", "w") or die("Unable to open log.txt");
        //$myfile = fopen($LOG_PATH."/log.txt", "a") or die("Unable to open log.txt");

        fwrite($myfile, "index.php\n");

        fwrite($myfile, "SSN = $SSN\n");

        $sql = "SELECT Customer_id,Customer_name,SSN,Gender,Date_of_Birth,Address,City,State,PIN,Mobile_Number,Email,Password FROM Customer where SSN='".$SSN."'";

        fwrite($myfile, "sql = $sql\n");

        $users = $mysqli->query($sql);


        while($user = $users->fetch_assoc()){
        ?>
            <tr>
                <td><a href="" class="update" data-name="Customer_id" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Customer_id"><?php echo $user['Customer_id'] ?></a></td>
                <td><a href="" class="update" data-name="Customer_name" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Customer_name"><?php echo $user['Customer_name'] ?></a></td>
                <td><a href="" class="update" data-name="SSN" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit SSN"><?php echo $user['SSN'] ?></a></td>
                <td><a href="" class="update" data-name="Gender" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Gender"><?php echo $user['Gender'] ?></a></td>
                <td><a href="" class="update" data-name="Date_of_Birth" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Date_of_Birth"><?php echo $user['Date_of_Birth'] ?></a></td>
                <td><a href="" class="update" data-name="Address" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Address"><?php echo $user['Address'] ?></a></td>
                <td><a href="" class="update" data-name="City" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit City"><?php echo $user['City'] ?></a></td>
                <td><a href="" class="update" data-name="State" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit State"><?php echo $user['State'] ?></a></td>
                <td><a href="" class="update" data-name="PIN" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit PIN"><?php echo $user['PIN'] ?></a></td>
                <td><a href="" class="update" data-name="Mobile_Number" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Mobile_Number"><?php echo $user['Mobile_Number'] ?></a></td>
                <td><a href="" class="update" data-name="Email" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Email"><?php echo $user['Email'] ?></a></td>
                <td><a href="" class="update" data-name="Password" data-type="text" data-pk="<?php echo $user['Customer_id'] ?>" data-title="Edit Password"><?php echo $user['Password'] ?></a></td>
                <td><a href="delete.php?Customer_id_and_SSN=<?php echo $user['Customer_id'].",".$SSN; ?>">Delete</a></td>
            </tr>
        <?php }
        ?>
    </table>
</div> <!-- container / end -->

</body>
<script type="text/javascript">
    $('.update').editable({
           url: 'update.php',
           type: 'text',
           pk: 1,
           name: 'Customer_name',
           title: 'Enter Customer_name'
    });
</script>
</html>