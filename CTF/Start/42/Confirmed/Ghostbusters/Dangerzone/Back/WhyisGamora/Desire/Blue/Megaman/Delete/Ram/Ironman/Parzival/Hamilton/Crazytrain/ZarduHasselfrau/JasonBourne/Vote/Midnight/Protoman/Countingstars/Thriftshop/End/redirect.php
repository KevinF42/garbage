<link rel="stylesheet" href="../../../../../../../../../../../../../../../../../../../../../../../../../css/custom.css">

<div class="header">
   <h1>42.Tritech.io</h1>				
</div>

<div class="row">

<div class="col-3 menu">
  <ul>
<li><a href="">Congratulations! You have finished this test and have 
captured the flag. Litterally! Click on the flag to download it, and 
feel free to brag if you are second or third. (Yes. I know I made it 
but I also finished it first.) Congratulations. And please enjoy this 
flag.</a></li>
  </ul>
</div>

<div class="col-6">
	<h1>  
  <a href="redirect.php"> <img src="flag{Kurbo}.gif"width="320" height="320"></a>
<?php
// You can used any file extension to output the file for download
$file = 'flag{Kurbo}.gif';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
  </h1>
<div class="footer">
  <p>Welcome to My site!</p>
</div>
