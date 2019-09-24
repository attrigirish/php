<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style>
			.box{
				height:180px;
				width:200px;
				padding:10px;
				margin:10px;
				float:left;
				border:1px solid black;
			}

			.box span{
				display: block;
			}
	</style>
</head>
<body>
	Brand Name : <input type="text" id="search" oninput="GetSuggestions(this.value);">  

	<div id="products">
	</div>


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
					document.getElementById('products').innerHTML='';
					for(i=0;i<data.length;i++)
					{
						lblname=document.createElement('span');
						lblname.innerHTML=data[i].name;
						lblbrand=document.createElement('span');
						lblbrand.innerHTML=data[i].brand;
						lblprice=document.createElement('span');
						lblprice.innerHTML=data[i].price;

						div=document.createElement('div');
						div.setAttribute('class','box');

						div.append(lblname);
						div.append(lblbrand);
						div.append(lblprice);

						document.getElementById('products').append(div);
					}
				}
			}
		}
	</script>

</body>
</html>