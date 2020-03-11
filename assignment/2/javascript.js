function checkFieldRegistration(id){
  var fieldId=document.getElementById(id);
  var errorId='error'+id;
  errorId=document.getElementById(errorId);
  if (fieldId.value.length != 9){
    errorId.innerHTML="<div class='text-danger'>Registration number should be a 9 digit number.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
    return false;
  }
  else{
    errorId.innerHTML="";
    fieldId.classList.add("is-valid");
    fieldId.classList.remove("is-invalid"); 
    return true;
  }
}