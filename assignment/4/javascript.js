function checkFieldRegistration(id){
  var fieldId=document.getElementById(id);
  var value = fieldId.value;
  var errorId='error'+id;
  errorId=document.getElementById(errorId);
  if (isNaN(value)) {
    errorId.innerHTML = "<div class='text-danger'>Please enter a valid number.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
  }
  else if (value <= 0) {
    errorId.innerHTML = "<div class='text-danger'>Hours should be greater than 0.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
  }
  else if (value <= 40){
   var x = fieldId.value;
   var payment = x * 10;
   errorId.innerHTML= " The payment is: ₹ " + payment ;
   fieldId.classList.add("is-valid");
   fieldId.classList.remove("is-invalid");
   return false;
 }
 else{
  var y = value - 40;
  var payment = 400 + (y * 12);
  errorId.innerHTML= " The payment is: ₹ " + payment ;
  fieldId.classList.add("is-valid");
  fieldId.classList.remove("is-invalid"); 
  return true;
}
}