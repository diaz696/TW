		function tiempoReal()
		{
			var tabla = $.ajax({
				url:'ConsultaVentas.php',
				dataType:'text',
				async:false
			}).responseText;

			document.getElementById("miTabla").innerHTML = tabla;
		}
		setInterval(tiempoReal, 1);
