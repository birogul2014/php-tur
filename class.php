	<?php
	define('uyghur2014', "uyghur2014.github.io/home");
	function uyhgur(){

		echo uyghur2014;
	}
	class taz{
		public static $url="www.ugineyli.com";
		public $name="tormahiri 23423";
		public function get(){
			echo $this->name;

		}
		public function urls(){

			echo $this::$url;
		}
		public function arrays($index){

			$arrayName = array('hanzu'
				=>"chinese people",
				'baidu'=>"chinese search engine"
				
				);
			echo $arrayName[$index];
		}

	}


	trait some{
		public function hei(){
			echo "good luck ";
		}
	}
	
	class yegi extends taz{
		use some;
		public function net(){
			echo 11111111;
			$this->get();
		}
		public function hanzu(){
			$this->arrays('baidu');
		}
	}
	$new=new yegi();
	//$new->net();
	$new->hei();
	//$new->hanzu();
	// taz intialize
	//echo taz::$url;
	$tz=new taz();
	$tz->urls();



	?>