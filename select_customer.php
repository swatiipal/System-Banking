<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    <title>Customer_Details</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

<style>

*{
  padding:0;
  top:0;
  font-family: 'RocknRoll One', sans-serif;
         }
section{
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/customer.jpg);
  padding: 1rem 2%;
  font-size: 2 rem;
  font-weight: 500;
  color: #fff;
}
.div{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  color: #fff;
}
.dropdown{
  background: linear-gradient(-90deg, #d38312, #a83279);
  display: inline-block;
  border-radius:12px;
  color: #fff;
  font-size: 20px;
	margin: 3px;
	color: #fff!important;
	font-weight: 500;
}
.dropdown-menu{
  font-size: 16px;
	margin: 3px;
	color: #fff!important;
	font-weight: 500;
	background-image: linear-gradient(-90deg, #d38312, #a83279);
  border-radius:12px;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 10px 16px;
  border-radius: 12px;
}

a:hover {
  background-color: #ddd;
  color: black;
}
.previous {
  background-color: #32a89e;
  color: white;
  border: 1px #f44336;
}

.round {
  border-radius: 50%;
}

            td, th {
            border: 0px solid #fff;
            color:#fff;
            text-align: center;
            padding: 8px;
            }

</style>


</head>
  <body>
  <section>
    <h2><center>Select customer!</center></h2>
    <div style="padding-bottom:30px;padding-left:20px">
        <a href="index.php" class="previous">&laquo;&laquo; BACK</a>
    </div>
    <div class="dropdown">
          <button class="btn btn-outline dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
              <span class="d-none d-lg-inline">Please Select Account Holder Name</span>
          </button>
      
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <?php
                  require 'database.php';

                  $sql = "Select * FROM customer";
                  $result_check2= $conn->query($sql);
                  $num2 = mysqli_num_rows($result_check2);
                  for($i=1;$i<=$num2;$i++){
                      $num3 = mysqli_fetch_assoc($result_check2);
                      $name = $num3['name'];
                      echo "<li><a class='dropdown-item' href='select_customer.php?id=".$num3['id']."'>$name</a></li>";
                  }
              ?>
          </ul>
      </div> 
    </header>
      

      <?php
        require 'database.php';
        if(isset($_GET['id'])){
            $sql3 = "Select * from customer where id=".$_GET['id']."";
            $result_check3= $conn->query($sql3);
            $num4 = mysqli_fetch_assoc($result_check3);
            $id=$_GET['id'];
            $name=$num4["name"];
            $account_no=$num4["acc_no"];
            $IFSC=$num4["IFSC"];
            $age=$num4["age"];
            $gender=$num4["gender"];
            $doa_create = $num4["date"];
            $address=$num4["address"];
            $mobile_no=$num4["phone"];
            $email=$num4["email"];
            $balance=$num4["balance"];
          }
          ?>
<?php
          if(isset($_GET['id'])){
?>
<form class="row g-3 m-4" id="printCustomerDetail">
<center><h4>Customer Detail's</h4></center>
<table class="table table-striped mb-5" >
  <thead>
    <tr scope="row" bgcolor="32a89e">
      <th scope="col">Sr.no</th>
      <th scope="col">Parameters</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Account Holder Name</td>
      <td><?php echo $name ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Age</td>
      <td><?php echo $age ?></td>   
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Gender</td>
      <td><?php echo $gender ?></td>   
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mobile</td>
      <td><?php echo $mobile_no ?></td>   
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Email</td>
      <td><?php echo $email ?></td>   
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Address</td>
      <td><?php echo $address ?></td>   
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Account Number</td>
      <td><?php echo $account_no ?></td>   
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>IFSC</td>
      <td><?php echo $IFSC ?></td>   
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Amount</td>
      <td><?php echo $balance ?></td>   
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Date Of Account Created</td>
      <td><?php echo $doa_create ?></td>   
    </tr>
  </tbody>
</table>
<div class="input-group justify-content-center">
  <button class="btn btn-outline-success d-grid gap-2 col-4 mx-auto" type="button" onclick="printDiv('printCustomerDetail')" > Print</button>
</div>
</form>
<?php
          }
?>


<script>
        function printDiv(printCustomerDetail) {
            var printContents = document.getElementById("printCustomerDetail").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
          }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </section>
    
  </body>
</html>