<?php

$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
echo '<h1 class="page-title">Download '.$js['title'].'</h1><ul>';
for($i=0;$i<5;$i++){
echo '<li><a class="mp4" href="'.$d[$i]['id'].'" class="top">Download Video '.$d[$i]['label'].'</a></li>';
}
echo '</ul>';
?>
