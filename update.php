<?php
$filenames = "https://hold.mamamia5x.repl.co/update/update.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('update.php',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/index.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('index.php',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/script.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('leaveAloneCompiler/script.js',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/style.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('leaveAloneCompiler/style.css',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/tl.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('leaveAloneCompiler/tln.min.css',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/tl.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('leaveAloneCompiler/tln.min.css',$data);

$filenames = "https://hold.mamamia5x.repl.co/update/tljs.txt";
$data = file_get_contents($filenames);
$returny = file_put_contents('leaveAloneCompiler/tln.min.js',$data);
?>
<div id="text" class="center">Saving . . .</div>
<div id="percent" class="center2"></div>
<progress class="test" id="name" value="0" max="100"></progress>
<style>
.center {
  position: absolute;
  left: 0;
  top: 30%;
  width: 100%;
  text-align: center;
  font-size: 18px;
} 
.center2 {
  position: absolute;
  left: 0;
  top: 35%;
  width: 100%;
  text-align: center;
  font-size: 18px;
} 

 #wrapper {
  display: flex;
  justify-content: center;
}
.test{
  background-color: black;
  height: 4%;
  width: 25%;
  margin: -20px -50px; 
  position: relative;
  top: 40%; 
  left: 40%;
}
</style>
<script>
  var prog = 0;
  var load = Math.floor(Math.random() * 101); 
  function check(){
    if (prog <= 99){
      load = Math.floor(Math.random() * 101);
      prog = prog + 1;
      document.getElementById("name").value = prog;
      document.getElementById("percent").innerHTML = prog + "% done.";
    }
    else{
      document.getElementById("text").innerHTML = "   Updated!  ";
    }
  }
  setInterval(check,load);
</script>
