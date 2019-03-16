<?php
	
	class Example{
		public $name = "Nur Nobi";
		protected $city = "Feni";
		private $country = "Bangladesh";
		public $value;

		/*public function __construct($data){
			echo $this->value = $data;
			echo "<br>";
		}*/

		public function add(){
			//echo "in add";
			echo $this->sub();
		}
		protected function sub(){
			echo "In sub";
		}
		private function div(){
			echo "In div";
		}
	}

?>
