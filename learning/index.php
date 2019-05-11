<?PHP
require(".\code\WebControl.php");
require(".\code\TextNode.php");


function createLink($text, $address){
	$result = new WebControl('a');
	$result->add(new TextNode($text));
	$result->attributes->href = $address;
	return $result;
}

print(createLink('Hola', 'https://www.google.com')->draw());
print(createLink('Hola', 'https://www.google.com')->draw());
?>