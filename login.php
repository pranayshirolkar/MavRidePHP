<html>
<head>		<script src="//www.parsecdn.com/js/parse-1.3.5.min.js"></script>
</head>
<body>
<?php
var Registration = Parse.Object.extend("Registration");
var query = new Parse.Query(Registration);
query.equalTo("Email","hmt");
query.equalTo("Password","hmt");
query.equalTo("UserType","Driver");
query.find({
success: function(results)
{
alert("login success "+results.length+" results");
alert(results[0].get('First_Name');
header('Location: home.php');
},
error: function(error)
{
alert("login failed"+error.code+" "+error.message);
header("Location: index.php");
});
?>
</body>
</html>
