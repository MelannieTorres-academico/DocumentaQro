$(document).ready(function() {

  $('#botonDocumental').on('click', function() {


     var lastId = $('.documental').last().data('id');

     var thisId = lastId+1;
     var select = $('.datasheet').last().data('id');


    var nuevoDocumental = $('<li class="documental" data-id='+thisId+'><div class="row"><div class="col-lg-9 margin-tb"><br><label for="datasheet+'+thisId+'">Documental</label><select id="datasheet'+thisId+'" name="datasheet['+thisId+']" required>'+select+'</select></div><div class="col-lg-3 margin-tb"><br> <span class="glyphicon glyphicon-remove" aria-hidden="true"  id=\"botonEliminarDocu\"></span> </div></div></li>');


    $("#listaDocumentales").append(nuevoDocumental);

  });



  $('#listaDocumentales').on('click', '#botonEliminarDocu', function(event) {
      console.log( $( this ).parent().parent().text());
      $( this ).parent().parent().remove();
  });


    $('#botonEliminarDocu').on('click', function(event) {
        console.log( $( this ).parent().parent().text());
        $( this ).parent().parent().remove();
    });


});
