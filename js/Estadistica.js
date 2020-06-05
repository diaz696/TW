     function Actualizar()
     {
         var valor = 0.0;
        $.ajax({
        url : 'ConsultarTotalVentas.php',

        type : 'GET',
    
        async:false,
    
        dataType : 'json',

        success : function(json) {
      
            for(var i = 0; i < json.length; i++){
                
             valor = valor + parseFloat(json[i].Cantidad);
	}
                   
        
}   
});
        var valorAyer = 0.0;
        $.ajax({
        
        url : 'ConsultarAyer.php',

        type : 'GET',
    
        async:false,
    
        dataType : 'json',

        success : function(json) {
      
            for(var i = 0; i < json.length; i++){
                
             valorAyer = valorAyer + parseFloat(json[i].Cantidad);
	}
                   
        
}   
});

    $(function($){
             $('#grafica').highcharts({
             title:{text:'Estadística de ventas mensual'},
             xAxis:{categories:['Ayer', 'Hoy']},
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Ventas',data: [valorAyer, valor]}
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });
}
