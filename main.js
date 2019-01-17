
function ajax_post(){
     var xhr = new XMLHttpRequest();
     var url = "addHoroScope.php";
     var perNumer = document.getElementById("first_name[]").value;
     var vars = "PersonNummer="+perNumer;

     xhr.open("POST",url,true);
     xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

     xhr.onreadystatechange = function() {
          if(xhr.readyState == 4 && xhr.status == 200) {
               var return_data = xhr.responseText;
               document.getElementById("truefalse").innerHTML = return_data;
               getTheScope();    
          }
     }
     xhr.send(vars);
     document.getElementById("truefalse").innerHTML = "processing...";
}

function updatethescope(){
     var updateXHR = new XMLHttpRequest();
     var url = "updateHoroscope.php";
     var perNumer = document.getElementById("first_name[]").value;
     var vars = "PersonNummer="+perNumer;
     
     updateXHR.open("PUT",url,true);
     updateXHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     
     updateXHR.onreadystatechange = function() {
          if(updateXHR.readyState == 4 && updateXHR.status == 200) {
               var return_data = updateXHR.responseText;
               document.getElementById("truefalse").innerHTML = return_data;
               getTheScope();
          }
     
     }
     updateXHR.send(vars);
     document.getElementById("truefalse").innerHTML = "processing...";
     
     
}

function DeletetheScope(){
     var deleteXHR = new XMLHttpRequest();
     var url = "deleteHoroscope.php";
     var perNumer = document.getElementById("first_name[]").value;
     var vars = "PersonNummer="+perNumer;
     
     deleteXHR.open("DELETE",url,true);
     deleteXHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     
     deleteXHR.onreadystatechange = function() {
          if(deleteXHR.readyState == 4 && deleteXHR.status == 200) {
               var return_data = deleteXHR.responseText;
               document.getElementById("truefalse").innerHTML = return_data;
               getTheScope()
          }
     
     }
     deleteXHR.send(vars);
     document.getElementById("truefalse").innerHTML = "processing...";
     
}
function getTheScope() {
     var start = new XMLHttpRequest();
     var phpUrl = "super.php";
     
     start.open("GET",phpUrl, true);
     start.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 
     start.onreadystatechange = function() {
          if(start.readyState == 4 && start.status == 200){
               var Get_data = start.responseText;
               document.getElementById("status").innerHTML = Get_data;
          }
     }
     start.send()
     document.getElementById("status").innerHTML = "processing..........";
 }
 



     
 
 










