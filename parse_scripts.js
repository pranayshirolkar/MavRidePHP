function initParse()
{
//alert('initParse');
Parse.initialize("Z1onpLDjhguG5Xerjh1sSzCm4T6o3tgQdN4TwjiM", "pAXDotKSURGVnN5gB1fBcBTu5gAYqZXgeGmZGRrs");
}
function ramu()
{
alert('ghoda');
}
function validateLogin()
{
//alert('validateLogin');
//var Registration = Parse.Object.extend("police_user");
var query = new Parse.Query("police_user");
//alert(document.getElementById('email').value);
query.equalTo("username",document.getElementById('unm').value);
query.equalTo("password",document.getElementById('password').value);
//query.equalTo("UserType","Driver");
query.find({
success: function(results)//success means api was able to execute. it will be success even if we don't have match.
{
if(results.length!=0)
	{
	//username passwords matched
	alert("login success. Welcome "+results[0].get('username'));
	window.location.replace("home.php");
	}
	else
	{
		//wrong username/password
		alert('wrong username / password please try again');
	}
//alert(results[0].get('First_Name'));

},
error: function(error)
{
alert("login failed"+error.code+" "+error.message);
}
});
//alert('validateLogin');
//var TestObject = Parse.Object.extend("TestObject");
//var testObject = new TestObject();
//testObject.save({foo: "bar"}).then(function(object) {
//  alert("yay! it worked");
//});
}
function addDriver()
{
		var user=new Parse.User();
	user.set("username",document.getElementById('email').value);
	user.set("password",document.getElementById('password').value);
	user.signUp(null,{
	success:function(us)
		{
		alert('users table updated');
		var Registration=Parse.Object.extend("Registration");
	var registration=new Registration();
	registration.set("Email",document.getElementById('email').value);
	registration.set("First_Name",document.getElementById('first_name').value);
	registration.set("Last_Name",document.getElementById('last_name').value);
	registration.set("Password",document.getElementById('password').value);
	registration.set("PhoneNo",document.getElementById('phone_number').value);
	registration.set("UserId",us.id);
	registration.set("UserType","Driver");
	registration.save(null,
	{
		success: function(registration)
		{
			alert('Registration added');
		},
		error: function(registration, error)
		{
			alert('Registration could not be added'+error.message);
		}
	});
	var DriverDetail=Parse.Object.extend("DriverDetail");
	var driverDetail=new DriverDetail();
	driverDetail.set("CurrentLocation","UC");
	driverDetail.set("DriverId",us.id);
	driverDetail.set("DriverStatus","Offline");
	driverDetail.set("NoAssigned",0);
	driverDetail.save(null,
			{
	success: function(driverDetail)
				{
		alert('driver detail table updated');
				},
					error: function(driverDetail,error)
				{
					alert('driver detail table could not be updated'+error.message);
				}});
		},
			error:function(us,error)
		{
			alert('users table could not be updated'+error.message);
		}});
}