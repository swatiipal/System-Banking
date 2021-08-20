<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- DataTable CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
        <style>
        section{
	    min-height: 100vh;
	    width: 100%;
	    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/transact.jpg);
	    background-position: center;
	    background-size: cover;
	    position: relative;
        text-align: center;
        color: #fff;
        padding: 1rem 2%;
        font-family: RocknRoll One, sans-serif;
        }
        .payment-col{
	    flex-basis: 31%;
	    border-radius: 10px;
	    margin-bottom: 5%;
	    overflow: hidden;
        align: center;
        }

        form{
        font-family: RocknRoll One, sans-serif;
        border-collapse: collapse;
        width: 100%;
        align: center;
        }
        .div .h1{
           color: #03396c;
        }
        </style>

        <title>Money Transfer!</title>
    </head>
    <body>
    <section>
    <?php
            if(isset($_GET["balance"])){
                echo "<script> alert('Insufficient Balance!'); </script>";
            }
            if(isset($_GET["transfer"])){
                echo "<script> alert('Fund Transfered Successfully!'); </script>";
            }
            if(isset($_GET["transfer_failed"])){
                echo "<script>alert('Fund Transfered Failed!');</script>";
            }
            if(isset($_GET["same_account"])){
                echo "<script>alert('You choose same account number in both the table please try again');</script>";
            }
        ?>        

        <div style="padding-top:100px;padding-left:10px">
            <a href="index.php" class="btn btn-outline-success btn-lg"> <img src="images/back.png" style="width: 40px;"> Back</a>
        </div>
    <?php
            require 'database.php';

            $sql6 = "Select * FROM customer";
            $result_check6= $conn->query($sql6);
            $num6 = mysqli_num_rows($result_check6);
        ?>
        

        <form action="payment_action.php" method="post">
            <div class="row" style="padding-top:100px;">
                <h1><center>Money Transfer</center></h1>
                <h2></h2>
                <div class="col-sm-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">From</span>
                        <select class="form-select" aria-label="Default select example" name="fromaccount" >
                            <!-- <option selected></option> -->
                            <?php 
                                $sr = 1;
                                for($i=1;$i<=$num6;$i++){
                                    $num7 = mysqli_fetch_assoc($result_check6);
                                    $account_no = $num7['acc_no'];
                                    echo '<option value='.$account_no.'>'.$account_no.'</option>';
                                    $sr=$sr+1;
                                }
                            ?>
                        </select>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">To</span>
                        <select class="form-select" aria-label="Default select example" name="toaccount" >
                            <!-- <option selected></option> -->
                            <?php 
                                $sql7 = "Select * FROM customer";
                                $result_check7= $conn->query($sql7);
                                $num8 = mysqli_num_rows($result_check7);
                                $sr1 = 1;
                                for($i=1;$i<=$num8;$i++){
                                    $num9 = mysqli_fetch_assoc($result_check7);
                                    $account_no = $num9['acc_no'];
                                    echo '<option value='.$account_no.'>'.$account_no.'</option>';
                                    $sr1=$sr1+1;
                                }
                            ?>
                        </select>
                      
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group input-group-lg">
                        <input type="number" name="amount" placeholder="Enter amount" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>
                <div class="col-sm-4"> </div>
                <div class="col-sm-4 mt-4 d-flex justify-content-center">
                <i class="fas fa-paper-plane"></i>
                    <input type="submit" name="transferfund" class="btn btn-primary btn-lg" value="Transfer Funds">
                </div>
            </div>
        </form
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
