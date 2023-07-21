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
    <h3>Account Info (View, Edit, Delete)</h3>
    <table class="table table-bordered">
        <tr>
            <th>Account_id</th>
            <th>Customer_id</th>
            <th>Account_type</th>
            <th>SSN</th>
            <th>Initial_deposit</th>
        </tr>


        <?php
        require('config.php');

        $SSN=$_GET['SSN'];

        $LOG_PATH = "C:\wamp64\www\PhD_Dissertation_Project\View_Account_Info\LOG";

        $myfile = fopen($LOG_PATH."/log.txt", "w") or die("Unable to open log.txt");
        //$myfile = fopen($LOG_PATH."/log.txt", "a") or die("Unable to open log.txt");

        fwrite($myfile, "index.php\n");

        fwrite($myfile, "SSN = $SSN\n");

        $sql = "SELECT Account_id,Customer_id,Account_type,SSN,Initial_deposit FROM Account where SSN='".$SSN."'";

        fwrite($myfile, "sql = $sql\n");

        $users = $mysqli->query($sql);


        while($user = $users->fetch_assoc()){
        ?>
            <tr>
                <td><a href="" class="update" data-name="Account_id" data-type="text" data-pk="<?php echo $user['Account_id'] ?>" data-title="Edit Account_id"><?php echo $user['Account_id'] ?></a></td>
                <td><a href="" class="update" data-name="Customer_id" data-type="text" data-pk="<?php echo $user['Account_id'] ?>" data-title="Edit Customer_id"><?php echo $user['Customer_id'] ?></a></td>
                <td><a href="" class="update" data-name="Account_type" data-type="text" data-pk="<?php echo $user['Account_id'] ?>" data-title="Edit Account_type"><?php echo $user['Account_type'] ?></a></td>
                <td><a href="" class="update" data-name="SSN" data-type="text" data-pk="<?php echo $user['Account_id'] ?>" data-title="Edit SSN"><?php echo $user['SSN'] ?></a></td>
                <td><a href="" class="update" data-name="Initial_deposit" data-type="text" data-pk="<?php echo $user['Account_id'] ?>" data-title="Edit Initial_deposit"><?php echo $user['Initial_deposit'] ?></a></td>
                <td><a href="delete.php?Customer_id_and_SSN=<?php echo $user['Account_id'].",".$SSN; ?>">Delete</a></td>
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