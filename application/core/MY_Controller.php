<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public $layout = "layout";

	private $_data_view = array();

	public function render($name, $data = array())
	{
		$this->load->layout = $this->layout;

		$this->_data_view += $data;

		return $this->load->layout($name, $this->_data_view);
	}

	public function set_in_view($name, $value = NULL)
	{
		if(is_array($name))
			$this->_data_view += $name;
		else
			$this->_data_view[$name] = $value;
	}

	public function get_data_view()
	{
		return $this->_data_view;
	}

}


/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */