<?php
				$db_host ="31.220.58.64"; //"localhost";
				$db_user ="root2"; //"root";
				$db_pass ="root@vps"; //"administrator";
				$db_name ="mybook"; //"extensionchrome";
				
 				$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 				mysqli_set_charset($conn, "utf8");
 				if(mysqli_connect_errno())
 				{
				echo 'is not can not DB: '.mysqli_connect_error();
				}else{
          //echo 'Connected DB Mybook';
        }

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All myBook | ควาวทรงจำจะอยู่กับเราไปทุกที่</title>
        <link rel="shortcut icon" href="icon48.png" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        a.tip {
            /*border-bottom: 1px solid;*/
            text-decoration: none
        }
        a.tip:hover {
            cursor: help;
            position: relative
        }
        a.tip span {
            display: none
        }
        a.tip:hover span {
            border: #c0c0c0 1px solid;
            border-radius: 5px;
            padding: 5px 20px 5px 5px;
            display: block;
            z-index: 100;
            /*background: url(../images/status-info.png) #f0f0f0 no-repeat 100% 5%;*/
            background-color:#444;
            text-shadow: 0.5px 0.5px 0.5px black;
            left: 0px;
            margin: 10px;
            /*width: 250px;*/
            position: absolute;
            top: 10px;
            text-decoration: none
        }    a:link {
        text-decoration: none;
        
    }


        </style>
    </head>
    <body>
       
        
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a href="../" class="navbar-brand">myBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <a class="dropdown-item" href="../default/">Default</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../cerulean/">Cerulean</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../help/">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://blog.bootswatch.com">Blog</a>
            </li-->
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Solar <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="https://jsfiddle.net/bootswatch/mqoc3ah6/">Open in JSFiddle</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/solar/bootstrap.min.css">bootstrap.min.css</a>
                <a class="dropdown-item" href="../4/solar/bootstrap.css">bootstrap.css</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/solar/_variables.scss">_variables.scss</a>
                <a class="dropdown-item" href="../4/solar/_bootswatch.scss">_bootswatch.scss</a>
              </div>
            </li-->
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <!--li class="nav-item">
              <a class="nav-link" href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">EDIT PROFILE</a>
            </li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container" style="margin-top:80px;">


      <!-- php -->
      <?php
      //include('mybookOnline.php');
      $query = mysqli_query($conn, "SELECT * FROM book a,user b where a.idUser = b.id  ORDER BY a.idBook DESC");
    // $row=mysqli_fetch_array($query);
    //$query = mysqli_query($conn, "SELECT * FROM book a,user b,img c where a.idUser = b.id  and a.url=c.url and a.idUser='".$_GET['id']."' and b.name='".$_GET['name']."' ORDER BY a.idBook DESC");
   
     
      ?>
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <h3></h3>
          </div>
        </div>

        <div class="row">
        <?php while($result=mysqli_fetch_array($query)) {?>
          <div class="col-lg-3">
              <div class="card bg-warning mb-3">
              <a href="<?php echo $result['url'];?>" target="_blank" class="card-text tip">
              <? 
              $imgUrl = $result['url'];
              $queryImg = mysqli_query($conn, "SELECT * FROM img WHERE url='$imgUrl'");
              $img=mysqli_fetch_array($queryImg);
                if (!$img) {
                  echo '<img src="https://cdn3.iconfinder.com/data/icons/school-solid-icons-vol-1/96/003-512.png" style="border:none;display:block;border-radius: 2px 2px 0px 0px;" width="100%" height="150px" alt="Card image"/>';
                }else{
                  echo '<img src="data:image/png;base64,'.base64_encode( $img['imgfile'] ).'" style="border:none;display:block;border-radius: 2px 2px 0px 0px;" width="100%" height="150px" alt="Card image"/>';
                  
                }
              

              ?>
              <span><?php echo $result['title'];?></span>
              </a>
                <div class="card-body">
                  <p class="card-text" style="color:black;font-weight:bold;text-shadow: 0.5px 0.5px 0.5px black;"><?php $str = mb_substr($result['title'], 0, 22,'UTF-8');  echo $str."...";?></p>
                  <a href="<?php echo $result['url'];?>"  target="_blank" class="card-text tip" style="color:darkgray;display:block;text-shadow: 0.5px 0.5px 0.5px black;margin-top: -10px;"><?php $str = mb_substr($result['url'], 0, 25,'UTF-8');  echo $str."...";?><span><?php echo $result['url'];?></span></a>
                </div>
                <!--ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                </ul-->
                <!-- div class="card-body">
                  <a href="#" class="card-link"></a>
                  <a href="#" class="card-link">Another link</a>
                </div-->
                <div class="card-footer text-muted">
                <a style="" class="btn btn-dark btn-sm tip" data-toggle="modal" data-target="#qw_<?php echo $result['idBook'];?>">VIEW NOTE<span><?php echo $result['note'];?></span></a>
                
                <a href="deleteBook.php?submit=DEL&id_delete=<?php echo numhash($result['idBook']); ?>&id=<? echo $_GET['id']?>&name=<? echo $_GET['name']?>" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')" class="btn btn-dark btn-sm tip" style="float: right;"><i class="fab fa-bitbucket" ></i><span>DELETE</span></a>
                </div>
              </div>
          </div>
                <!-- Modal -->
                <div class="modal fade" id="qw_<?php echo $result['idBook'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $result['title'];?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <? echo '<img src="data:image/png;base64,'.base64_encode( $result['imgfile'] ).'" style="border:none;display:block;border-radius: 2px 2px 2px 2px;" width="100%" height="300px" alt="Card image"/>';?>
                      <p id="resultNote" syle="margin-top:15px;margin-bottom:15px;">
                      <?php $note = $result['note'];
                        if ($note === ''){
                          echo 'ไม่มีข้อมูลที่โน๊ตไว้ค่ะ';
                        }else{echo $note ;}
                      ?>
                      </p>
                      <div id="ed" style="display:none;">
                      <textarea name="editor1" id="editor1"></textarea>
                      </div>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-warning" id="edit" onclick="edit();">EDIT NOTE</button>
                        <!-- button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button -->
                        <a href="<?php echo $result['url'];?>" target="_blank" class="btn btn-primary">GOTO WEBSITE</a>
                      </div>
                    </div>
                  </div>
              </div>
          <?php } ?>
        </div>               
      </div>


      <footer id="footer" style="margin-top:30px;">
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="float-lg-right"><a href="#top">Back to top</a></li>

              <!--li><a href="../help/#donate">Donate</a> | <a href="http://">Test</a> </li-->
            </ul>
            <p>Made by <a href="https://www.facebook.com/toptalant">RAWAT BOONCHOO</a>.</p>
            <!--http://thomaspark.co-->
            <!--p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT License</a>.</p>
            <p>Based on <a href="https://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fontawesome.io/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p -->

          </div>
        </div>

      </footer>


    </div>
<script>
function edit() {
  var save = document.getElementById('edit').innerHTML;
  var txt = document.getElementById('editor1').value;
  if (save === 'SAVE'){
    if (txt === ''){
      alert('is null');
    }else{
      alert('can not save edit note!');
    }
  }else{
    document.getElementById('ed').style.display='block';
    document.getElementById('edit').innerHTML='SAVE';
  }
}
</script>
        <!-- jQuery -->
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="//cdn.ckeditor.com/4.9.1/basic/ckeditor.js"></script>
        <script>
          CKEDITOR.replace( 'editor1' );
        </script>
    </body>
</html>


