<?PHP if (!defined('TEXT_NODE_PHP')):define('TEXT_NODE_PHP', 1);
require("IDrawable.php");
class TextNode implements IDrawable{
	var $content;
	
	function __construct($content){
		$this->content = $content;
	}
	
	function setContent($content){
		$this->content = $content;
	}
	
	function draw(){
		return $this->content;
	}
	
	function __destruct(){
		
	}
}

endif ?>