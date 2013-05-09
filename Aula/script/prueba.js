 $(function(){
       for(var i=0;i<document.Control.elements.length;i++)
         {
         var id_obtenido = document.Control.elements.id; 
         alert('id:'+id_obtenido); 
         if(document.Control.elements[i].text){

         $("input[name=Titulo]").keyup(function(e){
          var Titulo = $(this).val();
          var status=$("#stTitulo"); 
        
          if(Titulo.length > 0){
            $.ajax({
              type:"GET",
              url:"checking.php",
              data:"Titulo="+Titulo,
              dataType:"json",
              beforeSend:function(){
                  status.html("...");
              },
              success:function(response){
                  status.html(response.msg);
              }
            })
          }else{
              status.html("");
          }
          
          }

          }
 
        });

       });
