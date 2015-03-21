<?php
include "masterpagetopsection.php";
include "navbar.php";
?>
<div class="middleSection">
<h4>
Current Rides and Request Status
</h4>
<table border='1' style="vertical-align: top">
<tr>
<td>
<table style="text-align:left;">
<caption>Current Requests Info</caption>
<thead>
<tr>
<th>Request ID</th>
<th>Requester</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>486</td>
<td>ameya.patil</td>
<td>Pending</td>
</tr>
<tr>
<td>485</td>
<td>hemanth.geddada</td>
<td>Driver Allocated</td>
</tr>
<tr>
<td>484</td>
<td>jasmine.grewal</td>
<td>Picked Up</td>
</tr>
<tr>
<td>483</td>
<td>liwanshi.raheja</td>
<td>Pending</td>
</tr>
<tr>
<td>482</td>
<td>pranay.shirolkar</td>
<td>Complete</td>
</tr>
</tbody>
</table>
</td>
<td style="vertical-align: top">
<!--table2-->
<table style="text-align: left">
<caption>Current Driver Info</caption>
<tr>
<td>
<thead>
<tr>
<th>Driver ID</th>
<th>Driver Location</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>nitin.kumar</td>
<td>Central Library</td>
<td>Active</td>
</tr>
<tr>
<td>sandesh.pandey</td>
<td>Centennial Court</td>
<td>Active</td>
</tr>
<tr>
<td>mangal.pandey</td>
<td>Engineering Research Building</td>
<td>Idle</td>
</tr>
<tr>
</tbody>
</table>
</td>
</tr>
</table>
</div>
<?php include "masterpagebottomsection.php"?>