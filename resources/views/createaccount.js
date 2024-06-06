let password = document.getElementById("password");
let checkpassword = document.getElementById("checkpassword");

password.addEventListener("input", function(){
  let min = 0,num = 0,maj = 0,spec = 0;

  for (let i = 0; i < password.value.length; i++) {
        if(password.value[i] >= 'a' && password.value[i] <= 'z') min = 1;
        if(password.value[i] >= 'A' && password.value[i] <= 'Z') maj = 1;
        if(password.value[i] >= '0' && password.value[i] <= '9') num = 1;
        if(password.valuepi == '!' || password.value[i] == '@' || password.value[i] == '#' || password.value[i] == '$' || password.value[i] == '%' || password.value[i] == '^' || password.value[i] == '&' || password.value[i] == '*' || password.value[i] == '(' || password.value[i] == ')' || password.value[i] == '-' || password.value[i] == '+' || password.value[i] == '=' || password.value[i] == '_' || password.value[i] == '[' || password.value[i] == ']' || password.value[i] == '{' || password.value[i] == '}' || password.value[i] == '|' || password.value[i] == ';' || password.value[i] == ':' || password.value[i] == '"' || password.value[i] == "'" || password.value[i] == '<' || password.value[i] == '>' || password.value[i] == ',' || password.value[i] == '.' || password.value[i] == '?' || password.value[i] == '/' || password.value[i] == '`' || password.value[i] == '~'){} spec = 1;

  }
  if(min == 0 || maj == 0 || num == 0 || password.value.length < 8) {
    password.style.borderColor = "red";
    checkpassword.innerHTML = "Password must contain at least 8 characters, 1 uppercase letter, 1 lowercase letter and 1 number";
    checkpassword.style.color = "red";
  }
  else{
    password.style.backgroundColor = "white";
    checkpassword.innerHTML = "";
  }
} )