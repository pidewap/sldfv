<title>Remote upload made by wRock.Org</title>
<center>
<a href="http://www.wrock.org/" title="Sharing Latest Tips Tricks and Tutorials">
			
<img src="http://cdn.wrock.org/logo.png" alt="Sharing Latest Tips Tricks and Tutorials">
		</a>
	<br><p><br></p><form method="post">
url:<br><input name="url" size="50" /><br>name:<br><input name="name" size="50" />
<input name="submit" type="submit" />
</form>

<b>Instruction:</b>
<p>Sample values for ftp and http</p>
<p>ftp://username:password@example.com/path/to/file.png</p>
<p>ftp://example.com/path/to/file.png</p>
<p>http://www.example.com/path/to/file.png</p>
<p><a href="http://www.wrock.org/">Sharing Latest Tips Tricks and Tutorials</a></p>
<?php
// maximum execution time in seconds
set_time_limit (24 * 60 * 60);
if (!isset($_POST['submit'])) die();
// folder to save downloaded files to. must end with slash
$destination_folder = 'download/';
$url = $_POST['url'];
	$name = pathinfo($url);
$newfname = $destination_folder . $_POST['name'] . ".mp4";
$file = fopen ($url, "rb");
if ($file) {
  $newf = fopen ($newfname, "wb");
  if ($newf)
  while(!feof($file)) {
    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
  }
}
if ($file) {
  fclose($file);
}
if ($newf) {
  fclose($newf);
}
?>
</center>
