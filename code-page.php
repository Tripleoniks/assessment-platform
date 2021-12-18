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
        $(".cd-pass").keyup(function () {
          if (this.value.length == this.maxLength) {
            $(this).next(".cd-pass").focus();
          } else if (this.value.length < this.maxLength) {
            $(this).prev(".cd-pass").focus();
          }
        });
      });
    </script>
</head>

<body>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-6" id="home_img" style="background-image: url('images/home_img2.png');"></div>


          <div class="col-md-1"></div>
          <div class="col-md-4 text-center" id="login_area">
              <div id="logo"><img src="images/logo.png" class="img-fluid"></div>
                 <form action="test-page.php">
                   <label>Enter the code sent to your email</label>
                      
                      <div class="code-pass col-md-12 col-12">
                      <div class="row">
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required/>
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required />
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required />
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required>
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required>
                        <input type="password" class="cd-pass col-md-2 col-2 form-control" maxlength="1" required/>
                      </div>
                    </div>
         
               
                    <div class="text-center">
                       <input type="submit" value="Continue" class="btn btn2 btn-primary">
                    </div>
                       <a href="index.php" class="btn-bck">Back</a>
                </form>   
          </div>

          <div class="col-md-1"></div>

       </div>
  </div>
</body>

</html>