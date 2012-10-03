<?php
	/**
	 * Elgg 1.8 wrapper for H5F.
	 * This is an Elgg 1.8 wrapper for h5f, providing HTML5 form validation
	 * to older browsers.
	 *
	 * @licence GNU Public License version 2
	 * @link https://github.com/ryanseddon/H5F
	 * @link http://www.marcus-povey.co.uk
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 */
	
	function h5f_init()
	{
		$js = elgg_get_simplecache_url('js', 'h5f/h5f');
		elgg_register_simplecache_view('js/h5f/h5f');
		elgg_register_js('h5f.h5f', $js);
		
		elgg_load_js('h5f.h5f');
	}
	
	
	elgg_register_event_handler('init','system','h5f_init');
