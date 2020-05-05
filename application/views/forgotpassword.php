<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="icon" href="<?php echo TAB_LOGO; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Handlee|Lato|Pacifico|Tangerine&display=swap');
        /* All Font-Family -------------------
            font-family: 'Pacifico', cursive;
            font-family: 'Tangerine', cursive;
            font-family: 'Handlee', cursive;
            font-family: 'Lato', sans-serif;
            ------------------------------- */
        body{
            background-color: #69c3d1;
        }
        .fpdiv{
            position: absolute;
            width: 30%;
            height: 55%;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background:rgba(255, 255, 255, 1);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2), 0 0.8rem 1.6rem rgba(0, 0, 0, 0.2), 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }
        .fpdiv::before{
            content: '';
            width: 100%;
            height: 100%;
            background: inherit;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            z-index: -1;
        }
        .companylogo img{
            width: 60% !important;
        }
        .fptitle h2{
            font-size: calc(2.2vw);
            color: #69c3d1;
            font-family: 'Lato', cursive;
            font-weight: bolder;
        }
        .fptitle h2::before,
        .fptitle h2::after {
            content: "";
            display: block;
            position: absolute;
            width: 20%;
            height: 1%;
            top: 25%;
            background: #69c3d1;
            border-radius: 0.2vmin;
        }
        .fptitle h2::before{
            left: 2%;
        }
        .fptitle h2::after{
            right: 2%;
        }
        .fptitle h6{
            margin-top: 3% !important;
            position: relative;
            justify-content: center;
            font-size: calc(1.15vw);
            color: rgba(0, 0, 0, 0.6);
            font-family: 'Lato', cursive;
            font-weight: 700;
        }
        .resetmail{
            border: none;
            outline: none !important;
            cursor:pointer;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .2), 0 0.4rem 0.8rem rgba(0, 0, 0, 0.2);
        }
        .resetmail::placeholder{
            font-family: 'Lato', cursive;
            font-weight: bolder;
            font-size: calc(1.3vw);
            text-align: center;
            color: rgba(0, 0, 0, 0.4);
        }
        .resetbtn{
            border: none;
            font-size: calc(1.5vw);
            font-family: 'Lato', cursive;
            font-weight: 700;
            background-color: rgba(105,195,209, 0.6);
            color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .2);
            transform-origin: bottom;
            transition: 0.5s ease-out;
        }
        .resetbtn:hover{
            color: rgb(255, 255, 255);
            background-color: rgba(105,195,209, 0.8);
        }
        .remPass h6{
            font-size: calc(1vw);
            color: rgba(0, 0, 0, 0.6);
            font-family: 'Lato', cursive;
            font-weight: 700;
        }
        .remPass h6 a{
            color: #69c3d1;
            font-size: calc(1.2vw);
            font-family: 'Lato', cursive;
            transition: 0.5s ease-out;
        }
        .remPass h6 a:hover{
            font-size: calc(1.4vw);
            text-decoration: none;
            color: #69c3d1;
        }
        .resetnotice{
            display: none;
            position: absolute;
            width: auto;
            top: 50%;
            left: 50%;
            font-size: 2vw;
            font-weight: bold;
            font-family: 'Tangerine', cursive;
            color: rgba(250, 250, 250, 0.8);
            transform: translate(-50%,-50%);
            background:rgba(255, 255, 255, 0.18);
            text-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2), 0 0.8rem 1.6rem rgba(0, 0, 0, 0.2), 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }
        .resetnotice span a{
            font-size: calc(1.5vw);
            font-family: 'Pacifico', cursive;
        }
        .resetnotice span a:hover{
            font-size: calc(1.8vw);
            color: rgba(80, 80, 255, .9);
        }

        /* ------ Media Queery for 2560px */
        @media screen and (min-width: 2560px){
            .fpdiv{
                height: 58%;
            }
            .fptitle{
                margin-top: 5% !important;
            }
            .fptitle h2::before,.fptitle h2::after{
                top: 28%;
            }
            .fptitle h6{
                margin-top: 3%;
            }
            .resetmail{
                padding: 5.5% !important;
                margin-top: 5% !important;
            }
            .resetbtn{
                margin: 5% auto !important;
                font-size: 1.5vw;
                padding: 2% !important;
            }

        }

       /* ------ Media Queery for 1440px */
        @media screen and (max-width: 1440px){
            .fpdiv{
                height: 60%;
            }
            .fptitle{
                margin-top: 3% !important;
            }
            .fptitle h2::before,.fptitle h2::after{
                top: 28%;
            }
            .fptitle h6{
                margin-top: 3%;
            }
            .resetmail{
                margin-top: 5% !important;
            }
        }

        /* ------ Media Queery for 1024px */
        @media screen and (max-width: 1024px){
            .fptitle{
                margin-top: 5% !important;
            }
            .fptitle h2{
                font-size: 3vw;
            }
            .fptitle h2::before,.fptitle h2::after{
                top: 24%;
                width: 10%;
            }

            .resetmail{
                margin-top: 8% !important;
            }
            .resetnotice{
                top:45%;
                left: 35%;
                transform: scale(2);
            }
        }

        /* ------ Media Queery for 768px */
        @media screen and (max-width: 768px){
            .fpdiv{
                width: 40%;
                height: 60%;
            }
            .companylogo img{
                width: 70% !important;
            }
            .fptitle{
                margin-top: 5% !important;
            }
            .fptitle h2{
                font-size: 3.2vw;
            }
            .fptitle h2::before,.fptitle h2::after{
                top: 24%;
                height: 0.5vw;
                width: 17%;
            }
            .fptitle h6{
                font-size: 1.8vw !important;
                margin: 5% auto !important;
            }
            .resetmail{
                padding: 0 !important;
                margin-top: 5% !important;
            }
            .resetmail::placeholder{
                font-size: 2.5vw;
            }
            .resetbtn{
                font-size: 2.5vw;
                padding: 2% !important;
            }
            .remPass h6{
                font-size: 2.2vw;
            }
            .remPass h6 a{
                margin-top: 10% !important;
                font-size: 2.5vw;
            }

        }

        /* ------ Media Queery for 425px */
         @media screen and (max-width: 426px){
            .fpdiv{
                width: 70%;
                height: 60%;
                justify-content: center;
            }
            .fptitle{
                margin-top: 5% !important;
            }
            .fptitle h2{
                font-size: 5.5vw;
            }
            .fptitle h2::before,.fptitle h2::after{
                width: 15%;
                height: 0.7vw;
                top: 24%;
            }
            .fptitle h6{
                width: 100%;
                font-size: 3.2vw !important;
                margin: 8% auto !important;
            }
            .resetmail{
                font-size: 1vw !important;
                padding: 7% !important;
                margin-top: 5% !important;
                margin-bottom: 10% !important;
            }
            .resetmail::placeholder{
                justify-content: center;
                font-size: 4vw;
            }
            .resetbtn{
                font-size: 4vw;
                padding: 3% !important;
                margin-bottom: 12% !important;
            }
            .remPass h6{
                font-size: 4vw;
            }
            .remPass h6 a{
                padding-top: 2% !important;
                font-size: 4.5vw;
            }
            .resetnotice{
                left: 29%;
            }
            .resetnotice span{
                font-size: 2.9vw;
            }
            .resetnotice span a{
                font-size: 2.8vw;
            }
         }

        /* ------ Media Queery for 375px */
        @media screen and (max-width: 376px){
            .fpdiv{
                width: 80%;
                height: 60%;
                justify-content: center;
            }
            .fptitle{
                margin-top: 6% !important;
            }
            .fptitle h2{
                font-size: 6vw;
            }
            .fptitle h2::before,.fptitle h2::after{
                height: 0.9vw;
                top: 24%;
                width: 18%;
            }
            .fptitle h6{
                font-size: 3.8vw !important;
                margin: 5% auto !important;
            }
            .resetmail{
                font-size: 5vw !important;
                margin-top: 5% !important;
                margin-bottom: 10% !important;
            }
            .resetmail::placeholder{
                font-size: 5.5vw;
                justify-content: center;
            }
            .resetbtn{
                font-size: 5.5vw;
                padding: 3% !important;
                margin-bottom: 12% !important;
            }
            .remPass h6{
                font-size: 4.4vw;
            }
            .remPass h6 a{
                font-size: 5vw;
            }
            .resetnotice{
                left: 32%;
                width: 45%;
            }
            .resetnotice span{
                font-size: 4vw;
            }
        }

    </style>
