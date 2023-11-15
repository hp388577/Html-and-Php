<?php

$server="localhost";
$username="root";
$pass="";
$dbname="test";


$conn=mysqli_connect($server,$username,$pass,$dbname);

if(!$conn){
    echo "Error";
}
$sql="select * from users";

$data=mysqli_query($conn,$sql);





?>
<!doctype html>
<html lang="en">

<head>
  <title>Usercontrol</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

<?php
if(mysqli_num_rows($data)>0){
  ?>
<div class="container d-flex justify-content-center mt-5 table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            while($row=mysqli_fetch_assoc($data)){

                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["password"]."</td>
                <td><a name='' id='' class='btn btn-warning' href='' role='button'>Edit</a>
                    <a name='' id='' class='btn btn-danger' href='' role='button'>Delete</a></td>


                

            </tr>";

    }
?>
        </tbody>
  </table>
    
</div>
<div class="container d-flex justify-content-center mt-5">
      
    <a href="index.html" target="_blank" rel="noopener noreferrer">Home</a>

  </div>


<?php
}
else{
  echo "<h1>No data found</h1>";
}
?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>