<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Balance Enquiry</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to for Balance Enquiry</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="Balance_Enquiry">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    if(isset($_POST['Balance_Enquiry']))
    {
        //echo $_POST['SSN']."<br>";

        $url = "http://localhost/PhD_Dissertation_Project/Balance_Enquiry/index.php?SSN=".$_POST['SSN'];

        header("refresh: 0; url = ".$url);
    }
?>
