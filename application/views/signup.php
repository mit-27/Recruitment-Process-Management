<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo TAB_LOGO; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <link rel="stylesheet" href="<?php echo SIGN_LOGIN_ASSETS_PATH; ?>/css/signupstyle.css" />
    <title>Signup</title>
    <style media="screen">

    body{
      background-color: #E4F1F9;
    }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-8 slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!--Slide 1-->
                    <div class="carousel-item active" style="background:#7288E0; height: 100vh;">
                        <center>
                            <img src="<?php echo SIGN_LOGIN_ASSETS_PATH; ?>/Image/Image1.png" class="d-block img-fluid mt-5 rounded" alt="SliderImage1">
                        </center>
                        <div class="carousel-caption text-center mb-5">
                            <h1>Candidate Handling</h1>
                            <h4>Simple and smart way to handle all the candidate through this application.</h4>
                        </div>
                    </div>
                    <!--Slide 2-->
                    <div class="carousel-item" style="background:#F57E82; height: 100vh;">
                        <center>
                            <img src="<?php echo SIGN_LOGIN_ASSETS_PATH; ?>/Image/Image2.png" class="d-block img-fluid mt-5 rounded" alt="SliderImage2">
                        </center>
                        <div class="carousel-caption text-center mb-5">
                            <h1>Interview Scheduling</h1>
                            <h4>Easy to make a schedule of particular candidate using simple form.</h4>
                        </div>
                    </div>
                    <!--Slide 3-->
                    <div class="carousel-item p-0" style="background:#72DDE0; height: 100vh;">
                        <center><img src="<?php echo SIGN_LOGIN_ASSETS_PATH; ?>/Image/Image3.png" class="d-block img-fluid mt-5 rounded" alt="SliderImage3">
                        </center>
                        <div class="carousel-caption text-center mb-5">
                            <h1>Calendar View</h1>
                            <h4>Get or update all candidate’s interview schedule in the form of calendar.</h4>
                        </div>
                    </div>
                    <!--Slide 4-->
                    <div class="carousel-item p-0" style="background:#E0A972; height: 100vh;">
                        <center>
                            <img src="<?php echo SIGN_LOGIN_ASSETS_PATH; ?>/Image/Image4.png" class="d-block img-fluid mt-5 rounded" alt="SliderImage4">
                        </center>
                        <div class="container">
                            <div class="carousel-caption text-center mb-5">
                                <h1>Select Recruiter</h1>
                                <h4>Admin has authorized to choose a recruiter for recruitment process.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="section1 col-md-4 w-100" style="background-color:#E4F1F9; height: 100vh;">
            <div class="imglogo container">
                <img class="clogo img-fluid mt-3" src="<?php echo COMPANY_LOGO; ?>" alt="HenoyComb Company Logo">
                <img class="cname img-fluid mt-4 w-50" src="<?php echo COMPANY_NAME; ?>" alt="HenoyComb Company Name">
            </div>



            <div class="greetings text-center container w-100 mt-5">
                 <h3>Good Morning! Hello, Member</h3>
                 <h4>Enter your personal details for joining with us</h4>
            </div>
              <?php
                if($this->session->flashdata('success_msg'))
                {
                  echo '<div class="container"><div class="alert alert-info" role="alert">'.$this->session->flashdata('success_msg').'</div></div>';
                }
                if($this->session->flashdata('emailusername'))
                {
                  echo '<div class="container"><div class="alert alert-danger container" role="alert">'.$this->session->flashdata('emailusername').'</div></div>';
                }
                if($this->session->flashdata('mail_failed_msg'))
                {
                  echo '<div class="container"><div class="alert alert-danger container" role="alert">'.$this->session->flashdata('mail_failed_msg').'</div></div>';
                }
                if($this->session->flashdata('rec_failed_msg'))
                {
                  echo '<div class="container"><div class="alert alert-danger container" role="alert">'.$this->session->flashdata('rec_failed_msg').'</div></div>';
                }
               ?>

            <div class="container">
                <form method="post" action="signupproc">
                    <div class="input-group text-center mt-2">
                        <div class="clearfix col-sm-12">
                            <input type="text" name="username" id="userid" class="form-control d-block p-4 rounded" placeholder="Username" required/><br />
                            <?php
                              if($this->session->flashdata('useralready'))
                              {
                                echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('useralready').'</div>';
                              }
                             ?>
                            <input type="email" name="useremail" id="usermail" class="form-control d-block p-4 rounded" placeholder="Email Address" required/><br/>
                            <?php
                              if($this->session->flashdata('emailalready'))
                              {
                                echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('emailalready').'</div>';
                              }
                             ?>
                            <input type="password" name="userpass" id="userpass" class="form-control d-block p-4 rounded" placeholder="Password" required/>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-info btn-block mt-3 rounded sbtn">SignUp</button>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="col-12 col-md-12">
                    <h3 class="decOR mt-4 mb-2"><span>or</span></h3>
                </div>
            </div>
            <div class="container">
                <button class="glbtn btn btn-md btn-danger col-12 col-md-12 mt-3 p-3 rounded-pill">
                    <i class="fab fa-google-plus-g"></i>
                    <a href="#" class="text-center text-right">SignUp With Google</a>
                </button>
            </div>
            <div class="container">
                <div class="loginSection mt-4 ">
                    <p class="pl-4">Already have an account?<a href="<?php echo LOGIN_URL; ?>" class="pl-2">Login Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

<script type="text/javascript">

    $(document).ready(function()
  {

    $("#userid").focusin(function()
  {
    console.log("click");
    $(this).attr('placeholder','');
  });

  $("#userid").focusout(function()
  {
   $(this).attr('placeholder','Username');
  });


  $("#usermail").focusin(function()
{
  console.log("click");
  $(this).attr('placeholder','');
});

$("#usermail").focusout(function()
{
 $(this).attr('placeholder','Email Address');
});



$("#userpass").focusin(function()
{
console.log("click");
$(this).attr('placeholder','');
});

$("#userpass").focusout(function()
{
$(this).attr('placeholder','Password');
});

  });



</script>




</body>
</html>
