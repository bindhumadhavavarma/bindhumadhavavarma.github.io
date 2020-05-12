function sayhello(event){
  var name=document.getElementById("name").value;
  var mes="Hello "+name+" !";
  document.getElementById("content").textContent=mes;
  this.textContent="said it";
}
function regenerate(event){
  document.getElementById("button").textContent="say it";
}
document.querySelector("#button").addEventListener("click",sayhello);
document.querySelector("#button").addEventListener("blur",regenerate);