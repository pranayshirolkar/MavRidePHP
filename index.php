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
<td><span>Username or Email: </span></td>
<td><span><input type='text'/></span></td>
</tr>
<tr>
<td><span>Password:</span></td>
<td><span><input type='password'/></span></td>
</tr>
<tr>
<td><span></span></td>
<td><span style="float:right"><input type="submit" value="Login"/></span><br/>
<a href= "forgotPassword.php">Forgot Password? </a></td>
</tr>
</table>
</form>
</div>
<?php
include "masterpagebottomsection.php";
?>