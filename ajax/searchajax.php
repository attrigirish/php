<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	Brand Name : <input type="text" id="search" oninput="GetSuggestions(this.value);" list='suggestions'>  

	<datalist id="suggestions">
	</datalist>


	<script>
		function GetSuggestions(search)
		{
			xhr=new XMLHttpRequest();
			xhr.open("GET","getproducts.php?search="+search);
			xhr.send();
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState==4)
				{
					data=xhr.responseText;
					data=JSON.parse(data);
					document.getElementById('suggestions').innerHTML='';
					for(i=0;i<data.length;i++)
					{
						option=document.createElement('option');
						option.innerHTML=data[i].brand + " " + data[i].name;
						document.getElementById('suggestions').appendChild(option);
					}
				}
			}
		}
	</script>

</body>
</html>