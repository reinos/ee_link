<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Memberlist Class
 *
 * @package     ExpressionEngine
 * @category        Plugin
 * @author     	 Rein de Vries
 * @copyright       Copyright (c) 2015, Rein de Vries
 * @link        http://reinos.nl/add-ons/link
 */

$plugin_info = array(
	'pi_name'         => 'Link',
	'pi_version'      => '1.0',
	'pi_author'       => 'Rein de Vries',
	'pi_author_url'   => 'http://reinos.nl/add-ons/link',
	'pi_description'  => 'Auto url fixer',
	'pi_usage'        => Link::usage()
);

class Link
{

	public $return_data = "";

	// --------------------------------------------------------------------

	/**
	 * Memberlist
	 *
	 * This function returns a list of members
	 *
	 * @access  public
	 * @return  string
	 */
	public function __construct()
	{
		ee()->load->helper('url');
		$this->return_data = prep_url(ee()->TMPL->tagdata);
	}

	// --------------------------------------------------------------------

	/**
	 * Usage
	 *
	 * This function describes how the plugin is used.
	 *
	 * @access  public
	 * @return  string
	 */
	public static function usage()
	{
		ob_start();  ?>

		Convert to correct url

		{exp:link}[link]{/exp:link}

		<?php
		$buffer = ob_get_contents();
		ob_end_clean();

		return $buffer;
	}
	// END
}
/* End of file pi.memberlist.php */
/* Location: ./system/expressionengine/third_party/memberlist/pi.memberlist.php */