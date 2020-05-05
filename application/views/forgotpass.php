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
        body{
            background-color: #69c3d1;
        }
        .resetnotice{
            position: absolute;
            width: auto;
            top: 50%;
            left: 50%;
            font-size: 2vw;
            font-weight: bold;
            color: rgba(250, 250, 250, 0.8);
            transform: translate(-50%,-50%);
            background:rgba(255, 255, 255, 0.18);
            text-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2), 0 0.8rem 1.6rem rgba(0, 0, 0, 0.2), 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }
        .resetnotice img{
            width: 50% !important;
            padding-bottom: 2% !important;
        }
        .resetnotice span a{
            font-size: calc(1.5vw);
            transition: 0.5s ease-in-out;
        }
        .resetnotice span a:hover{
            font-size: calc(1.8vw);
            text-decoration: none;
            color: rgba(80, 80, 255, .9);
        }

        /* Media Query For Screen Size 1024px */
        @media screen and (max-width:1024px){
            .resetnotice{
                width: auto;
            }
        }

        /* Media Query For Screen Size 768px */
        @media screen and (max-width:768px){
            .resetnotice{
                width: 60% !important;
            }
        }

        /* Media Query For Screen Size 425px */
        @media screen and (max-width:426px){
            .resetnotice{
                width: 90% !important;
                left: 55% !important;
            }
            .resetnotice span{
                font-size: 3vw;
            }
            .resetnotice span a{
                font-size: 2.8vw;
            }
        }

         /* Media Query For Screen Size 375px */
        @media screen and (max-width:376px){
            .resetnotice span{
                font-size: 4vw;
            }
        }
    </style>
</head>
<body>
    <div class="container">
            <?php
            if(isset($smsg))
            {
              echo '<div class="row col-12 container resetnotice alert alert-info text-center">'.'<img src="'.COMPANY_NAME.'" alt="Henoycomb Pvt. Ltd." class=" container img-fluid">'.
        '<span>'.$smsg. '<br/> <a href="forgotpassword">'."Click to go back".'</a></span>
    </div>';
            }

            else if(isset($fmsg))
            {
              echo '<div class="row col-12 container resetnotice alert alert-danger text-center">'.
        '<span>'.$fmsg. '<br/> <a href="forgotpassword">'."Click to go Back".'</a></span>
    </div>';
            }
            else if(isset($efailed))
            {
              echo '<div class="row col-12 container resetnotice alert alert-danger text-center">'.
        '<span>'.$efailed. '<br/> <a href="forgotpassword">'."Click to go Back".'</a></span>
    </div>';
            }
             ?>
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
