function checkFieldPrincipal(id){
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
    errorId.innerHTML = "<div class='text-danger'>Principal should be greater than 0.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
  }
  else{
    errorId.innerHTML= "";
    fieldId.classList.add("is-valid");
    fieldId.classList.remove("is-invalid"); 
    return true;
  }
}

function checkFieldyears(id){
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
    errorId.innerHTML = "<div class='text-danger'>Years should be greater than 0.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
  }
  else{
    errorId.innerHTML= "";
    fieldId.classList.add("is-valid");
    fieldId.classList.remove("is-invalid"); 
    return true;
  }
}

function checkFieldinterest(id){
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
    errorId.innerHTML = "<div class='text-danger'>Interest should be greater than 0.</div>";
    fieldId.classList.add("is-invalid");
    fieldId.classList.remove("is-valid");
  }
  else{
    errorId.innerHTML= "";
    fieldId.classList.add("is-valid");
    fieldId.classList.remove("is-invalid"); 
    return true;
  }
}

function simpleinterest() {
  var principal = document.getElementById(Principal).value ; 
  var years = document.getElementById(Principal).value ; 
  var interest = document.getElementById(Principal).value;
}