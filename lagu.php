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
$pages='page/'.$_GET['page'].'/';
}else{
  $pages='';
}

if(!empty($_GET['url'])){
  $urr=$_GET['url'];
}else{
  $urr='https://k2nblog.com/category/single-album/'.$pages.'';
}


$f=file(''.$urr.'');
$gg=@implode($f);
$bod=maling($gg, '</header>', '</body>');
$bod=str_replace('/"', '"', $bod);
$bod=str_replace('https://k2nblog.com/category/single-album/k-pop/page/', '/lagu.php?page=', $bod);
$bod=str_replace('https://k2nblog.com/category/single-album/page/', '/lagu.php?page=', $bod);
$bod=str_replace('https://k2nblog.com/', '/lagu.php?url=https://k2nblog.com/', $bod);
   $artist=maling($bod, 'description" content="',' - ');
if(!empty($_GET['url'])){
  $linkdownload=maling($bod, '/images/mega/logo.png"/>', '<footer>');
  $linkdownload=str_replace('/lagu.php?url=https://k2nblog.com/download/', '', $linkdownload);
  $linkdownload=str_replace('iTunes:', '<b>iTunes:</b>', $linkdownload);
  $linkdownload=str_replace('MP3:', '<b>MP3:</b>', $linkdownload);
   
   $sc=maling($gg, 'individual tracks:<br />', '</p>');
   $sc=str_replace('https://k2nblog.com/download/', '', $sc);
   $resultt=strip_tags($sc, '<a><br>');
   
   $linklink=$resultt;
   
   $dom = new DOMDocument;
@$dom->loadHTML($linklink, LIBXML_HTML_NODEFDTD);
$anchors = $dom->getElementsByTagName('a');
foreach ($anchors as $anchor) {
    $anchor->setAttribute('href', '' . base64_decode($anchor->getAttribute('href')));
}

$result = $dom->saveHTML();

  $result=str_replace('http://linkshrink.net/zfb5=', '', $result);
  $result=str_replace('https://www.4shared.com', 'http://www.4shared.one', $result);
  $result=str_replace('http://j.gs/15745813/https://userscloud.com/go/', '/sc.php?id=', $result);
   $result=str_replace('http://linkshrink.net/zfb5=https://userscloud.com/go/', '/sc.php?id=', $result);
   $result=str_replace('http://q.gs/15745813/https://userscloud.com/go/', '/sc.php?id=', $result);
   $result=str_replace('https://userscloud.com/go/', '/sc.php?id=', $result);
  $result=str_replace('http://q.gs/15745813/', '', $result);
  $result=str_replace('http://j.gs/15745813/', '', $result);
  $hdesc=maling($bod, '<p>Track List:', '</p>');
  $artist=maling($gg, 'property="og:description" content="', ' - ');
  $imgs=maling($gg, '<p><center><img src="', '"');
  $nulis=maling($gg, '<p><center>', '<h4>Download');
  $tnulis=maling($gg, '<title>Download ', '</title>');
  $nulis=str_replace('Track', '<br /><br />Track', $nulis);
  $nulis=strip_tags($nulis, '<br>');
    $linkdo=strip_tags($linkdownload, '<b><a><br>');
echo '<center><textarea>'.str_replace('https', 'http', $imgs).'</textarea><br/>
'.$result.'<p></p>'.$artist.'<p></p>'.$hdesc.'
<br><p><form action="http://k2nblog.exnaid.com/edit-1.html?act=db&typ=blog" method="post"> Title:<br><input type="text" name="blog_title" value="'.$tnulis.'"><br>Description:<br><textarea name="text">&lt;center&gt;&lt;img src="'.str_replace('https', 'http', $imgs).'" width="500" /&gt;&lt;/center&gt;'.htmlspecialchars($nulis).'&lt;br /&gt;&lt;br /&gt;&lt;h2&gt; &lt;span class=&quot;readdownload a&quot;&gt;&lt;a title=&quot;Download Direct Link '.$tnulis.' Mp3&quot; href=&quot;&amp;to-img='.htmlspecialchars(str_replace('https', 'http', $imgs)).'&quot; rel=&quot;nofollow&quot; target=&quot;_blank&quot;&gt;Download Now&lt;/a&gt;&lt;/span&gt;&lt;/h2&gt;</textarea><br>Db_type:<br><input type="text" name="blog_cat"><br><input type="submit" name="submit" class="db" id="db" value="Bikin"></form></p></center>';
}else{
echo strip_tags($bod, '<a><div><p><br>');
}
?>
