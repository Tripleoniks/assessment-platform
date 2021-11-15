<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phillips Outsourcing Assessment</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <script src="dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="dist/">
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <link rel="icon" href="images/favicon.png" />
  <!-- <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" href="dist/css/animate.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery-3.6.0.min.js"></script>
    <script>
      $(function () {
        $(".questions").hide();
        $("#question1").show();

        $("#btn_next1").click(function () {
          $(".questions").hide();
          $("#question2").show(500);
        });

        $("#btn_prev2").click(function () {
          $(".questions").hide();
          $("#question1").show(500);
        });

        $("#btn_next2").click(function () {
          $(".questions").hide();
          $("#question3").show(500);
        });
        $("#btn_prev3").click(function () {
          $(".questions").hide();
          $("#question2").show(500);
        });
        $("#btn_next3").click(function () {
          $(".questions").hide();
          $("#question4").show(500);
        });
        $("#btn_prev4").click(function () {
          $(".questions").hide();
          $("#question3").show(500);
        });
        $("#btn_next4").click(function () {
          $(".questions").hide();
          $("#question5").show(500);
        });
        $("#btn_prev5").click(function () {
          $(".questions").hide();
          $("#question4").show(500);
        });
        $("#btn_next5").click(function () {
          $(".questions").hide();
          $(".text").show(500);
        });
        $(".btn-bck").click(function () {
          $(".questions").hide();
          $("#question5").show(500);
        });

        // My timer starts here
        let timer2 = "01:01";
        let interval = setInterval(function () {
          let timer = timer2.split(":");
          //by parsing integer, I avoid all extra string processing
          let minutes = parseInt(timer[0], 10);
          let seconds = parseInt(timer[1], 10);

          --seconds;

          minutes = seconds < 0 ? --minutes : minutes;
          if (minutes < 0) clearInterval(interval);
          seconds = seconds < 0 ? 59 : seconds;
          seconds = seconds < 10 ? "0" + seconds : seconds;
          //minutes = (minutes < 10) ?  minutes : minutes;
          $(".countdown").html("0" + minutes + ":" + seconds);
          timer2 = minutes + ":" + seconds;
        }, 1000);

        //my timer ends here

        //check timer and warn if time is less that an agreed time
        setInterval(function () {
          var wtime = $(".countdown").html();
          var wtime_split = wtime.split(":");
          var wseconds = wtime_split[1];

          if (wseconds == 20) {
            alert("You have 20 seconds remaining");

            $(".countdown").css("border-width", "3px");
            $(".countdown").css("border-color", "red");
            $(".countdown").css("color", "red");
            $(".countdown").css("border-style", "solid");
          }
          if (wseconds == 1) {
            alert("You test has ended. We will redirect you to the score page");
            window.location.href = "thanks-page.php";
          }
        }, 1000);
      });
    </script>
</head>

<style>
body{
    padding: 0px;
    margin: 0px;
    background-image: url('images/test_img.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    /* height: 150vh; */

}
  </style>

<body>
  <div class="container-fluid">
      <div class="row">
          
          <div class="col-md-2"></div>
          <div class="col-md-8 text-center " id="test_area">
             
         <div class="row">

         <div class="col-6"><img src="images/logo.png"  class="img-fluid logo" alt="" srcset=""></div>
         <div class="col-6">
           <div id="timer">
             <div class="countdown">01:00</div>
           </div>
         </div>

         </div>
         
          <div class="row">
                <div class="col-12">

              <!-- ------------------------------------------------------------- -->
    <form class="qtn">
                <div id="question1" data-ques="1" class="questions">
                <h3>
                      Question 1
                  </h3>
                  <p class="question">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua?
                  </p>
                  <div class="opt">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="A" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="B" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="C" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="D" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="E" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed </label>
                  </div>
                  </div>

                </div>
        </form>
        <div class='row btt'>
                            <div class="col-md-9"></div>
                            <div class="col-md-2 col-12">
                             <button class="btn btn-primary form-control">Next</button>
                            </div>
                    </div>

              </div>

          </div>
  </div>
  <div class="col-md-2"></div>
</div>
</div>
</body>

</html>