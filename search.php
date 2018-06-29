<head>
		<title> MTG Rulling quick search</title>
</head>
<button class="btn btn-primary" onclick="location.assign('/');">Back</button>
<?php 
	require('vendor/autoload.php');
	require('View/Bootstrap.php');

	use mtgsdk\Card;
	use Google\Cloud\Translate\TranslateClient;

	$card_name=$_POST['card_name'];
	$cards = Card::where(['name' => $card_name])->all();

	$translate = new TranslateClient([
	    'key' => 'your google API key'
	]);
	
	foreach ($cards as $card) {
		if(isset($card->imageUrl)){
			require('View/Card_view.php');
		}
		else continue;

		if(isset($card->rulings)){
			$count=0;
		foreach($card->rulings as $ruling){
			if(isset($ruling)){
				$count++;
				$translation = $translate->translate($ruling['text'], [
		    		'target' => 'zh-TW'
				]);			
				require('View\ruling_view.php');	
				//echo $count.'.'.$ruling['text']."<br>";
				//echo $count.'.'.$translation['text']."<br>";
				}
			}
		}
		echo '<br>';
	}
?>
