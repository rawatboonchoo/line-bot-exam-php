<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        
        <?php
        $status = $_GET['status']
        ?>
        <input type="hidden" class="form-control" id="txtStatus" placeholder="" value="<?php echo $status;?>">
        
        <input type="hidden" class="form-control" id="show" placeholder="" value="<?php echo $status;?>">
        
        <p id="demo"></p>

        
    <script>
    
    if (typeof(Storage) !== "undefined") {
           var status = document.getElementById('txtStatus').value;
           if (status == ""){}else{
            localStorage.setItem("status", status);
           }
            

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
