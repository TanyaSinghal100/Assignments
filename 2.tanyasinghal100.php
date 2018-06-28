<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
		
.image{
	width:100%;
	height:200px;

	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color:#09F;
		}
		
.leftcontent{
	width:50%;
	height:300px;

	background-color:#003399;
	float:left;
	text-align:center;
	color: #F00;
		}
		
.rightcontent{
	width:50%;
	height:300px;

	background-color:#FF0000;
	float:left;
	text-align:center;
	color:#000000;
		}
		
.frontform{
 margin-top:10px;
}
		
.footer{
	width:100%;
	height:50px;
	
	background-color:#996633;
	float:left;
	text-align:center;
	color: #FFF;
		}
		
		
	</style>	
</head>
<body>

<div class="header">
Site's Header 
</div>

<div class="menu">
Site's Header 
</div>

<div class="image">
</div>

<div class="leftcontent">
<form method="post" >
<div class="frontform">
<select name="course" id="course" required="required">
<option value="">Select Course</option>
<option value="20000">B.Tech</option>
<option value="30000">BBA</option>
<option value="40000">BCA</option>
</select>
</div>
<div class="frontform"><input type="number" name="duration"  id="duration" placeholder="duration" onblur="f1()" /> </div>
<div class="frontform"><input type="number" name="ta"  id="ta" readonly="readonly" placeholder="Total Amount"/></div>
<div class="frontform"><input type="submit"/> </div>
</div>
</form>
</div>
</div>

<div class="rightcontent">
<form method="post"><center><h3>CONTACT FORM</h3></center>
<h4>
<div class="frontform">NAME:<input type="text" name="uname" placeholder="Name" required="required"  /></div>
<div class="frontform">EMAIL:<input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform">CONTACT NO.:<input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">MALE:<input type="radio" name="gender" value="male" />
FEMALE:<input type="radio" name="gender" value="female" /></div>
</h4>

<div class="frontform">CITY:
<select name="city" id="city" placeholder="city" required="required">
<option value="">Select city</option>
<option value="Delhi">Delhi</option>
<option value="Noida">Noida</option>
<option value="Meerut">Meerut</option>
<option value="Bangalore">Bangalore</option>
</select>
</div>

<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>
<input type="submit" name="submit"  />
</div>
</div>
</form>
</div>
</div>

</div>

<div class="footer">
</div>
</body>