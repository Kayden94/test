var x = document.getElementsByClassName("value-shar__item");
var headerTop =  document.getElementsByTagName("header")[0];

var form1 = document.getElementById("form1");
var btn = form1.getElementsByClassName("btn")[0];
var spin = document.getElementsByClassName("spinner")[0];

//действия
btn.addEventListener("click", send, false);


document.onreadystatechange =  (function() {


  window.onscroll = function () {

    if(scrollY > 1200){
      for (var i=0; i<= x.length-1; i++){
        addMyClass(x[i], 'active');
      } 
    } 
    if(scrollY > 1000){
     addMyClass(headerTop, 'topmen');
   }else{
     removeMyClass(headerTop, 'topmen');
   }
 }

})();



function addMyClass(elem, myclass) {

  if(!elem.classList.contains(myclass)){
    elem.classList.add(myclass);
  }
}
function removeMyClass(elem, myclass) {

  if(elem.classList.contains(myclass)){
    elem.classList.remove(myclass);
  }
}


function send(){
 try {
            // Opera 8.0+, Firefox, Safari
            ajaxPOSTTestRequest = new XMLHttpRequest();
          } catch (e) {
            // Internet Explorer Browsers
            try {
              ajaxPOSTTestRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
              try {
                ajaxPOSTTestRequest = new ActiveXObject("Microsoft.XMLHTTP");
              } catch (e) {
                    // Something went wrong
                    alert("Your browser broke!");
                    return false;
                  }
                }
              }

              let name = form1.getElementsByTagName("input")[0].value;
              let tel = form1.getElementsByTagName("input")[1].value;
              let text = form1.getElementsByTagName("textarea")[0].value;


              let url = "mail.php";
              let params = "name="+name+"&tel="+tel+"&text="+text+"&statusP=send";

              // console.log(params);
              ajaxPOSTTestRequest.open("POST", url, true);

              // ajaxPOSTTestRequest.onreadystatechange = function() {
              //   if (  ajaxPOSTTestRequest.readyState>3 &&   ajaxPOSTTestRequest.status==200) { console.log(ajaxPOSTTestRequest.responseText); }
              // };
              ajaxPOSTTestRequest.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
              ajaxPOSTTestRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              ajaxPOSTTestRequest.send(params);

              setTimeout(function() { doSpiner(); }, 100);
              setTimeout(function() { noSpiner(); }, 2000);

              form1.getElementsByTagName("input")[0].value = "";
              form1.getElementsByTagName("input")[1].value = "";
              form1.getElementsByTagName("textarea")[0].value = "";   
              // console.log(ajaxPOSTTestRequest.responseText);
              // return   ajaxPOSTTestRequest;
            }

            function doSpiner(){
              addMyClass(spin, "active");

            }

            function noSpiner(){
              removeMyClass(spin, "active");
              btn.value= "Отправлено!";

              doPopup();
            }



// тут написать попап
function doPopup(){

 alert("Ваше письмо отправлено");
}

