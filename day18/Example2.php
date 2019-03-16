<?php
	require_once "./Example.php";

	class Example2 extends Example{

		public $age = "20";
		protected $location = "Dhaka";
		private $mobile = "43574348";

		public function newOne(){
			//echo "IN one";
			$this->add();
		}
		protected function newTwo(){
			echo "IN two";
		}
		private function newThree(){
			echo "IN three";
		}

	}
	
?>