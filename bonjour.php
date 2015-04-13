<?php
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path); 
	$XML = simplexml_load_file("bonjour.xml");
	$result = $XML->xpath('//trad[@langue="'.$elements[count($elements)-1].'"]');
	if($result)
	{ ?>
<h1>Comment dire bonjour en <?php echo $elements[count($elements)-1]; ?>?</h1>
<h2>Pas dur  : bonjour se dit " <?php echo $result[0]; ?>" :-)</h2>
<?php	}else { ?>
<h1>Web Service - Bonjour </h1>
<h2>Il suffit de taper dans l'url /bonjour/XXXXXX</h2>
<h3>XXXXX representant la langue dans laquelle vous voulez traduire bonjour ! </h3>
<p>
	Quelques regles a respecter : 
	<ul>
		<li>La langue tout en MAJUSCULE</li>
		<li>Si la langue contient un espace, il faut mettre un tiret du 6  '-'</li>
	</ul>
</p>
<?php
}
	
?>