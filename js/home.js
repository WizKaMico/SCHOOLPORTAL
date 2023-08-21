CKEDITOR.replace( 'editor1' );
      $(document).ready(function(){
        $(document).on('mousemove',function(e){
        $("#cords").html("Cords: Y: "+e.clientY);
        })
      });