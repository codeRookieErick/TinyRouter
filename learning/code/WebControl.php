<?PHP if (!defined('WEB_CONTROL_PHP')):define('WEB_CONTROL_PHP', 1);
require("Control.php");
class WebControl extends Control{
	var $controls;
	var $tagName;
	var $attributes;
	var $styles;
	static $ids = array(''=>'');
	
	function __construct($tagName, $attributes = [], $styles = [],$controls = []){
		Control::__construct($tagName, $attributes, $styles, $controls);
		if(!array_key_exists($tagName, self::$ids)){self::$ids[$tagName] = 0;}
		self::$ids[$tagName] = self::$ids[$tagName] + 1;
		$this->attributes->id = $tagName."_".self::$ids[$tagName];
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