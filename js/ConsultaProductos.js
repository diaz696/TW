		function tiempoReal()
		{
			var tabla = $.ajax({
				url:'ConsultaProductos.php',
				async:false
			});

			document.getElementById("miTabla").innerHTML = tabla;
		}
		setInterval(tiempoReal, 1);
