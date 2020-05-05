<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset New Password</title>
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
        background-color: rgb(105,195,209);
        }
        .rnPassdiv{
            position: absolute;
            width: 35%;
            height: 60% !important;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background:rgb(255, 255, 255);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2), 0 0.8rem 1.6rem rgba(0, 0, 0, 0.2), 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }
        .rnPassdiv::before{
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
        .rnPasstitle h2{
            font-size: calc(2.2vw);
            color: #69c3d1;
            font-family: 'Lato', cursive;
            font-weight: bolder;
        }
        .rnPasstitle h2::before,
        .rnPasstitle h2::after {
        content: "";
        display: block;
        position: absolute;
        width: 18%;
        height: 1%;
        top: 27% !important;
        background: #69c3d1;
        border-radius: 0.2vmin;
        }
        .rnPasstitle h2::before{
            left: 2%;
        }
        .rnPasstitle h2::after{
            right: 2%;
        }
        .rnPasstitle h6{
            margin-top: 2% !important;
            position: relative;
            justify-content: center;
            font-size: calc(1.2vw);
            color: rgba(0,0,0, 0.6);
            font-family: 'Lato', cursive;
            font-weight: 700;
        }
        .newEmail,.newPass,.newCPass{
            border: none;
            outline: none !important;
            cursor:pointer;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .2), 0 0.4rem 0.8rem rgba(0, 0, 0, 0.2);
        }
        .newEmail::placeholder,.newPass::placeholder,.newCPass::placeholder{
            font-family: 'Lato', cursive;
            font-weight: bolder;
            font-size: calc(1.5vw);
            text-align: center;
            color: rgba(0, 0, 0, 0.4);
        }
        .btnnext,.btncancel{
            width: 47%;
            border: none;
            position: absolute;
            font-family: 'Lato', cursive;
            font-weight: 700;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .2);
            transform-origin: bottom;
            transition: 0.5s ease-in-out;
        }
        .btnnext{
            left: 0;
            background-color: rgba(105,195,209, 1);
            color: rgba(255, 255, 255, 0.7);
        }
        .btnnext:disabled{
          background-color: rgba(105,195,209, 0.6);
        }
        .btncancel{
            right: 0;
            background-color: rgba(80, 80, 120, 0.6);
            color: rgb(250,205,205);
        }
        .btncancel:hover{
            background-color: rgba(80, 80, 120, 0.7);
        }

        /* ------ Media Queery for 2560px */
        @media screen and (max-width: 2560px){
            .rnPassdiv{
                height: 68% !important;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                top: 20% !important;
            }
            .newEmail,.newPass,.newCPass{
                padding: 6% !important;
                margin: 5% auto !important;
            }
            .btnnext,.btncancel{
                margin: 1% auto !important;
                font-size: 1.5vw;
                padding: 3% !important;
            }
            .btnnext{
                left: 2% !important;
            }
            .btncancel{
                right: 2% !important;
            }
        }

        /* ------ Media Queery for 1440px */
        @media screen and (max-width: 1440px){
            .rnPassdiv{
                height: 70% !important;
            }
            .rnPasstitle{
                margin-top: 5% !important;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                top: 25% !important;
            }
        }

        /* ------ Media Queery for 1024px */
        @media screen and (max-width: 1024px){
            .rnPassdiv{
                width: 40% !important;
                height: 65% !important;
            }
            .rnPasstitle{
                margin-top: 5% !important;
            }
            .rnPasstitle h2{
                font-size: 2.5vw;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                top: 25% !important;
                width: 18%;
            }
            .rnPasstitle h2::after{
                right: 1% !important;
            }
            .rnPasstitle h6{
                font-size: 1.5vw;
            }
        }

        /* ------ Media Queery for 768px */
        @media screen and (max-width: 768px){
            .rnPassdiv{
                width: 50% !important;
                height: 70% !important;
            }
            .rnPasstitle{
                margin-top: 5% !important;
            }
            .rnPasstitle h2{
                font-size: 4vw;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                height: 0.5vw !important;
                width: 10% !important;
                border-radius: 0.4vw;
            }
            .rnPasstitle h6{
                font-size: 2.5vw;
            }
            .newEmail,.newPass,.newCPass{
                padding: 7% !important;
                margin: 5% auto !important;
            }
            .newPass::placeholder,.newCPass::placeholder{
                font-size: 2.8vw;
            }
            .btnnext,.btncancel{
                margin: 3% auto !important;
                font-size: 2.8vw;
                padding: 3% !important;
            }
        }
        /* ------ Media Queery for 425px */
        @media screen and (max-width: 426px){
            .rnPassdiv{
                width: 80% !important;
                height: 60% !important;
            }
            .rnPasstitle h2{
                font-size: 6vw !important;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                width: 12% !important;
                height: 1vw !important;
                top: 25% !important;
            }
            .rnPasstitle h6{
                font-size: 3.5vw;
            }
            .newEmail::placeholder,.newPass::placeholder,.newCPass::placeholder{
                font-size: 5vw;
            }
            .btnnext,.btncancel{
                font-size: 5vw;
                padding: 2% !important;
            }
        }

        /* ------ Media Queery for 375px */
        @media screen and (max-width:376px){
            .rnPassdiv{
                width: 90% !important;
                height: 60% !important;
            }
            .rnPasstitle h2{
                font-size: 7vw !important;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                width: 10% !important;
                top: 25% !important;
            }
            .rnPasstitle h6{
                font-size: 4.2vw;
            }
        }

        /* ------ Media Queery for 320px */
        @media screen and (max-width:320px){
            .rnPassdiv{
                width: 90% !important;
                height: 55% !important;
            }
            .rnPasstitle h2{
                font-size: 7.5vw !important;
            }
            .rnPasstitle h2::before,
            .rnPasstitle h2::after{
                width: 9% !important;
                top: 24% !important;
            }
            .rnPasstitle h6{
                font-size: 4.5vw !important;
            }
        }
    </style>
