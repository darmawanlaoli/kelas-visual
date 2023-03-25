<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kelas Visual - Coming Soon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/images/logo/icon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
    <style>
        .logo {
            width: 350px;
        }

        .logo2 {
            width: 300px;
        }
    </style>
</head>

<body>


    <div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
        @if ($message = Session::get('success'))
        <div class="alert alert-light alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <img class="logo l1-txt2" src="assets/images/logo/kelasvisuallogo.png" alt="">
        <div class="flex-col-c p-t-10 p-b-50">
            <h3 class="l1-txt1 txt-center p-b-10">
                Coming Soon
            </h3>

            <div class="flex-w flex-c cd100 p-b-82 p-t-30">
                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9" id="hari"></span>
                    <span class="s1-txt1">Days</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9" id="jam"></span>
                    <span class="s1-txt1">Hours</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9" id="menit"></span>
                    <span class="s1-txt1">Minutes</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9" id="detik"></span>
                    <span class="s1-txt1">Seconds</span>
                </div>
            </div>

            <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                Follow us for update now!
            </button>
        </div>


        <span class="s1-txt3 txt-center">
            @ 2023 kelasvisual.com by <a href="https://www.linkedin.com/in/darmawan-laoli" class="text-white">Darmawan Laoli</a></span>

    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="modal-subscribe where1-parent bg0 bor2 size4 p-t-54 p-b-100 p-l-15 p-r-15">
                <button class="btn-close-modal how-btn2 fs-26 where1 trans-04">
                    <i class="zmdi zmdi-close"></i>
                </button>

                <div class="wsize1 m-lr-auto">


                    <p class="m1-txt2 txt-center p-b-40">
                        <img class="logo2 l1-txt2" src="assets/images/logo/kelasvisuallogowarna.png" alt="">
                        Subscribe us for update now!
                    </p>

                    <form class="contact100-form validate-form" action="{{ route('store') }}" method="POST">

                        @csrf

                        <div class="wrap-input100 m-b-10 validate-input" data-validate="Name is required">
                            <input class="s1-txt4 placeholder0 input100" type="text" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 m-b-20 validate-input" data-validate="Email is required: ex@abc.xyz">
                            <input class="s1-txt4 placeholder0 input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="w-full">
                            <button type="submit" class="flex-c-m s1-txt2 size5 how-btn1 trans-04">
                                Get Updates
                            </button>
                        </div>
                    </form>

                    <p class="s1-txt5 txt-center wsize2 m-lr-auto p-t-20">
                        And don’t worry, we hate spam too! You can unsubcribe at anytime.
                    </p>
                </div>
            </div>

        </div>
    </div>



    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 1, 2023 24:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            // document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            //     minutes + "m " + seconds + "s ";
            document.getElementById("hari").innerHTML = days;
            document.getElementById("jam").innerHTML = hours;
            document.getElementById("menit").innerHTML = minutes;
            document.getElementById("detik").innerHTML = seconds;

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("hari").innerHTML = "E";
                document.getElementById("jam").innerHTML = "X";
                document.getElementById("menit").innerHTML = "P";
                document.getElementById("detik").innerHTML = "I";
            }
        }, 1000);
    </script>
    <!--===============================================================================================-->
    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="assets/js/main.js"></script>

</body>

</html>