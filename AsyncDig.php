<?php
  // Execute dig command and dump results to page
  $digOptions = "ANY";
  $digServer = "8.8.8.8";
  // $cmd = ".\bin\dig.exe " . $domainName . $digOptions;
  $cmd = ".\bin\dig.exe @{$digServer} {$domainName} {$digOptions}";
  exec($cmd, $digResults); // 2>&1
  // var_dump($digResults);
  foreach ($digResults as $line)
  {
    echo "{$line} <br/>";
  }
?>
