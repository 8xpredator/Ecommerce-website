
 <?php
	include 'header.php';
	?>
<!DOCTYPE html>
<html>

<head>
   

    <title>Credit Card Validation Demo</title>
    
   
</head>

<body>
    <div class="container-fluid">
        <header>
        </header>
        <div class="creditCardForm">
		<div class="row " style="margin-top: 50px">
    <div class="col-md-6 col-md-offset-3 form-container">
            <div class="heading"><center>
                <h1>Confirm Purchase</h1></center>
            </div>
            <div class="payment">
                <form>
                    <div class="form-group owner">
                        <label for="owner">Owner Name</label>
                        <input type="text" class="form-control" id="owner" size="10">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="dis/images/visa.jpg" id="visa">
                        <img src="dis/images/mastercard.jpg" id="mastercard">
                        <img src="dis/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                    </div>
                </form>
				<div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>conforming your payment!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry something went wrong.

        </div>
            </div>
        </div>

        
    </div>
	<?php
	include 'Footer.php';
	?>

    </body>
</html>


