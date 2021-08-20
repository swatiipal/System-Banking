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
            
            *{
	        margin: 0;
	        padding: 0;
	        font-family: 'RocknRoll One', sans-serif;
            
            }
  

            section{
	        padding: 1rem 2%;
            font-size: 2 rem;
            font-weight: 500;
            background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(images/history.jpg);
            color: #fff;
            /*background: rgb(240,240,240);*/
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

            /*  TABLE STARTS */
            table {
            font-family: RocknRoll One, sans-serif;
            border-collapse: collapse;
            width: 100%;
           
            }

            td, th {
            border: 1px solid #000;
            text-align: center;
            padding: 8px;
            color: #fff;
            }

            tr:nth-child() {
            background-color: #fff;
            }

            .row{
	        margin-top: 1%;
	        display: flex;
	        justify-content: space-between;
            }
            .table-col{
            margin-left: 1%;
            margin-right: 1%;
            display: flex;
            justify-content: space-between;
            }
            /* TABLE ENDS */
            .table .table-hover{
                color: #fff;
            }

	    </style>

        <title>Transaction History!</title>
    </head>
    <body>

<!-- NAVBAR STARTS -->

       
<!-- NAVBAR ENDS -->

<!-- TABLE STARTS -->   
<section>   
<h1><center>Transaction History</center></h1>
<div style="padding-bottom:20px;padding-left:20px">
        <a href="index.php" class="previous">&laquo;&laquo; BACK</a>
      </div>
      
        <table border=1 bgcolor="transparent" align="center"class="table table-hover" id="myTable">
            <thead>
                <tr scope="row" bgcolor="32a89e">
                    <th scope="table-col">Sr.No.</th>
                    <th scope="table-col">Sender's A/C</th>
                    <th scope="table-col">Receiver's A/C</th>
                    <th scope="table-col">Date of transaction</th>
                    <th scope="table-col">Transffered Amount</th>
                </tr>
            </thead>
            <tbody>   
                
                <?php
                    require 'database.php';

                    $sql8 = "Select * FROM transaction_history";
                    $result_check8= $conn->query($sql8);
                    $num8 = mysqli_num_rows($result_check8);
                    $sr = 1;
                    for($i=1;$i<=$num8;$i++){
                        $num9 = mysqli_fetch_assoc($result_check8);
                        $id = $num9['id'];
                        $from_account = $num9['from_account'];
                        $to_account = $num9['to_account'];
                        $date = $num9['date'];
                        $balance = $num9['transfer_amount'];
                        echo "<tr>
                                <td>$sr</td>
                                <td>$from_account</td>
                                <td>$to_account</td>
                                <td>$date</td>
                                <td>&#x20b9 $balance</td>
                            </tr>";
                            $sr=$sr+1;
                    }
                ?>
                
            </tbody>
        </table>
        
        <!--&#x20b9-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            } );
        </script>
    </section>
    </body>
</html>
        