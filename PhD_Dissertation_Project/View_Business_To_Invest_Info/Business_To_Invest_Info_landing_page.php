<form action="" method="post">
		<center><b><p style="color:blue;font-size:30px">Business To Invest Info</p></b></center>
    <table style="border:1px solid black;margin-left:auto;margin-right:auto;" border=1px border=solid border=black align="Center">
        <tr>
	    	<td><center><b><p style="color:blue;font-size:20px">Enter SSN to see Business To Invest Info</p></b></center></td>
        </tr>
        <tr>
		    <td>SSN:<input type="text" name="SSN" id="SSN"><br></td>
        </tr>
        <tr>
	    	<td><center><button type="submit" name="Business_To_Invest_Info">Submit</button></center></td>
        </tr>
    </table>
</form>
<?php

    if(isset($_POST['Business_To_Invest_Info']))
    {
        //echo $_POST['SSN']."<br>";

        $url = "http://localhost/PhD_Dissertation_Project/View_Business_To_Invest_Info/index.php?SSN=".$_POST['SSN'];

        header("refresh: 0; url = ".$url);
    }
?>
