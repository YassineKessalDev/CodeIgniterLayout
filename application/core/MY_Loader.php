<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Modification de la class CI_Loader de codeigniter pour loader les layout
*
* @package YassineKessalDev\takadum\CodeIgniterEvolution
* @author Yassine Kessal
* @link https://github.com/YassineKessalDev/CodeIgniterLayout
* @version 1.0
*/
class MY_Loader extends CI_Loader
{

	/**
	* Le chamin du layout par défault a utilisé
	*
	* @var string $layout le Chemain du layout
	* @access public
	*/
	public $layout = "layout";

	/**
	* Permet de charger une vue et de retourner l'objet loader
	*
	* @param string $name Le chemin ver votre vue
	* @param array $data Les données a faire passée a votre vue
	* @return object L'instance "$this" de la classe Loader
	*/
	public function views($name, $data = array())
	{
		$this->view($name,$data);
		return $this;
	}

	/**
	* Permet de charger un layout avec votre vue contenu dans la variable $content
	*
	* @param string $name Le chemain de votre vue
	* @param array $data Les données a faire passée a votre vue
	* @param boolean $return TRUE: pour la sauvgarder dans une variable. FALSE: pour l'afficher grace a echo
	* @return string Le layout avec votre vueet ses données
	*/
	public function layout($name, $data = array(),$return = FALSE)
	{
		$the_view = $this->view($name,$data, TRUE);

		$data_pass["content"] = $the_view;

		return $this->view($this->layout, $data_pass, $return);
	} 

}


/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */