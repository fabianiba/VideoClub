$(document).ready(function()
{
	/**
    *@desc- retrasa el evento keyup
    *@param fn - function
    *@param ms - milisegundos que queremos retrasar
    */
    $.fn.delayPasteKeyUp = function(fn, ms)
    {
        var timer = 0;
        $(this).on("keyup paste", function()
        {
            clearTimeout(timer);
            timer = setTimeout(fn, ms);
        });
    };

    $("input[name=autocomplete]").delayPasteKeyUp(function()
    {
        $.ajax({
        	type: "GET",
            url: "http://localhost/boostrap/app/instancias/autocomplete.php",
            data: "autocomplete="+$("input[name=autocomplete]").val(),
            success: function(data)
            {
            	if(data)
            	{
            		var json = JSON.parse(data),
            			html = '<div class="list-group">';
            		if(json.res == 'full')
            		{
            			for(datos in json.data)
            			{

                               html+='<a href="#" onclick="info('+json.data[datos].dni+',\''+json.data[datos].nombre+'\')" class="list-group-item">';


                            html+='<h4 class="list-group-item-heading">Nombre:' + json.data[datos].nombre;

                            html+=' Dni: ' + json.data[datos].dni+'</h4>';
                            html+='</a>';




            			}
            		}
            		else
            		{
            			html+='<a href="#" class="list-group-item">';
        				html+='<h4 class="list-group-item-heading">No se ha encontrado nada con '+$("input[name=autocomplete]").val()+'</h4>';
        				html+='</a>';
            		}
            		html+='</div>';
            		$("#busqueda").html("").append(html);
            	}
            }
        });
    }, 500);

	$(document).on("click", "a", function()
	{
		$("a").removeClass("active");
		$(this).addClass("active");
	})
});

//al pulsar en los enlaces muestra su información
function info(dni)
{
	alert("dni: " + dni );
}