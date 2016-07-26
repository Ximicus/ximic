<?php
//$var = '';  
//$array = array();


$country = array(
	'Россия'=>array('Москва',"Питер"),
	'Украина'=>array('Донецк',"Киев"),
	
);

	echo '<pre>'.print_r($country,1).'</pre>'; //- выводит все Страны с городами

47:07

?>

…or create a new repository on the command line

echo "# ximic" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/Ximicus/ximic.git
git push -u origin master

…or push an existing repository from the command line

git remote add origin https://github.com/Ximicus/ximic.git
git push -u origin master

…or import code from another repository

You can initialize this repository with code from a Subversion, Mercurial, or TFS project.