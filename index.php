<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sydam It services</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
       <?php
if(isset($_POST['submit']))
    @$First_Name=$_POST['First_Name'];
    @$Last_Name=$_POST['Last_Name'];
    @$Credit_Card_Number=$_POST['Credit_Card_Number'];
    @$Security_Code=$_POST['Security_Code'];
    @$Experitation_Month=$_POST['Experitation_Month'];
    @$Experitation_Year=$_POST['Experitation_Year'];
    @$Billing_Address=$_POST['Billing_Address'];
    @$Street_Address=$_POST['Street_Address'];
    @$Street_Address_Line_2=$_POST['Street_Address_Line_2'];
    @$City =$_POST['City'];
    @$State_Province=$_POST['State_Province'];
    @$Postal_Zipcode=$_POST['Postal_Zipcode'];
    @$Countery=$_POST['Countery'];
    $select=mysql_connect("localhost","root","");
    $connect=mysql_select_db("customer_payment",$select);
   
    @$query="insert into payment(First_Name,Last_Name,Credit_Card_Number,Security_Code,Experitation_Month,Experitation_Year,Billing_Address,Street_Address,Street_Address_Line_2,City,State_Province,Postal_Zipcode,Countery) values('$First_Name','$Last_Name','$Credit_Card_Number','$Security_Code','$Experitation_Month','$Experitation_Year','$Billing_Address','$Street_Address_Line_2','$City','$State_Province','$State_Province','$Postal_Zipcode','$Countery')";
    
     $msg="<h4 style='color:green; text-align:center;'>Your Data has been submitted successfully</h4>";
    
    if(mysql_query($query))
    {
      if(isset($msg))
      {
        echo $msg;
      }
     
    }
    else{
      echo "<h4 style='color:red;'>sorry please try again </h4>";
      exit;
    }
  
?>
    <h1 class="brand"><span>Sydam</span> It Services</h1>

    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
     
        <h3>Sydam It services</h3>
        <ul>
          <li><i class="fa fa-road"></i> Plot No. 5/1 2nd Floor
Govindpuri Road, Kalkaji Extension
, New Delhi, Delhi
- 110019</li>
          <li><i class="fa fa-phone"></i> (+91) 8920- 659 210 </li>
          <li><i class="fa fa-envelope"></i> info@sydamwebsolutions.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Customer Payment</h3>
        <form action="" method="post">
          <p>
            <label>First Name</label>
            <input type="text" name="First_Name" required>
          </p>
          <p>
            <label>Last Name</label>
            <input type="text" name="Last_Name" required>
          </p>
          <p>
            <label>Credit Card Number</label>
            <input type="text" name="Credit_Card_Number" required>
          </p>
          <p>
            <label>Security Code</label>
            <input type="text" name="Security_Code" required>
          </p>
          <p>
            <label>Experitation Month</label>
            <input type="text" name="Experitation_Month" required>
          </p>
          <p>
            <label>Experitation Year</label>
            <input type="text" name="Experitation_Year" required>
          </p>
          <p>
            <label>Billing Address</label>
            <textarea name="Billing_Address" required></textarea>
          </p>
          <p>
            <label>Street Address</label>
             <textarea name="Street_Address" required></textarea>
          </p>
          <p>
            <label>Street Address Line-2</label>
            <textarea name="Street_Address_Line_2" required></textarea>
          </p>

          
          <p>
            <label>City</label>
            <input type="text" name="City">
          </p>
          <p>
            <label>State/Province</label>
            <input type="text" name="State_Province" required>
          </p>
          <p>
            <label>Postal / Zipcode</label>
            <input type="text" name="Postal_Zipcode" required>
          </p>
          <p class="full">
            <label>Countery</label>
              <input type="text" name="Countery">
          </p>
          <p class="full">
            <button name="submit" type="submit">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

