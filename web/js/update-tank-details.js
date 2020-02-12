$(function(){  
 
      $(document).on('click', '.showTanksButton', function(){         
      
        if ($('#modal').data('bs.modal').isShown) {
            $('#modal').find('.modalContent')
                    .load($(this).attr('value'));
            //dynamiclly set the header for the modal
         document.getElementById('modalHeaderTitle').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        } else {           
            //if modal isn't open; open it and load content
            $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));             
             //dynamiclly set the header for the modal  
            document.getElementById('modalHeaderTitle').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';


        }
    });
})