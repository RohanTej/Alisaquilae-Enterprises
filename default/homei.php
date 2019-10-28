<html>
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/md5.js"></script>
    <style>
      body {
        overflow-x: hidden;
      }
      
      h3, h2 {
        color: #FF8000;
      }

      .row {
        margin-top: 15px;
      }

      .well {
        /* background-color: #e8edf3; */
      }
      
      #time{
        font-size: 40px;
        color: #242323;
      }
    </style>
  </head>
  <!--This will be explained once here and it will be the same for all other pages - coupi.php, orderi.php, reporti.php, supporti.php-->
  <body>
    <!--Contains the various div's which make up the structure of the website -->
    <div class="container">
      <!--ROW 0 -->
      <!--Add this div to create a new row-->
      <div class="row">
        <!--Add this div to create columns in the structure. Keep in mind that you can add as many columns as you wish but they must all add up to 12-->
        <div class="col-sm-12">
          <!--Heading -->
          <h2>
            <b>Home</b>
          </h2>
        </div>
      </div>

      <!--ROW 1 -->
      <!--This adds another row to the structure-->
      <div class="row">
        <div class="col-sm-12">
          <!--"Well" adds style to the div like giving the div a visible boundary. -->
          <div class="well">
            <h3>Preview Info</h3>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </div>

      <!--ROW 2 -->
      <div class="row">
        <!--A good example of the column system. This coloumn is 7 wide and the next one is 5 wide. They both add up to 12-->
        <div class="col-sm-7">
          <div class="well">
            <h3>Time</h3>
            <?php echo "Today is " . date('l') . ", " . date('d-m-y')?> <br><br>
            <span id="time"></span>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="well">
            <h3>Preview Table</h3>
            <table class="table">
              <tr><td>Total products delivered:</td><td>0</td></tr>
              <tr><td>Total earnings:</td><td>$0.00</td></tr>
              <tr><td>Total ordered products:</td><td>0</td></tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script>
      //Script to update the time in real time on the page.
      $(document).ready(function(){
        setInterval(function(){
          var dt = new Date();
          var time = "<b>" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() + "</b>";
          $('#time').html(time);
        },1000);        
      });
    </script>
  </body>
</html>