function cargarFuncion()
{
    $.ajax({
    // la URL para la petición
    url : 'ConsultaVentas.php',

    // especifica si será una petición POST o GET
    type : 'GET',
    
    async:false,
    
    // el tipo de información que se espera de respuesta
    dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        var tabla = document.getElementById('miTabla');
	tabla.innerHTML = '<tr><th>ID</th><th>Cantidad</th><th>Fecha</th><th>Config</th></tr>';
      
		for(var i = 0; i < json.length; i++){
		  tabla.innerHTML +=  ` 
          <tr>
          <th>${json[i].id}</th>
          <td>${json[i].nombre}</td>
          <td>${json[i].password}</td>
          <td><button class="btn btn-danger" >Eliminar</button></td>
          </tr>` ;
		}		
}   
});
}

setInterval(cargarFuncion, 5000);
                

                
                