</head>
<body>
    <div class="row rnPassblock container">
        <div class="rnPassdiv col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center rounded-lg">
            <div class="companylogo mt-4">
                <img src="<?php echo COMPANY_NAME; ?>" alt="HenoyComb Pvt. Ltd." class="img-fluid" />
            </div>
            <div class="rnPasstitle text-center mt-2 container">
                <h2>Reset your Password</h2>
                <h6>Now time to set new Password!</h6>
            </div>
            <form action="<?php echo LOGIN_URL; ?>/reset_password_process" method="post">
              <div class="inputgroup text-center container npInputs">
                <input type="email" name="semail" required class="form-control d-block p-4 rounded my-4 newEmail" value="<?php echo $semail; ?>" />
                  <input type="password" required class="form-control d-block p-2 rounded my-4 newPass" placeholder="New Password" name="newpassword" />
                  <input type="password" required class="form-control d-block p-2 rounded mb-4 newCPass" placeholder="Reenter Password"/>
              </div>
              <div class="row btnRpass container">
                  <button type="submit" class="btn btn-secondary btn-lg btn-info p-3 rounded mb-5 mx-2 btnnext col-6 col-md-6 col-sm-6" disabled>Set Password</button>
                  <button type="reset"  class="btn btn-primary btn-lg btn-info p-3 rounded mb-5 mx-2 btncancel col-6 col-md-6 col-sm-6">Cancel</button>
              </div>
            </form>

        </div>
    </div>
<!-- Script for Enable Button -->
<script>
    $(document).ready(function () {
        $('.newPass').on('input change', function () {
            if ($(this).val() != '') {
                $('.newCPass').on('input change', function () {
                    if ($(this).val() == $('.newPass').val()) {
                        $('.btnnext').prop('disabled', false);
                    }
                    else {
                        $('.btnnext').prop('disabled', true);
                        }
                    })
                }
        });
    });
</script>

<!-- Bootstrap Script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
