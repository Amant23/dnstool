<html>
<head>
  <meta charset="utf-8">
  <title>DNS TOOL</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

  <form method="GET" action="index.php" id="searchform">
    <div class="form-group">
      <div class="input-group">
        <input class="form-control danger" name="name" type="text" placeholder="Enter domain name..." required />
        <span class="input-group-btn">
          <button id="searchBtn" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search" aria-hidden="true" onclick="this.form.submit();"></i> Search</button>
        </span>
      </div>
    </div>
  </form>

  <div class="container">

    <?php
      // http://gph.is/Z0Pm99
      // include_once('functions.php');

      // Get domain name from the QueryString + Sanitize
      $domainName = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

      // Do not run if $_GET is empty or input from query string is empty
      // if (count($_GET) <= 0 || count($domainName) <= 0) { Die("No input specified."); }
      // if (count($_GET) > 64 || count($domainName) > 64) { Die("Input string too long"); }

      // Output the domain name to a hidden element to parse with JS
      echo "<input id='dName' name='dName' type='hidden' value='{$domainName}'/>";
    ?>

    <br/>

    <div id="pingResult">
      <div class="alert alert-info" role="alert">
        Pinging <i class="fa fa-spinner fa-spinner fa-spin"></i>
      </div>
    </div>

    <br/>

    <div id="digResult">
      <div class="alert alert-info" role="alert">
        Diggin <i class="fa fa-spinner fa-spin"></i>
        <!--<i class="fa fa-spinner fa-spin"></i>-->
      </div>
    </div>

    <br/>

    <div id="whoisResult">
      <div class="alert alert-info" role="alert">
        Whoin <i class="fa fa-spinner fa-spin"></i>
      </div>
    </div>
  </div>
</body>

<script src="AsyncPing.js"></script>
<script src="AsyncDig.js"></script>

</html>
