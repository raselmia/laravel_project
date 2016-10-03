<!DOCTYPE html>
<html>
<head>
	<title>Send mail</title>
</head>
<body>
	<b>Mail From : </b> {{ $title }}<br/><br/>
	
	<div style="background-color:#E6E6E6;padding:25px;font-size:25px;text-align: center"> {{ $subject }} </div>
	
	<div style="background-color:#FAFAFA;padding:3px 20px 20px 1px">
	

	<div style="margin-bottom:10px"></div><br/>
	{{ $text }}
	</div>
	
	<br/><br/><br/><br/>
	Regards,<br/>
	{{ $name }}<br/>
	{{ $email }}<br/>

</body>
</html>