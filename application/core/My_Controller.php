<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_Controller Class
 *
 *
 * @package Project Name
 * @subpackage  Controllers
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->form_validation->set_error_delimiters('<div class="form-error">', '</div>');
    }
}


