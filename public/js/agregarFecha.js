$(document).ready(function() {

  $('#botonFecha').on('click', function() {


    var lastId = $('.fecha').last().data('id');
    var select = $('.sede').last().data('id');


    var thisId = lastId+1;

    var nuevaFecha = $('<li class="fecha" data-id='+thisId+'><br><div class="row"><div class="col-lg-6 margin-tb"><div class="pull-left"><label for="start'+thisId+'">Inicio</label><input class="form-control-file"  id="start'+thisId+'" type="datetime-local" name="start['+thisId+']"></div><div class="pull-right"><label for="end'+thisId+'">Fin</label><input class="form-control-file" id="end'+thisId+'" type="datetime-local" name="end['+thisId+']"></div></div><div class="col-lg-3 margin-tb"><label for="sede'+thisId+'">Sede</label><br><select id="sede'+thisId+'" name="sede['+thisId+']" >'+select+'</select></div><div class="col-lg-3 margin-tb"><br> <span class="glyphicon glyphicon-remove" aria-hidden="true"  id=\"botonEliminar\"></span> </div></div></li>');
    console.log(nuevaFecha);
    $("#listaFechas").append(nuevaFecha);

  });


  $('#listaFechas').on('click', '#botonEliminar', function(event) {
      console.log( $( this ).parent().parent().text());
      $( this ).parent().parent().remove();
  });


    $('#botonEliminar').on('click', function(event) {
        console.log( $( this ).parent().parent().text());
        $( this ).parent().parent().remove();
    });

});