</head>
<body>
    <div class="row fpblock container">
        <div class="fpdiv col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center rounded-lg">
          <div class="companylogo mt-4">
              <img src="<?php echo COMPANY_NAME; ?>" alt="HenoyComb Pvt. Ltd." class="img-fluid" />
          </div>
            <div class="fptitle text-center mt-2 container">
                <h2>Forgot Password</h2>
                <h6>Don't worry! Resetting your password is easy. Just type in the email you registered to this system.</h6>
            </div>
            <div class="inputgroup text-center .container">
              <form  action="forgot_pass_process" method="post">
                <input name="femail" type="email" class="form-control d-block p-4 rounded my-4 resetmail" placeholder="Email Address" required>
                <button type="submit" class="btn btn-lg btn-block btn-info p-2 rounded mb-4 resetbtn" >Get Reset Link</button>
              </form>
            </div>
            <?php
            if(isset($smsg))
            {
              echo '<div class="row col-12 container resetnotice alert alert-info text-center">'.
        '<span>'.$smsg. '<br/> <a href="<?php echo base_url(); ?>index.php/login/forgotpassword">'."Click to go back".'</a></span>
    </div>';
            }

            else if(isset($fmsg))
            {
              echo '<div class="row col-12 container resetnotice alert alert-danger text-center">'.
        '<span>'.$fmsg. '<br/> <a href="<?php echo base_url(); ?>index.php/login/forgotpassword">'."Click to go Back".'</a></span>
    </div>';
            }
            else if(isset($efailed))
            {
              echo '<div class="row col-12 container resetnotice alert alert-danger text-center">'.
        '<span>'.$efailed. '<br/> <a href="<?php echo base_url(); ?>index.php/login/forgotpassword">'."Click to go Back".'</a></span>
    </div>';
            }
             ?>
            <div class="remPass mb-5">
                <h6>Did you remebered your password? <a href="<?php echo LOGIN_URL; ?>">Try logging in</a></h6>
            </div>
        </div>
    </div>



<!-- Bootstrap Script -->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>
</html>
