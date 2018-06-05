function confirm(event, target){
  var t = target;
  swal({
      title: "¿Estás seguro?",
      text: "No vas a poder recuperar este registro.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Si, elimínalo!",
      cancelButtonText: "Cancelar",
      closeOnConfirm: false
    },

    function(isConfirm) {
      if (isConfirm) {
      swal({
        title: "Eliminado",
        text: "Se ha eliminado correctamente",
        type: "success",
        timer: 2000,
        showConfirmButton: false
      });
      // once confirm, post your form
          $(t).submit();

      }
  });
  event.preventDefault();
  return false;

}

function atras(){
  swal({
      title: "¿Estás seguro?",
      text: "Se perderá la información sino la guardas.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Sí, llévame atrás!",
      cancelButtonText: "Cancelar",
      closeOnConfirm: false
    },

    function(isConfirm) {
      if (isConfirm) {
        var actual_link=window.location.href ;
        var link_ext = $('#link').last().data('id');
        var link='http://127.0.0.1:8000/'+link_ext;
        location.href = link;
      }
  });
  return false;

}




function exito_sin_imagen(){


    swal({
      title: "Guardado",
      text: "Se ha guardado correctamente",
      type: "success",
      timer: 2000,
      showConfirmButton: false
    });


}




    function exito(){


      if(valid){
        swal({
          title: "Guardado",
          text: "Se ha guardado correctamente",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        });

    }
  }
