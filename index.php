<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
            
    </style>
</head>
<body>
    <div class=" navbar container-lg  bg-warning mt-3 my-4 shadow-lg">
        <h2 class=" fw-italic mx-4 t  " >Customers Details</h2>
        <form  method="GET" name="search" class='text-end '>
        <input type="text" name="search" placeholder="search">
        <button><i class="bi bi-search"></i></button>

        </form>
    </div>

    <div class="container-lg">
    <table class="table table-borderd">
        <thead>
           <tr>
           <th>Account_number</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>phone</th>
            <th>Email</th>
            <th>Address</th>
           </tr>
       
        <tbody>
            <?php
            include("connection.php");
            if(isset($_GET['search']));
            $getcustomer =$_GET['search'];
            $retrive ="SELECT *FROM  customers WHERE CONCAT(first_name ,last_name) LIKE '%$getcustomer%'";
            $run =mysqli_query($connect,$retrive);
            if(mysqli_num_rows($run) > 0){
                foreach($run as $customer){?>
                    <tr>
                    <td><?php echo $customer['account_no'] ?></td>
                    <td><?php echo $customer['first_name']; ?></td>
                    <td><?php echo $customer['last_name']; ?></td>
                    <td><?php echo $customer['email']; ?></td>
                    <td><?php echo $customer['phone']; ?></td>
                    <td><?php echo $customer['address']; ?></td>
                </tr>
                <?php }

            }else{?>
            <tbody>
                <tr>
                    <td colspan='5'>Customer does not exist</td>
                </tr>
            </tbody>

           <?php }
              ?>
        </tbody>
        </thead>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

