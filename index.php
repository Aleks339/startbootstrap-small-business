<?
$lang = $_COOKIE["lang"];
if (!$lang){
    $lang = "ru";
    setcookie("lang",$lang);
}
require "protected/data.php";
$l = $data[$lang];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#about">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#prices">Services and prices</a>
                    </li>
                    <li>
                        <a href="#contacts">Contact</a>
                    </li>
                </ul>
                <div class = "navbar navbar-right langs">
                    <a href = "lang.php?lang=ru"><img src = "img/russia_l.png"></a>
                    <a href = "lang.php?lang=en"><img src = "img/uk_l.png"></a>
                    <a href = "lang.php?lang=zh"><img src = "img/china_l.png"></a>
                </div>
            </div>
            <!-- /.navbar-collapse -->            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/mulana.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-8">
                <h1 id = "about" class = "anchor"><?= $l["top-header"] ?></h1>
                <ul>
                    <li><?= $l["native"] ?></li>
                    <li><?= $l["education"] ?></li>
                    <li><?= $l["expeirence"] ?></li>
                    <li><?= $l["english"] ?></li>
                    <li><?= $l["diction"] ?></li>
                    <li><?= $l["mindset"] ?></li>
                    <li><?= $l["journalism"] ?></li>
                    <li><?= $l["literature"] ?></li>                                  
              </ul>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

<div id ="prices" style = "padding-top:80px;" class = "anchor">
    <h2><?= $l["prices"] ?></h2>        
    <table class="table table-hover">
      <thead>
          <tr><td></td><td class = "group">В группе</td><td class = "only">Индивидуально</td></tr>  
      </thead>
      <tbody>
        <tr>        
          <td><?= $l["children"] ?></td>
          <td>&#8381; 300</td>
          <td>&#8381; 500</td>
        </tr>       
        <tr>
          <td ><?= $l["adults"] ?></td>
          <td>&#8381; 450</td>
          <td>&#8381; 700</td>
        </tr>    
        <tr>
          <td><?= $l["trki"] ?></td>
          <td>&#8381; 600</td>
          <td>&#8381; 1000</td>
        </tr>  
      </tbody>
    </table>
  </div>  
    <!-- /.container -->
    
    <div class = "container anchor" id = "contacts">
            <address>
                <form action = "action.php" method = "post"  class="form-horizontal">
                      <h3><?= $l["connect"] ?></h3>
                    <div class = "row">
                       <div class="form-group col-md-6">
                          <label for="name" class = "control-label col-sm-12"><b><?= $l["name"] ?></b></label>
                          <input type="text" class="form-control col-sm-12" id="name">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="age" class = "control-label col-sm-12"><b><?= $l["age"] ?></b></label>
                          <input type="text" class="form-control col-sm-12" id="age" name = "age">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="tel" class = "control-label col-sm-12"><b><?= $l["tel"] ?></b></label>
                          <input type="tel" class="form-control col-sm-12" id="tel">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email" class = "control-label col-sm-12"><b><?= $l["email"] ?></b></label>
                          <input type="email" class="form-control col-sm-12" id="email">
                      </div>                        
                      <div class="form-group col-md-6">
                         <b><?= $l["goal"] ?></b> <br>
                              <input type="checkbox" name="goal1" value="me"><?= $l["me"] ?><br>
                              <input type="checkbox" name="goal2" value="job"><?= $l["job"] ?><br>
                              <input type="checkbox" name="goal3" value="study"><?= $l["study"] ?><br>
                              <input type="checkbox" name="goal4" value="travel"><?= $l["travel"] ?><br>
                              <input type="checkbox" name="goal6" value="trki"><?= $l["exam"] ?><br>
                              <input type="checkbox" name="goal7" value="lover"><?= $l["lover"] ?><br>
                              <input type="checkbox" name="goal8" value="other"><?= $l["other"] ?><br>
                      </div>
                      <div class="form-group col-md-6">
                          <b><?= $l["prev"] ?></b><br>
                              <input type="checkbox" name="prev1" value="no"><?= $l["no"] ?><br>
                              <input type="checkbox" name="prev2" value="me"><?= $l["myself"] ?><br>
                              <input type="checkbox" name="prev3" value="privTeach"><?= $l["privTeach"] ?><br>
                              <input type="checkbox" name="prev4" value="courses"><?= $l["courses"] ?><br>
                              <input type="checkbox" name="prev5" value="school"><?= $l["school"] ?><br>
                              <input type="checkbox" name="prev6" value="uni"><?= $l["uni"] ?><br>
                              <input type="checkbox" name="prev7" value="russia"><?= $l["russia"] ?><br>
                              <input type="checkbox" name="prev8" value="family"><?= $l["writing"] ?><br>
                              <input type="checkbox" name="prev9" value="other"><?= $l["other"] ?><br>
                      </div>
                      <div class="form-group col-md-6">
                          <b><?= $l["problems"] ?></b><br>
                              <input type="checkbox" name="problems1" value="no"><?= $l["nothing"] ?><br>
                              <input type="checkbox" name="problems2" value="writing"><?= $l["writing"] ?><br>
                              <input type="checkbox" name="problems3" value="pronunciation"><?= $l["pronunciation"] ?><br>
                              <input type="checkbox" name="problems4" value="speaking"><?= $l["speaking"] ?><br>
                              <input type="checkbox" name="problems5" value="grammar"><?= $l["grammar"] ?><br>
                              <input type="checkbox" name="problems6" value="reading"><?= $l["reading"] ?><br>
                              <input type="checkbox" name="problems7" value="listening"><?= $l["listening"] ?><br>
                              <input type="checkbox" name="problems8" value="culture"><?= $l["culture"] ?><br>
                      </div>
                      <div class="form-group col-md-6">
                         <b><?= $l["study-form"] ?></b> <br>
                              <input type="checkbox" name="howmanypeople1" value="group"><?= $l["group"] ?><br>
                              <input type="checkbox" name="howmanypeople2" value="personally"><?= $l["only"] ?><br>
                          <br>
                            <button type="submit" class="btn btn-primary btn-lg" id = "send-btn"><?= $l["send-btn"] ?></button>
                          <div id = "message"></div>
                          </div>
                      </div>
                </form>
            </address>  
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-inverse">      
               
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Mulana</p>
        </div>
        <!-- /.container -->
    </footer> 
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        
    <script type="text/javascript">
      $(document).ready(function(){
        $("#send-btn").click(function(){
          $("#message").hide();
          if (!validate()){
            $("#message").show();
            return false;
          }
          return false;
        });
        var validate = function(){
          if ($("#name").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваше имя');
            return false;
          }
          if ($("#age").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш возраст');
            return false;
          }
          if ($("#tel").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш телефон');
            return false;
          }          
          if ($("#email").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш email');
            return false;
          }
          if (!isValidEmailAddress($("#email").val())){
            $("#message").text('Укажите, пожалуйста, корректный почтовый адрес');
            return false;
          }  
          if (!isValidTelNum($("#tel").val())){
            $("#message").text('Укажите, пожалуйста, корректный телефонный номер');
            return false;
          }
          return true;
        }
        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }
        function isValidTelNum(TelNum) {
            var phone_pattern = new RegExp (/([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/); 
            return phone_pattern.test(TelNum);
        }
      $('input[name="age"]').keyup(function(e){
          if (/\D/g.test(this.value)){
            this.value = this.value.replace(/\D/g, '');
          }
        });  
        
      })
    </script>
</body>

</html>
