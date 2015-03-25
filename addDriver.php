<?php 
include "masterpagetopsection.php";
include "navbar.php";
?>
<div class="middleSection">
<h4>
Add Driver
</h4>
<table>
<tr>
<td>Email: 
</td>
<td><input type='text' id='email'/>
</td>
</tr><tr>
<td>First Name: 
</td>
<td><input type='text' id='first_name'/>
</td>
</tr><tr>
<td>Last Name: 
</td>
<td><input type='text' id='last_name'/>
</td>
</tr><tr>
<td>Phone number: 
</td>
<td><input type='text' id='phone_number'/>
</td>
</tr>
<tr><td>
<tr>
<td>Password:</td>
<td><input type='password' id='password'/></td>
</tr>
</td><td><input type='button' value='Reset'/>&nbsp;<input type='submit' value='Submit'/> <input type='button' onclick='addDriver();' value='->'/>
</td></tr>
</table>
</div>
<?php include "masterpagebottomsection.php"?>