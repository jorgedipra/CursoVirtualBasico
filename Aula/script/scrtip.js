 $(function(){
       
         

         $("input[name='Titulo']").keyup(function(e){
          var Titulo = $(this).val();
          var status = $("#stTitulo"); 
        
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
            
        });

 $("input[name=TituloTexto]").keyup(function(e){
          var TituloTexto = $(this).val();
          var status=$("#staTT");
      
          if(TituloTexto.length > 0){
            $.ajax({
              type:"GET",
              url:"checking.php",
              data:"TituloTexto="+TituloTexto,
              dataType:"json",
              beforeSend:function(){
                  status.html("...");
              },
              success:function(response){
                  status.html(response.msg);
              }
            })
          }else{
              status.html("Ingrese un dato");
          }
 
  });






 
      })
