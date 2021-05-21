<?php

if ( ! function_exists('__e')) {
	function __e($key) {
		$CI =& get_instance();

		$CI->load->helper('cookie');

		$get_language_from_cookie = get_cookie('lang_is'); //mendapatkan data bahasa yang disimpan di cookie (Lang_setter.php)
		if (empty($get_language_from_cookie)) {
			$get_language_from_cookie = 'id'; //jika belum di atur, defaultnya `id`
		}

		$language = $get_language_from_cookie;

		/**
		 * `general` adalah nama file bahasanya,
		 * nama file harus memiliki suffix `_lang`, ex: `general_lang.php`, `terjemah_lang.php`, etc.
		 * 
		 * `indonesian` dan `english` adalah nama folder bahasa di folder `application/language`
		 */
		if ($language === 'id') {
			$CI->load->language('general', 'indonesian');
			$default = 'Terjemah dengan kunci <b>'. $key .'</b> tidak ada di file <u>'. APPPATH .'language/indonesian/general_lang.php</u>';
		}
		else {
			$CI->load->language('general', 'english');
			$default = 'Translate with key <b>'. $key .'</b> doesn\'t exist in <u>'. APPPATH .'language/english/general_lang.php</u> file';
		}

		/**
		 * $default adalah string default jika $key tidak ada
		 */
		$get_line = $CI->lang->line($key);
		
		return (empty($get_line) ? $default : $get_line);
	}
}
