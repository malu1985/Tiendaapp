

function loadRest()
{
var videoIndex = 0;
try
        {
          var httpReq = new XMLHttpRequest();
          httpReq.open("GET", "https://maryluz.herokuapp.com/public/index.php/api/customers");                    //cambia esta linea por el servicio web que consumes :)
          httpReq.onreadystatechange = function()
           {
            if(httpReq.readyState == 4)
             {
              if(httpReq.status == 200)
               {
                 infod1 = JSON.parse(httpReq.responseText);
                         console.log("respuestas desde el servicio web"+httpReq.responseText)
                         var added = 0;
                         for (var i =0;i<infod1.length;i++)
                           {
                     
                  
                  var id_categoria = infod1[i].id_categoria;
                  var nombre = infod1[i].nombre;
				var descripcion = infod1[i].descripcion; 
						
                				                                //esta es la forma en que guardas cada uno de los atributos que te da la respuesta JSON, por ejemplo en la variable  title guardo infod1 [i].title;
			$(".id_cat").append(categoria(id_categoria));
			$(".nombre_cat").append(categoria2(nombre));
			 $(".desc_cat").append(categoria3(descripcion));
					  
					  //este método es que el coloca el valor traído desde el servicio rest en la vista, échale ojo a la función createItem (abajo paso 3)
                                                                                                                                                    // videolist es un atributo html, ubicado justamente en tu html :)
                  }  
               }
              else
              {
                console.log(" There is a mistake - getting the web service"+httpReq.responseText);
              }
           }
         };
        httpReq.send();
        }
        catch(ex)
         {
           console(" There is a mistake - getting the web service " + ex);
         }

}
function categoria(id_categoria)
{
     var item = '<tr><th>'+id_categoria+'</th></tr>'
    
				
    return item;
}
function categoria2(nombre)
{
     var item = '<tr><th>'+nombre+'</th></tr>'
    
				
    return item;
}
function categoria3(descripcion)
{
     var item = '<tr><th>'+descripcion+'</th></tr>'
    
				
    return item;
}



