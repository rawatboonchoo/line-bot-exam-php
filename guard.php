<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <?php
        $status = $_GET['status']
        ?>
        <input type="hidden" class="form-control" id="txtStatus" placeholder="" value="<?php echo $status;?>">
        
        <input type="hidden" class="form-control" id="show" placeholder="" value="<?php echo $status;?>">
        
        <p id="demo"></p>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <script>
        var obj = { status: localStorage.getItem("status")};
          var myJSON = JSON.stringify(obj);
         document.getElementById("demo").innerHTML = myJSON;
        
       if (typeof(Storage) !== "undefined") {
            // Store
            //localStorage.setItem("name", name);
            //localStorage.setItem("coin", coin);
           var status = document.getElementById('txtStatus').value;
            localStorage.setItem("status", status);
            // Retrieve
            //document.getElementById("result").innerHTML = localStorage.getItem("lastname");
            document.getElementById('show').value = localStorage.getItem("status");
           
           var obj1 = { status: localStorage.getItem("status")};
              var myJSON1 = JSON.stringify(obj1);
             document.getElementById("demo").innerHTML = myJSON1;

          
            } else {
            alert("Sorry, your browser does not support Web Storage...");
            }

        
    </script>
    </body>
</html>