<?PHP if (!defined('I_PAGE_PHP')):define('I_PAGE_PHP', 1);
require("Control.php");
class Page extends Control{
	function __construct(){
		Control::__construct('form');
	}
	
	function __destruct(){
		
	}
}

endif;?>