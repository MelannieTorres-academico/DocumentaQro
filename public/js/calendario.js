$(document).ready(function() {

        		 $("#fetchval").on('change',function(){

                    var keyword = $(this).val();
                    var keyword2 = $('#fetchval2').val();
                    $.ajax({
                        url: 'fetch.blade.php',
                        type:'POST',
                        data:{ request: keyword, request2: keyword2 },

                        beforeSend:function(){
                            $("#table-container").html('Working...');
                        },
                        success:function(data){
                            $("#table-container").html("");
                            //console.log("data:");
                            //console.log(data);
                            json_events = data;
                            //console.log('refetching');



                            $('#calendar').fullCalendar(  'removeEvents' );

                            $('#calendar').fullCalendar(  'renderEvents', JSON.parse(json_events),true );

                        },
                    });
                });


                  $("#fetchval2").on('change',function(){

                    var keyword = $('#fetchval').val();
                    var keyword2 = $(this).val();

                    $.ajax({
                        url:'fetch.blade.php',
                        type:'POST',
                        data:{request: keyword, request2: keyword2 },

                        beforeSend:function(){
                            $("#table-container").html('Working...');
                        },
                        success:function(data){
                            $("#table-container").html("");
                           // console.log("data:");
                            //console.log(data);
                            json_events = data;
                            //console.log('refetching');
                            $('#calendar').fullCalendar(  'removeEvents' );


                            $('#calendar').fullCalendar(  'renderEvents', JSON.parse(json_events), true);
                        },
                    });
                });



                $.ajax({
                url: 'fetch.blade.php',
                        type: 'POST',
                        data: 'type=fetch',
                        async: false,
                        success: function(data){
                            json_events = data;


                        }
                });

        		$('#calendar').fullCalendar({
        			header: {
        				left: 'prev,next today',
        				center: 'title',
        				right: 'month,basicWeek,basicDay',

        			},
        			events: {
        			    url: 'fetch.blade.php',
                        type: 'POST',
                        data: 'type=fetch',
                        async: false,

                        events:JSON.parse(json_events),
                		error: function() {
                                alert('there was an error while fetching events!');
                                console.log('ERROR');

                                console.log(json_events);

                        }

        			},

              eventClick: function(event) {
                  if ('/eventos/') {
                      window.open('/eventos/'+event.id);
                      return false;
                  }
              }




        		});

        	});
