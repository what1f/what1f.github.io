<?php
@highlight_file(__FILE__);
class Viking {
	public $flag;
	public $number;

	function __construct() {
		$this->flag = 'Viking';
		$this->number = 1;
	}

	function __wakeup() {
		if($this->number != 1){
			$this->number = 1;
		}
		echo "You are close to the answer!";
	}

	function __destruct() {
		if($this->number == 2){
			echo "Congratulations!";
		}
	}
}

$a = $_POST['a'];
$b = $_GET['b'];
$exp = $_REQUEST['exp'];

if(isset($a) && isset($b)) {
	echo "You have passed the first level";
	if(($a!=$b) && (md5($a)==md5($b))) {
		unserialize($exp);
    }
}
?>
