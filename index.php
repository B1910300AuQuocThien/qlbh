<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Sweetheart</title>   
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/rep.css">
    <style>
     
</style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<button id="myButon" title="Go to top"><i class="fa-sharp fa-solid fa-arrow-up"></i></button>
     <div id="main-content" class=" wrap">
           <?php 
           session_start();
           include('ad_mysqli/connect/config.php');      
           include("pages/topbar.php");
           include("pages/main.php");
           include("pages/footer.php");    
           ?>      
             

           
       </div>
       <!-- JavaScript Bundle with Popper -->
         <script type="text/javascript"src="js/js.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>    