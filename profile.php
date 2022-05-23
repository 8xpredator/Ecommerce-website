<?php
 session_start();
                $mail=$_SESSION['username'];
include('header.php');
include 'includes/config.php';
?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <img src="img.jpg" alt="John" style="width:100%">
  <?php
    $sql="select * from users where email='$email'";
    $sql1=  mysqli_query($con, $sql);
    while ($sql2=  mysqli_fetch_assoc($sql1))
    {
     
    
    ?>
	b><h3>Name:<?php echo $sql2['name'];?></h3><br>
 <b> <p class="title"><?php echo $sql2['shippingaddress'];?></p><br>
 
<b><p><?php echo $sql2['email'];?></p><br>

</div>

<!--
    <form action="" method="post">
     <table border="1">
    <tr>
        <th> Name </th><td><input type="text" name="name" value="<?php echo $sql2['name'];?>"></td></tr>
    <tr><th> Address </th>  <td><textarea name="adrs"><?php echo $sql2['shippingaddress'];?></textarea></td></tr>
    <tr><th> Phonenumber </th> <td><input type="text" name="phno" value="<?php echo $sql2['contactno'];?>"></td></tr>
    <tr><th> Email </th><td><input type="mail" name="mail" value="<?php echo $sql2['email'];?>"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td></tr>
    <?php
    }
    ?>
</table>
        </form>
<br><br><br><br><br><br>
    </div>
</div>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['shippingaddress'];
   // $no=$_POST['phno'];
    $email=$_POST['email'];
    
    $sql3="update users set name='$name',shippingaddress='$address',email='$email' where email='$email'";
    $sql4=  mysqli_query($con, $sql3);
     $sql5="update login set username='$email' where username='$email'";
    $sql6=  mysqli_query($con, $sql5);
    
     // $sql7="update cart set mail='$email' where mail='$mail'";
    //$sql8=  mysqli_query($con, $sql7);
     //$sql9="update userorder set mail='$email' where mail='$mail'";
   // $sql10=  mysqli_query($con, $sql9);
     //$sql1="update finalorder set mail='$email' where mail='$mail'";
    //$sql12=  mysqli_query($con, $sql11);
}
?>
<?php
include 'footer.php';
?>
</div>


