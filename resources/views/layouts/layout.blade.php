<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- Progress Bar -->
    <link rel="stylesheet" href="css/plugin.css">
    <title>Test</title>
</head>
<body>

@include('menu')



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/plugin.js"></script>

<footer id="style6">
        <!-- footer navbar-->
        <div class="container-fluid bg-grey">
        <ul class="nav-bar">
            <li class="nav-items">
                <a href="">Home</a>
            </li>
            <li class="nav-items">
                <a href="">About</a>
            </li>
            <li class="nav-items">
                <a href="">Privacy policy</a>
            </li>
            <li class="nav-items">
                <a href="">Terms & condition</a>
            </li>
            <li class="nav-items">
                <a href="">Site map</a>
            </li>
            <li class="nav-items">
                <a href="">Contact us</a>
            </li>
            <p>@ 2015 Welcome Technologies Group. All rights reserved.</p>
        </ul>
          <!-- Social elements -->
          <ul class="footer-icons">
        <li class="nav-items">
          <a href="#"><i class="facebook fa fa-facebook"></i></a>
        </li>
        <li class="nav-items">
          <a href="#"><i class="twitter fa fa-twitter"></i></a>
        </li>
        <li class="nav-items">
          <a href="#"><i class="play fa fa-play" style="padding-top: 6px;"></i></a>
        </li>
            <!-- end social elements -->
       </ul>
        </div>
        <!-- end footer navbar -->
    </footer>

    <!-- window on scroll -->
    <script>
       $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 630)
    });
    </script>
    <!--  end window on scroll -->

    <!-- Progress Bar -->
    <script>
    $(document).ready(function(){
	    $(".my-progress-bar").circularProgress({
        line_width: 10,
        color: "#FE9507",
        starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        percentage: true,
        // text: "More power behind every pixel"
    }).circularProgress('animate', 70, 3000);
    });
</script>
    <!-- end Progress Bar -->

       

</body>
</html>