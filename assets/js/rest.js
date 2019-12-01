

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
				var stock = infod1[i].stock;				
                				                                //esta es la forma en que guardas cada uno de los atributos que te da la respuesta JSON, por ejemplo en la variable  title guardo infod1 [i].title;
                                                                                                                                                    //recuerda que es un ciclo por eso la "i"    
                
                       
					  $(".video-list").append(createItem(id_categoria,nombre,descripcion),false);
					  
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
function createItem(id_categoria,nombre,descripcion)
{
     var item = '<tr><td>'+id_categoria+'</td><td>'+nombre+'</td><td>'+descripcion+'</td></tr>'
    
				
    return item;
}



