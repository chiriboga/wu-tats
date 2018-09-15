<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ('lib/database.php'); 
include ('lib/forms.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit Your Wutang Tatoo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    body{padding-top:75px;background:#eaeef2;}
    .navbar-brand{padding:5px 15px;line-height:36px;}
    .navbar-brand img{max-height:40px;display:inline-block;margin-right:10px;}
    .navbar-inverse .navbar-brand{color:#fecc2f;font-family: 'Fjalla One', sans-serif;text-transform:uppercase;}
    .nopadding {
      padding: 0 !important;
      margin: 0 !important;
    }
    form{
      margin-bottom:30px;
    }
    </style>
  </head>
  <body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://wutangclan.net/"><img src="http://wutangclan.net/wp-content/uploads/2017/12/Wu-Tang_Clan_logo_yellow-e1512270313950.png" alt="WuTang Latino" class="img-responsive pull-left"> WuTang Clan</a>
      </div>
      <div id="navbar" class="navbar-collapse navbar-right collapse"></div>
      <!--/.nav-collapse -->
    </div>
  </nav>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-12">
            <?php
            $wuart = new FormBuild();
            $wuart->get_info_sony();
            $wuart->closedb();			
            ?> 
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">              
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%;height:auto;" >
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(function() {
      $('.pop').on('click', function() {
          $('.imagepreview').attr('src', $(this).find('img').attr('src'));
          $('#imagemodal').modal('show');  
          return false; 
      });	
    });
    </script>
  </body>
</html>