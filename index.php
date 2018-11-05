<html>
<head>
  <meta charset="utf-8">
  <title>DNS TOOL</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="favicon.ico"/>
  <link rel="bookmark" href="favicon.ico"/>
</head>
<body>

  <form method="GET" action="index.php" id="searchform">
    <div class="form-group">
      <div class="input-group">
        <input class="form-control danger" name="name" type="text" placeholder="Enter domain name..." required/>
        <span class="input-group-btn">
          <button id="searchBtn" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search" aria-hidden="true" onclick="this.form.submit();"></i> Search</button>
        </span>
      </div>
    </div>
  </form>

  <br/>

  <?php
    // http://gph.is/Z0Pm99

    // Get domain name from the QueryString + Sanitize
    $qName = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

    // Run ping and dump results to page
    $cmd = "ping -n 2 {$qName}";
    exec($cmd, $pingResults);
    // var_dump($pingResults);
    foreach ($pingResults as $line)
    {
      echo $line . " <br/>";
    }

    // Execute dig command and dump results to page
    $digOptions = " ANY";
    $cmd = ".\bin\dig.exe " . $qName . $digOptions;
    exec($cmd, $digResults); // 2>&1
    // var_dump($digResults);
    foreach ($digResults as $line)
    {
      echo $line . " <br/>";
    }

  ?>


</body>
</html>
