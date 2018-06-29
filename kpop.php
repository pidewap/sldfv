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
  $urr='http://harianlagu.wapqu.com/site-kpop.html?to-page='.$pages.'';
}


$f=file(''.$urr.'');
$gg=@implode($f);
$bod=maling($gg, '<body>', '</body>');
$bod=str_replace('?to-page=', '?page=', $bod);
$bod=str_replace('/site-download.html', '?url=http://harianlagu.wapqu.com/site-download.html', $bod);
if(!empty($_GET['url'])){
  
  $linkdownload=maling($bod, 'http://cdn30.filewapqu.com/downloads9/', '"');
  $linkart=maling($bod, '<span>', '<');
  $linkt=maling($bod, '/img.php', '"');
echo '<center><br><form method="post" action="/upload.php" >
<input name="url" size="50" value="http://cdn32.filewapqu.com/server8.php'.$linkdownload.'"/>
<input name="submit" type="submit" />
</form><br><br>'.$linkart.'<br><br><textarea>http://cdn31.filewapqu.com/img.php'.$linkt.'</textarea><br><br><textarea>http://cdn30.filewapqu.com/downloads9/'.$linkdownload.'</textarea>';
}else{
echo strip_tags($bod, '<a><div><br>');
}
?>
