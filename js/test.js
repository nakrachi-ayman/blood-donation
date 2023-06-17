document.getElementById("btn").addEventListener("click",f1);
        function f1(){
            var n=document.getElementById('yes').value+"/n"
            +document.getElementById('lees').value+"/n"
            +document.getElementById('try').value+"/n"
            +document.getElementById('as').value+"/n"
            +document.getElementById('fain').value+"/n"
          if(document.getElementById('yes').checked && 
            document.getElementById('lees').checked &&
            document.getElementById('try').checked &&
            document.getElementById('as').checked &&
            document.getElementById('fain').checked
            ){
      
      
          const ok = window.location.href="insc.php";
              
      
              swal({
      title: "Bien!",
      text: "Merci de répondre. Vous devriez être éligible pour faire un don, alors continuez à vous inscrire.",
      icon: "success",
      button: ok
      });        
      }
          else{
              const cancel= window.location.href="index.php";
              swal({
      title: "ooops!!",
      text: "Merci. Sur la base des réponses que vous avez fournies, nous vous conseillons de ne pas vous inscrire comme donneur de sang!",
      icon: "warning",
      button: cancel
      
      });
      }
          }
        
      