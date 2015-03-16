<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API - Read</title>
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
	<script type='text/javascript' src='includes/js/json2html.js'></script>
	<script type='text/javascript' src='includes/js/jquery.json2html.js'></script>
	<script type='text/javascript' src='includes/js/helper.js'></script>
	<link rel="StyleSheet" href="includes/css/helper.css" type="text/css"/>
	<!-- <script type='text/javascript' src=''></script> -->
</head>

<script type="text/javascript">

	var username = "user_name"; 
	var userpass = "user_pass";
	$.ajax({
		url : "http://localhost:8888/290_project/api_write.php?name="+username+"&pass="+userpass+"",
		dataType: 'json',
		type: 'get',
		cache: false,
		success : function(data){
			var i = 0;
			while(data.posts[i].date != null){
				$(document.body).append(data.posts[i].date);
				$(document.body).append("<br>");
				$(document.body).append(data.posts[i].content);
				$(document.body).append("<br>");
				i++;
			};
		}
	});

</script>
<body>	

</body>
</html>

