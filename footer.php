
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10) {
  dd='0'+dd
} 

if(mm<10) {
  mm='0'+mm
} 

today = dd+'/'+mm+'/'+yyyy;
document.getElementById("demonew").innerHTML = today;
var myVar=setInterval(function(){myTimer()},1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>

</body>
</html>