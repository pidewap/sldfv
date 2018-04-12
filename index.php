<?php
echo '<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Download Link</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://satriamusic.com/css/css_css_style.css" />
    </head>
    <body><div class="container">';

$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
echo '<h1 class="page-title">Download '.$js['title'].'</h1><div class="info">';
for($i=0;$i<5;$i++){
echo '<a class="mp4" href="'.$d[$i]['id'].'" class="top">Download Video '.$d[$i]['label'].'</a><br>';
}

echo '</div></div></body></html>';
?>
