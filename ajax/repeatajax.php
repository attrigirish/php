<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p id="para"></p>

	<script>

		setInterval(Download,2000);

		function Download(){
			xhr=new XMLHttpRequest();
			xhr.open("GET","data.txt");
			xhr.send();

			xhr.onreadystatechange=function()
			{
				if(xhr.readyState==4)
				{
					data=xhr.responseText;
					document.getElementById('para').innerHTML=data;
				}
			}
		}
	</script>
</body>
</html>