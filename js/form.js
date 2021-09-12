
  function validate() 
  {
  

 var regName =/^[a-zA-Z ]+$/;
 if(!document.forms["myform"]["Name"].value.match(regName)){
    alert("Please Enter Valid Name");
    return false;
  }
  var mobile = document.forms["myform"]["Mono"].value;
 if(mobile==""){
 alert("Please enter the mobile");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Mobile number not valid");
 return false;
 }
 } 

 var email = document.forms["myform"]["Mail"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 
 var address = document.forms["myform"]["Msg"].value;
 if(address.length < 5 ){
 alert("Please Enter Valid Message");
 return false;
 }

 var subject = document.forms["myform"]["Subject"].value;
 if(subject.length <5 ){
  alert("Please Enter Valid Subject");
  return false;

 }
  }




