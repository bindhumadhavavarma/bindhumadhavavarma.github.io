function sayhello(){
  var name=document.getElementById("name").value;
  var mes="Hello "+name+" !";
  document.getElementById("content").textContent=mes;
}