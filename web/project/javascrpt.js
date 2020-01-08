var total;
var taser = 35.99;
var lightbulb = 1.99;
var toaster = 10.99;
var computer = 352.99;

function getTotal() {
  var i;
  var x = document.getElementsByName("items");
  total = 0;
  var totalText = "Total with 8% tax: <strong>$";
  for (i = 0; i < x.length; i++) {
     if (x[i].childNodes[1].childNodes[0].checked == true) {
       total += (x[i].childNodes[1].childNodes[0].value * x[i].childNodes[7].childNodes[0].value);
     }
  }
  total += (total * .08);
  total = total.toFixed(2);
  totalText += total + "</strong>";
  document.getElementById("total1").innerHTML = totalText;
  document.getElementById("total").value = totalText;
  return totalText;
}

function total() {
  return total;
}