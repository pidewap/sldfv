<?php

$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
echo '<h1 class="page-title">Download '.$js['urls'].'</h1>';
for($i=0;$i<5;$i++){
echo '<a class="mp4" href="'.$d[$i]['id'].'" class="top">Download Video '.$d[$i]['label'].'</a><br>';
}
?>
