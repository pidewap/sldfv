<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width" />
      <title>Download Lagu BTS (방탄소년단) &#039;DNA&#039; Chicken Cover MP3 Gratis - SatriaMusic.com</title>
      <meta name="description" content="Gratis Download Lagu dan Video BTS (방탄소년단) &#039;DNA&#039; Chicken Cover Format mp3 dan mp4 Gratis disini dengan dengan mudah." />
      <meta name="google-site-verification" content="FdDpLZg-TU1KKRvNjzMwwaWtu8Qg19l2kD5j6Jlgn04" />
      <meta property="og:description" content="Gratis Download Lagu dan Video BTS (방탄소년단) &#039;DNA&#039; Chicken Cover Format mp3 dan mp4 Gratis disini dengan dengan mudah." />
      <meta property="og:site_name" content="SatriaMusic.com" />
      <meta property="og:title" content="Download Lagu BTS (방탄소년단) &#039;DNA&#039; Chicken Cover MP3 Gratis" />
      <meta property="og:url" content="http://satriamusic.com/download/bts-%28%EB%B0%A9%ED%83%84%EC%86%8C%EB%85%84%EB%8B%A8%29-%27dna%27-chicken-cover/AM2RM8weSMY" />
      <link rel="stylesheet" type="text/css" media="screen" href="http://satriamusic.com/css/css_css_style.css" />
      <link rel="icon" href="http://satriamusic.com/images/thumb.png" type="image/x-icon"/>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    </head>


<body>


      <div class="container">
      <header id="header" class="clearfix">
        <div class="site-info">
          <div class="site-name">
            <a href="http://www.satriamusic.com">SatriaMusic.com</a>
          </div>

          <div class="site-tagline">Download Lagu dan Video Terbaru Gratis</div>
        </div>
      </header>
      <form action="http://satriamusic.com/search" id="search_form" method="post" class="search-form clearfix">
              <input class="search_input" type="text" name="q" placeholder="Enter video you are searching for..." size="30"/>
        </form>';

$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
echo '<h1 class="page-title">Download '.$js['title'].'</h1><div class="info">';
for($i=0;$i<5;$i++){
echo '<a class="mp4" href="'.$d[$i]['id'].'" class="top">Download Video '.$d[$i]['label'].'</a><br>';
}

echo '</div></div></body></html>';
?>
