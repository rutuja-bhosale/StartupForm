<?php

  include ("_dbconnect.php");

?>


  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> Your account is now created and you can login
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>

     <div class="container my-4">
        <h1 class="text-center">Startup Onboarding</h1>
     
        <form action="/startup/signup.php" method="post">
       
       
        <div class="form-group col-md-6">
        <label for="exampleInputCompanyName">Company_Name</label>
        <input type="name" class="form-control" id="exampleInputCompanyName" placeholder="Company_Name">
        </div>
       
        <div class="form-group col-md-6">
        <label for="exampleInputCategory">Category</label>
        <input type="text" class="form-control" id="exampleInputCategory" placeholder="Category">
        </div>

        <div class="form-group col-md-6">
        <label for="exampleInputRegistrationDate">Registration_Date</label>
        <input type="date" class="form-control" id="exampleInputRegistrationDate" placeholder="Registration_Date">
        </div>
      
       
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>

     </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

 <?php 



if(isset($_POST['SignUp']))
{
    if(!empty($_POST['Company_Name']) && !empty($_POST['Category']) && !empty($_POST['Registration_Date']) ){
  $Company_Name = $_POST['Company_Name'];
  $Category = $_POST['Category'];
  $Registration_Date = $_POST['Registration_Date'];

  $query = "insert into Startup(Company_Name,Category,Registration_Date) values('$Company_Name','$Category','$Registration_Date')";
  $data = mysqli_query($conn,$query) or die(mysqli_error());
  
  if($data)
  {
    echo "Data inserted into database";
  }
  else{
    echo "Data is not inserted in Database";
  }


}
}
?> 