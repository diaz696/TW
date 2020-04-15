function cargarFuncion()
{
    $.ajax({
    // la URL para la petición
    url : 'ConsultaProductos.php',

    // especifica si será una petición POST o GET
    type : 'GET',
    
    async:false,
    
    // el tipo de información que se espera de respuesta
    dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        
        var tabla = document.getElementById('miTabla');
	tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Configuración</th></tr>';
        
		for(var i = 0; i < json.length; i++){
		  tabla.innerHTML +=  ` 
          <tr>
          <th>${json[i].id}</th>
          <td>${json[i].nombre}</td>
          <td>${json[i].precio}</td>
          <td><button class="btn btn-danger" >Eliminar</button></td>
          </tr>` ;
		}		
}   
});
}

setInterval(cargarFuncion, 5000);
