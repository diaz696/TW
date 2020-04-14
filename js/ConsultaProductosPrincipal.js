function tiempoReal()
		{
			var tabla = $.ajax({
				url:'ConsultaProductosPrincipal.php',
				dataType:'text',
				async:false
			}).responseText;

			document.getElementById("miTabla").innerHTML = tabla;
		}
		setInterval(tiempoReal, 1);
