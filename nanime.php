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


if(!empty($_GET['url'])){
  $urr=$_GET['url'];
}else{
  $urr='https://nanime.in/';
}


$f=file(''.$urr.'');
$gg=@implode($f);
$bod=maling($gg, '</head>', '</html>');
$bob=maling($bod, '<div class="sidebar-kiri">','<div class="col-md-7">');
$bob=str_replace('href="/anime/', 'href="/nanime.php?url=https://nanime.in/anime/', $bob);
$bob=str_replace('</a>', '</a></li>', $bob);
$bob=str_replace('<a ', '<li><a ', $bob);
if(!empty($_GET['url'])){
$sc=maling($bod, '<div class="episodelist list-group">', '</div>');
$sc=str_replace('href="/episode/', 'href="/nanime.php?url=https://nanime.in/episode/', $sc);
  $sc=str_replace('</a>', '</a></li>', $sc);
$sc=str_replace('<a ', '<li><a ', $sc);
echo strip_tags($sc, '<a><li>');
  $iscc=maling($bod, 'title="Nonton anime: http', '"');
  echo '<center><img src="http'.$iscc.'"><p></p>';
  $scc=maling($bod, '<div class="col-md-12 text-center">', '</div></div></div></div></div>');
$scc=str_replace('href="http://topddl.net/file/', 'href="/tdl.php?url=http://topddl.net/file/', $scc);
  $scc=str_replace('</a>', '</a></li>', $scc);
$scc=str_replace('<a ', '<li><a ', $scc);
  $scc=str_replace(' target="_blank" ', ' ', $scc);
echo strip_tags($scc, '<a><li>');
  
  
}else{
echo strip_tags($bob, '<a><div><li><br>');
}
?>
