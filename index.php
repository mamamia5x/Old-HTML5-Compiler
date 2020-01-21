<!DOCTYPE html>
<html>
<script src="/leaveAloneCompiler/script.js"></script>
<script src="/leaveAloneCompiler/tln.min.js"></script>
<script src="https://updatechecker.mamamia5x.repl.co/script.js"></script>
<link rel="stylesheet" type="text/css" href="/leaveAloneCompiler/style.css">
<link rel="stylesheet" type="text/css" href="/leaveAloneCompiler/tln.min.css">
<body onload="load()">
<!--div class="topnav">
  <a onclick="click0 ()">file.html</a>
  <a onclick='upload ()'>Upload File</a>
</div-->
<form method="POST">
  _<input oninput="upload ()" class="file" type="text" name="locations" placeholder="Enter file name here"></input>
  <button>Open File</button>
</form>
<?php
  if(isset($_POST['locations'])){
    $return2 = file_put_contents('leaveAloneCompiler/filename.txt',$_POST['locations']);
  }
?>
<!-- class is locations for following p text, keep disabled for debugging -->
<!--button onclick="TogetherJS(this); return false;">Start TogetherJS</button-->
<!-- click0 means that it's to show file.html-->

<form method="POST" action="update.php">
<button id="butt" disabled>Update</button>
</form>
<p style="color: #ffff66;" id="update">V.0.5.1</p>
<p style="color: #ffff66;" id="error">Couldn't check version, might be because of internet.</p>

<form method="POST">
  <button onclick="sometin ()">Run in new Window</button>
  <button onclick="reload ()">Save</button> <br>
  <div id="wrapper">
    <textarea id="code" name="code" spellcheck="false"><?php
    // $filename = $_POST["locations"];
    $current = file_get_contents('leaveAloneCompiler/filename.txt');
    echo file_get_contents($current);
    ?></textarea>
  </div>
</form>
<?php
if(isset($_POST['code'])){
  $current = file_get_contents('leaveAloneCompiler/filename.txt');
  $return = file_put_contents($current, $_POST['code']);
  echo("<meta http-equiv='refresh' content='0'>");
}
?>
<iframe id="iframe" src="file.html"></iframe>
</body>
</html>
