<?php
include "masterpagetopsection.php";
?>
<div class="middleSection">
<h4>
Welcome. Please login to continue.
</h4>
		
<form action='login.php'>
<table>
<tr>
<td><span>Username: </span></td>
<td><span><input type='text' id='unm'/></span></td>
</tr>
<tr>
<td><span>Password:</span></td>
<td><span><input type='password' id='password'/></span></td>
</tr>
<tr>
<td><span></span></td>
<td><span style="float:right"><input type="submit" value="Login"/></span><input type='button' value="->" onclick="validateLogin();"/><br/>
<a href= "forgotPassword.php">Forgot Password? </a></td>
</tr>
</table>
</form>


<!--
<input type='button' onclick='test()' value='test save'/>
-->
</div>
<?php
include "masterpagebottomsection.php";
?>
