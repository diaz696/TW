
function cargarFuncion()
{
    $.ajax({
    url : 'ConsultaProductos.php',
    type : 'GET', 
    async:false,
    dataType : 'json',
    success : function(json) {      
        var tabla = document.getElementById('miTabla');
        tabla.innerHTML="";
        for(var i = 0; i < json.length; i++){
            tabla.innerHTML +=  `<button style="margin: 10px" onclick ="ObtenerProducto(this)" id="${json[i].id}" type="button" class="btn btn-outline-primary">${json[i].nombre}</button>`;       
	}		
    }   
    });
}
setInterval(cargarFuncion, 5000);

var monto=0.0;
var ID=1;
function ObtenerProducto(boton)
{
    var id = {
        "id" : boton.id
    };
        
    
    $.ajax({                        
        type: "POST",                 
        url: 'ConsultaProductoEspecifico.php',                     
        data: id, 
        datatype:'json',
        success: function(json){
            var tabla = document.getElementById('body');
            
            for(var i = 0; i < json.length; i++){
                tabla.innerHTML +=            `<tr>
                <td>${json[i].id}</td>
                <td>${json[i].nombre}</td>
                <td>${json[i].precio}</td>
                <td><button class="btn btn-danger" id="${json[i].precio}" onclick="EliminarProducto(this)">Eliminar</button></td></tr>`;
                monto+=parseFloat(json[i].precio);
            }
            
            document.getElementById('disabledTextInput').value=monto;
            ID++;
        }
    });
}

function EliminarProducto(boton)
{   
    boton.parentNode.parentNode.parentNode.removeChild(boton.parentNode.parentNode);
    monto=monto-parseFloat(boton.id);
    document.getElementById('disabledTextInput').value=monto;
}

function ConfirmarCompra(){  
    var Cantidad = {
    "cantidad" : monto
    };
    
    ActualizarCaja(monto);  
    
    $.ajax({                        
           type: "POST",                 
           url: 'InsertarCompra.php',                     
           data: Cantidad,
           complete: function()             
           {
               $('#body').empty();
               monto=0.0;
               document.getElementById('disabledTextInput').value=monto;
            }
    });
}

function ActualizarCaja(a){
    
         $.ajax({                        
           type: "GET",
           url: 'ObtenerUltimoCaja.php',                     
           datatype:'json',
           success: function(json){
               var caja=0.0;
               if(!$.isEmptyObject(json)){
                  caja= json[0].id;
               }
                var datos = {
                "caso": '1',
                "cantidad" : a,
                "caja": caja,
                "descripcion": "Venta",
                "empleado": "10"
                };
         
                $.ajax({                        
                   type: "POST",                 
                   url: 'ActualizarCaja.php',                     
                   data: datos,
                   complete: function(){
                }
                 });
           }
       });
   
}

function CancelarCompra(){
    monto=0.0;
    document.getElementById('disabledTextInput').value=monto;
    $('#body').empty();
}



