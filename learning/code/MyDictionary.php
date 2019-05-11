<?PHP if (!defined('MY_DICTIONARY_PHP')):define('MY_DICTIONARY_PHP', 1);

class MyDictionary{
	var $values;
	public function __construct($values = []){
		$this->values = $values;
	}
	
	public function __get($varname){
		return isset($this->values[$varname])? 
			$this->values[$varname]:
			null;
	}
	
	public function __set($varname, $value){
		$this->values[$varname] = $value;
	}
	
	public function getValues(){
		return $this->values;
	}
}
endif;?>