<!DOCTYPE html>
<html>
<head>
    <title>Business To Invest Info</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


</head>
<body>


<div class="container">
    <h3>Money Invested in Business</h3>
    <table class="table table-bordered">
        <tr>
            <th>Row_id</th>
            <th>SSN</th>
            <th>Month</th>
            <th>Year</th>
            <th>Ammount_To_Invest</th>
            <th>Fixed_Monthly_Interest_Rate (%)</th>
        </tr>


        <?php
        require('config.php');

        $SSN=$_GET['SSN'];

        $LOG_PATH = "C:\wamp64\www\PhD_Dissertation_Project\View_Business_To_Invest_Info\LOG";

        $myfile = fopen($LOG_PATH."/log.txt", "w") or die("Unable to open log.txt");
        //$myfile = fopen($LOG_PATH."/log.txt", "a") or die("Unable to open log.txt");

        fwrite($myfile, "index.php\n");

        fwrite($myfile, "SSN = $SSN\n");

        $sql = "SELECT Row_id,SSN,Month,Year,Ammount_To_Invest,Fixed_Monthly_Interest_Rate FROM Business_To_Invest where SSN='".$SSN."'";

        fwrite($myfile, "sql = $sql\n");

        $users = $mysqli->query($sql);


        while($user = $users->fetch_assoc()){
        ?>
            <tr>
                <td><a href="" class="update" data-name="Row_id" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit Row_id"><?php echo $user['Row_id'] ?></a></td>
                <td><a href="" class="update" data-name="SSN" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit SSN"><?php echo $user['SSN'] ?></a></td>
                <td><a href="" class="update" data-name="Month" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit Month"><?php echo $user['Month'] ?></a></td>
                <td><a href="" class="update" data-name="Year" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit Customer_id"><?php echo $user['Year'] ?></a></td>
                <td><a href="" class="update" data-name="Ammount_To_Invest" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit Ammount_To_Invest"><?php echo $user['Ammount_To_Invest'] ?></a></td>
                <td><a href="" class="update" data-name="Fixed_Monthly_Interest_Rate" data-type="text" data-pk="<?php echo $user['Row_id'] ?>" data-title="Edit Fixed_Monthly_Interest_Rate"><?php echo $user['Fixed_Monthly_Interest_Rate'] ?></a></td>
            </tr>
        <?php }
        ?>
    </table>
</div> <!-- container / end -->

</body>
</html>