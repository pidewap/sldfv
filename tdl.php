<?php
error_reporting(0);
function maling($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}
return '';
}
}
$uar=array('Nokia2610/2.0 (07.04a) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0','Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1','Nokia6030/2.0 (y3.44) Profile/MIDP-2.0 Configuration/CLDC-1.1','NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1');
$uarr=array_rand($uar);
$uarand=$uar[$uarr];
ini_set('default_charset',"UTF-8");
ini_set('user_agent',$uarand."\r\naccept: text/html, application/xml;q=0.9, application/xhtml+xml, image/png, image/jpeg, image/gif, image/x-xbitmap, */*;q=0.1\r\naccept_charset: $_SERVER[HTTP_ACCEPT_CHARSET]\r\naccept_language: bahasa");
if(!empty($_GET['page'])){
$pages=''.$_GET['page'].'';
}else{
  $pages='1';
}
if(!empty($_GET['url'])){
  $urr=$_GET['url'];
}else{
  $urr='http://harianlagu.wapqu.com/site-all-music.html?to-page='.$pages.'';
}
$f=file(''.$urr.'');
$gg=@implode($f);
$bod=maling($gg, '<body', '</body>');
$bod=str_replace('?to-page=', '?page=', $bod);
$bod=str_replace('/site-download.html', '?url=http://harianlagu.wapqu.com/site-download.html', $bod);
if(!empty($_GET['url'])){
  
  $linkdownload=maling($bod, 'href="https://doc', '"');
  $linkart=maling($bod, '<b>File Name:</b> ', '.mp4');
echo '<center><form method="post">
url:<br><input name="url" size="50" value="'.$linkdownload.'"/><br>name:<br><input value="'.$linkart.'" name="name" size="50" />
<input name="submit" type="submit" />
</form>';
}else{
echo strip_tags($bod, '<a><div><br>');
}
?>
