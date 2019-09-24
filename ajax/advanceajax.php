<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	ID : <input type="text" id="id"> <br>
	Name : <input type="text" id="name"> <br>
	Course : <input type="text" id="course"> <br>
	Fees : <input type="text" id="fees"> <br>

	<input type="button" value="Get Record" onclick="Download();">

	<script>
		function Download()
		{
			xhr=new XMLHttpRequest();
			xhr.open("get","record.php");
			xhr.send();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4){
					data=xhr.responseText;
					data=JSON.parse(data);
					document.getElementById('id').value=data.id;
					document.getElementById('name').value=data.name;
					document.getElementById('course').value=data.course;
					document.getElementById('fees').value=data.fees;

				}
			}
		}
	</script>

</body>
</html>