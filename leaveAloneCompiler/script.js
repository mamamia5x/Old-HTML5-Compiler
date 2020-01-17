function upload() {
  var filename = document.getElementById("iframe").value;
  localStorage.setItem("file", filename);
}
function load(){
  var see = localStorage.getItem("Enters");
  document.getElementById('iframe').src = "file.html";
  if (see == null){
    localStorage.setItem("Enters", 0);
    setTimeout(reload, 1000);
  }
  if (see % 2 == 1){
    localStorage.setItem("Enters", see + 1);
    setTimeout(reload, 1000);
  }
  function reload (){
    location.reload();
  }
  TLN.append_line_numbers('code');
  check();
}
function sometin() {
  window.open("file.html");
}
function reload(){
  location.reload();
}