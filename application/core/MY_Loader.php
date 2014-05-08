<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{

	public $layout = "layout";

	public function views($name, $data = array())
	{
		$this->view($name,$data);
		return $this;
	}

	public function layout($name, $data = array(),$return = FALSE)
	{
		$the_view = $this->view($name,$data, TRUE);

		$data_pass["content"] = $the_view;
		$data_pass["title"]   = "";
		$data_pass["js"]      = "";
		$data_pass["css"]     = "";

		return $this->view($this->layout, $data_pass, $return);
	} 

}


/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */