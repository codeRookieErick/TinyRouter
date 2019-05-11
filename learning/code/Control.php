<?PHP if (!defined('CONTROL_PHP')):define('CONTROL_PHP', 1);
require("IDrawable.php");
require("MyDictionary.php");
class Control implements IDrawable{
	var $controls;
	var $tagName;
	var $attributes;
	var $styles;
	
	function __construct($tagName, $attributes = [], $styles = [],$controls = []){
		$this->tagName = $tagName;
		$this->attributes = new MyDictionary($attributes);
		$this->styles = array();
		$this->controls = $controls;
	}
	
	function add($control){
		if($control instanceof IDrawable and $this != $control){
			array_push($this->controls, $control);
		}
	}
	
	function draw(){
		$res = '';
		$attributesString = '';
		$stylesString = '';
		foreach($this->attributes->getValues() as $key => $value){
			$attributesString.=' '.$key.'="'.$value.'"';
		}
		foreach($this->styles as $key => $value){
			$stylesString.="$key:$value ";
		}
		foreach($this->controls as $control){
			$res.=$control->draw();
		}
		return "<$this->tagName $attributesString style=\"$stylesString\">".
		$res.
		"</$this->tagName>";
	}
	
	function __destruct(){
		
	}
}

endif ?>