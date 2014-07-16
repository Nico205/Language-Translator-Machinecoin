<?php

mkdir('./_site');

$usage = "Usage: php lang.php LANGUAGE CODE (de,ru,tk) TEMPLATE FILE (index,blockchain) \r\n";

if(empty($argv[1])) {

echo $usage;

exit;

}

if(empty($argv[2])) {

echo $usage;

exit;

}

$arg1 = $argv[1];
$arg2 = $argv[2];

if ($arg1 == "all"){

foreach(glob('./lang/*.php') as $lang){
	$filename = basename($lang,'.php');
	$file = substr($filename, 5);
	translate($file,$arg2);
}

}

else {

translate($arg1,$arg2);

}

function translate($lang,$template) {

try {

if (!file_exists('./lang/lang-' . $lang . '.php'))
  throw new Exception ('lang-' . $lang . '.php does not exist');
else
  require('./lang/lang-' . $lang . '.php'); 
}
catch(Exception $e) {    
  echo "Error: " . $e->getMessage() . "\r\n";
  exit;
}

$counter = "0";
$number = "1";


foreach(glob('./lang/*.php') as $code){
	$counter++;
	$filename = basename($code,'.php');
	$file = substr($filename, 5);
 	include('./lang/lang-'.$file.'.php');
	$lang_full = $trans[$file]['language'];
	${"link".$counter} = '<li><a href="../'.$file.'/index.html">'.$lang_full.'</a></li>';
}

$counters = range($number,$counter,1);

$end_count = array_pop($counters);

$count = "1";

$links = "";

foreach (range($count, $end_count) as $number){
    $links .= ${"link".$number};
}

mkdir('./_site/'.$lang);


$title = $trans[$lang]['title'];
$slogan = $trans[$lang]['slogan'];
$slogan2 = $trans[$lang]['slogan2'];
$about = $trans[$lang]['about'];
$idea = $trans[$lang]['idea'];
$download = $trans[$lang]['download'];

$blockchain = $trans[$lang]['blockchain'];
$exchange = $trans[$lang]['exchange'];
$shop = $trans[$lang]['shop'];
$miner = $trans[$lang]['miner'];
$pool = $trans[$lang]['pool'];
$faucet = $trans[$lang]['faucet'];
$paper_wallet = $trans[$lang]['paper_wallet'];
$irc = $trans[$lang]['irc'];
$forum = $trans[$lang]['forum'];
$installation = $trans[$lang]['installation'];

$blockchain_text = $trans[$lang]['blockchain_text'];
$exchange_text = $trans[$lang]['exchange_text'];
$shop_text = $trans[$lang]['shop_text'];
$miner_text = $trans[$lang]['miner_text'];
$pool_text = $trans[$lang]['pool_text'];
$faucet_text = $trans[$lang]['faucet_text'];
$paper_wallet_text = $trans[$lang]['paper_wallet_text'];
$irc_text = $trans[$lang]['irc_text'];
$forum_text = $trans[$lang]['forum_text'];

if ($template == "all") {

foreach(glob('./template/*.php') as $template){
	$filename = basename($template,'.php');
	$file = substr($filename, 9);
	require('./template/template-'. $file .'.php');
	if($file == "index"){
	touch('./_site/'. $lang .'/'. $file .'.html');
	file_put_contents('./_site/'. $lang .'/'.$file .'.html', $content);
	}	
	else {
	touch('./_site/'. $lang .'/'. $lang . '-'. $file .'.html');
	file_put_contents('./_site/'. $lang .'/' . $lang . '-'. $file .'.html', $content);
	}
}

}

else {

try {

if (!file_exists('./template/template-'. $template .'.php'))
  throw new Exception ('template-'. $template .'.php does not exist');
else
  require('./template/template-'. $template .'.php'); 
}
catch(Exception $e) {    
  echo "Error: " . $e->getMessage() . "\r\n";
  exit;
}

}

touch('./_site/'. $lang .'/'. $lang . '-'. $file .'.html');
file_put_contents('./_site/'. $lang .'/' . $lang . '-'. $file .'.html', $content);


mkdir('./_site/'. $lang .'/js');
mkdir('./_site/'. $lang .'/css');
mkdir('./_site/'. $lang .'/css/font');
mkdir('./_site/'. $lang .'/css/images');
mkdir('./_site/'. $lang .'/images');

$src = './assets/js';
$dst = './_site/'. $lang .'/js';
$files = glob("./assets/js/*.*");
      foreach($files as $file){
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      }

$src = './assets/css';
$dst = './_site/'. $lang .'/css';
$files = glob("./assets/css/*.*");
      foreach($files as $file){
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      }

$src = './assets/css/font';
$dst = './_site/'. $lang .'/css/font';
$files = glob("./assets/css/font/*.*");
      foreach($files as $file){
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      }

$src = './assets/css/images';
$dst = './_site/'. $lang .'/css/images';
$files = glob("./assets/css/images/*.*");
      foreach($files as $file){
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      }

$src = './assets/images';
$dst = './_site/'. $lang .'/images';
$files = glob("./assets/images/*.*");
      foreach($files as $file){
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      }

}
?>
