<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- Themify icons -->
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <!-- Progress Bar -->
    <link rel="stylesheet" href="css/plugin.css">
    
    <title>Test</title>
    <link rel="shortcut icon" href="https://img.icons8.com/color/48/000000/bug.png">
</head>
<body>

@include('menu')

<footer id="style6">
        <!-- footer navbar-->
        <div class="container-fluid bg-grey">
        <ul class="nav-bar">
            <li class="nav-items">
                <a class="abc" href="">Home</a>
            </li>
            <li class="nav-items">
                <a class="abc" href="">About</a>
            </li>
            <li class="nav-items">
                <a class="abc" href="">Privacy policy</a>
            </li>
            <li class="nav-items">
                <a class="abc" href="">Terms & condition</a>
            </li>
            <li class="nav-items">
                <a class="abc" href="">Site map</a>
            </li>
            <li class="nav-items">
                <a class="abc" href="">Contact us</a>
            </li>
            <p class="footer-p">@ 2015 Welcome Technologies Group. All rights reserved.</p>
        </ul>
        <ul class="margin-top">
          <!-- Social elements -->
         <li class="nav-item">
          <a href="#"><i class="facebook custom fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a href="#"><i class="twitter custom fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a href="#"><i class="play custom fa fa-play"></i></a>
        </li>
    
            <!-- end social elements -->
       </ul>
        </div>
        <!-- end footer navbar -->
</footer>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/plugin.js"></script>



    <!-- window on scroll -->
    <script>
        $(window).scroll(function(e) {

            // add/remove class to navbar when scrolling to hide/show
            var scroll = $(window).scrollTop();
            if (scroll >= 620) {
                $('.navbar').addClass("navbar-hide");
            } else {
                $('.navbar').removeClass("navbar-hide");
            }

        });
    </script>
    <!--  end window on scroll -->

    <!-- Progress Bar -->
    <script>
    $(document).ready(function(){
            $("#bar-1").circularProgress({
            line_width: 11,
            color: "#FE9507",
            starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
            percent: 0, // percent starts from
            percentage: true,
            // text: "More power behind every pixel"
        }).circularProgress('animate', 70, 3000);

        $("#bar-2").circularProgress({
            line_width: 11,
            color: "#FE9507",
            starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
            percent: 0, // percent starts from
            percentage: true,
            // text: "More power behind every pixel"
        }).circularProgress('animate', 80, 3000);

        $("#bar-3").circularProgress({
            line_width: 11,
            color: "#FE9507",
            starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
            percent: 0, // percent starts from
            percentage: true,
            // text: "More power behind every pixel"
        }).circularProgress('animate', 95, 3000);
    });
 </script>
    <!-- end Progress Bar -->

       

</body>
</html>