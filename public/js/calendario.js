  $(document).ready(function() {
      $.ajax({
          url: '/fetchEvents',
          type: 'GET',
          async: false,
          success: function(data){
              json_events = data;
              console.log(json_events);
          },
          error: function(e){
              console.log(e);
          }
      });

  		$('#calendar').fullCalendar({
  			header: {
  				left: 'prev,next today',
  				center: 'title',
  				right: 'month,basicWeek,basicDay',
  			},
  			events: {
                events: json_events,/* {"id":"1", "start":"01-01-2018", "end":"01-02-2018", "title":"my event"},//json_events,*/
          		error: function() {
                    alert('There was an error while fetching events!');
                    console.log(json_events);
                }
  			},

        eventClick: function(event) {
            window.open('/eventos/'+event.id);
        }
  		});

  });

  function refetch(){
    var sede = $('#sede').val();
    var programa = $('#programa').val();
    $.ajax({
        url: '/fetchEvents?sede='+sede+'&programa='+programa,
        type:'GET',
        success:function(data){
          json_events = data;
          $('#calendar').fullCalendar(  'removeEvents' );
          $('#calendar').fullCalendar(  'renderEvents', json_events,true );
        },
    });
  }
