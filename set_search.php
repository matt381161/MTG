<head>
		<title> MTG Rulling quick search</title>
</head>
<button class="btn btn-primary" onclick="location.assign('/');">Back</button>
<?php 
	require('vendor/autoload.php');
	require('View/Bootstrap.php');
	
	use mtgsdk\Card;
	use Google\Cloud\Translate\TranslateClient;

	$set_name=$_POST['set_name'];
	$number = $_POST['number'];

	$cards = Card::where(['set' => $set_name])->where(['number' => $number])->all();

	$translate = new TranslateClient([
	    'key' => 'AIzaSyDoFkOwiDlyFMroa1Eful5acXZPb2y8oIc'
	]);
	
	foreach ($cards as $card) {
		if(isset($card->imageUrl)){
			//echo '['.$card->name."]<br>";
			//echo '<img src='.$card->imageUrl.'><br>';
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
