<?php
  // Run ping and dump results to page
  $pingTarget = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
  $cmd = "ping.exe -n 2 {$pingTarget}";
  exec($cmd, $pingResults);
  //var_dump($pingResults);
  foreach ($pingResults as $line)
  {
    echo $line . " <br/>";
  }
?>
