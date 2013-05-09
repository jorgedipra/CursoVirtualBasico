 $(function(){
 
        $("input[name=username]").keyup(function(e){
          var username = $(this).val();
          var status=$("#status");
 
          status.removeClass("checked").removeClass("error")
          if(username.length > 0){
            $.ajax({
              type:"GET",
              url:"checking.php",
              data:"username="+username,
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

        $("input[name=Titulo]").keyup(function(e){
          var Titulo = $(this).val();
          var status=$("#status");
 
          status.removeClass("checked").removeClass("error")
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
 
      })
