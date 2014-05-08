#1 CodeIgniter Layout

Systéme de layout déstiné a codeigniter.

Permet de simplifier l'utilisation des layouts dans codeigniter!

#2 Manuel d'utilisation

#3 Installation :

1. Télécharger ou cloner le répository!
2. deplacé les deux fichiers MY_Loader.php et MY_Controller.php dans votre dossier ./application/core/
3. Et voila le code fonctionne et vous avez un systéme de layout en place! 

#3 Utilisation : 

#5 Pour charger des vues à la volé :

```php
return $this->load->views("layout/header")
				  ->views("layout/sidebar")
				  ->views("controller/action",$my_data)
				  ->view("layout/footer");
```

#5 Pour charger un layout avec une vue :

```php
$data_view["title"] = "Le titre de la page!";

return $this->load->layout("votre_vue", $data_view, FALSE);
```

Vous pouvez mettre le dérnier paramétres a TRUE si vous voulez stocké le layout dans une variable!

Votre layout devra ressemblé a ça et doit étre stocké dans ./application/views/(layout.php) : 

```php
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body>

	<?php echo $content ?>

</body>
</html>
```

Pour spécifier le nom du layout vous devrez modifier la valeur de $layout du loader ou celle du controller

```php
$this->load->layout = "monlayout";
```

ou

```php
$this->layout = "monLayout";
```

#5 Encore plus simple avec le controlleur :

Grace au fichier MY_Controller.php vous aurez aussi deux raccourçis : 

Pour loader un layout avec une vue : 

```php
return $this->render("controller/vue",$data);
```

et pour faire passez des variable a la vue : 

```php
$this->set_in_view("nom","Yassine");
```

ou 

```php
$this->set_in_view(array(
	"name" => "Yassine",
));
```

Voila les principale fonctionnalité du code :D, Pour en connaitre plus vous avez l'API Documentation !