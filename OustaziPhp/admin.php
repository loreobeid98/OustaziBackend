<HTML>
<body>
	<?php
	session_start();
		
include 'bootstrap.php';
?>
<div class="row">
   <div class="col-sm-5">
 <img src="images/ouss.jpg">
</div>
<div class="col-sm-4"><h1>Admin</h1></div>
</div>
<div class="row">
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
<div class="container">
    <h1><p class="font-weight-light">Students List</p></h1>
   
	<form > 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select place</option>
    <option value="miniara">Minara </option>
    <option value="Tal Abbas">Tal Abbas</option>
    <option value="halba">Halba</option>
    <option value="berkayel">Berkayel</option>
  </select>
</form>
<br>
<div id="txtHint">User info will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getStudents.php?q="+str, true);
  xhttp.send();
}
</script>
</div></div></div></div>
 <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
<div class="container">
    <h1><p class="font-weight-light">Teachers List</p></h1>
       <script>
function showHint(str)
{
  if (str.length==0)  { 
    document.getElementById("txtHint2").innerHTML="";
    return;
  }
  xmlhttp=new XMLHttpRequest(); 
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
      document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getTeachers.php?q2="+str,true);
  xmlhttp.send();
}
</script>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <div id="txtHint2"> </div></p>
      </div>
    </div>
</div>
  </div></div>
<H1 align='center'> List of Users  </H1>
<TABLE border='3' width=100%  class="table table-borderless table-dark">
	<thread> 


<TR>
	<TH>ID</TH><TH>Firstname</TH>
	<TH>lastname</TH><TH>email</TH>
	<TH>location</TH><TH>password</TH><TH>roleid</TH>

</TR>
<?php
$con=mysqli_connect("localhost","root","","ostazi");
$query = "SELECT * FROM user";
$result = mysqli_query($con,$query);//storing the result of $query into $result
while(  $row = mysqli_fetch_array($result)  ) {
	echo "<tr >";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['firstname'] . "</td>";
	echo "<td>" . $row['lastname'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['location'] . "</td>";
	echo "<td>" . $row['password'] . "</td>";
	echo "<td>" . $row['roleid'] . "</td>";
	echo "</tr>";
}
mysqli_close($con);
?> 
</thread>
</table>

</TABLE>




	</body></HTML>