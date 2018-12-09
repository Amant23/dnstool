// https://www.w3schools.com/php/showphp.asp?filename=demo_ajax_php

// Get
// console.log($('#qName').val());
var dName = $('#dName').val();
var pingResult;

if (dName.length == 0)
{
  pingResult = "blank";
} else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          $('#digResult').html(this.responseText);
      }
  }
  xmlhttp.open("GET", "AsyncDig.php?name="+dName, true);
  xmlhttp.send();
}
