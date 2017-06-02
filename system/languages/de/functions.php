<?php

/**
 * Returns months names for current language
 * @return array
 */
function lang_months(){
    return array(
        'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'December'
    );
}

/**
 * Returns days names for current language
 * @return array
 */
function lang_days(){
    return array(
        'So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'
    );
}

/**
 * Returns date for current language
 * @param string $date_string
 * @return string
 */
function lang_date($date_string){

    $eng_months = array(
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    );

    return str_replace($eng_months, lang_months(), $date_string);

}

/**
 * Converts string from current language to SLUG
 * @return string
 */
function lang_slug($string){

    $string    = strip_tags(trim($string));
    $string    = mb_strtolower($string, 'utf-8');
    $string    = str_replace(' ', '-', $string);

    $slug = preg_replace ('/[^a-zäößü0-9\-\/]/u', '-', $string);
    $slug = preg_replace('/([-]+)/i', '-', $slug);
    $slug = trim($slug, '-');

    $de_en = array(
"ä" => "ae", "ö" => "oe", "ß" => "ss", 'ü' => 'ue'
                    );

    foreach($de_en as $de=>$en){
        $slug = str_replace($de, $en, $slug);
    }

    if (!$slug){ $slug = 'untitled'; }
    if (is_numeric($slug)){ $slug .= strtolower(date('F')); }

    return $slug;

}

/**
 * Set locale information
 * @return mixed
 */
function lang_setlocale() {

    setlocale(LC_ALL, 'de_DE.UTF-8');
    setlocale(LC_NUMERIC, 'POSIX');

    return true;

}

/**
 * Locale name
 */
define('LC_LANGUAGE_TERRITORY', 'de_DE');