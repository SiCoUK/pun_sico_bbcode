<?php
/**
 * sico_bbcode functions
 *
 * @copyright Copyright (C) 2009 Simon Corless
 * @package sico_bbcode
 */

if (!defined('FORUM'))
	die();

/**
 * Handle the subscript tag [sub]
 * 
 * @param string $content The contain to place within the tags
 * @return string
 */
function handle_sub_tag($content)
{
    return '<sub>' . $content . '</sub>';
}

/**
 * Handle the superscript tag [sup]
 * 
 * @param string $content The contain to place within the tags
 * @return string
 */
function handle_sup_tag($content)
{
    return '<sup>' . $content . '</sup>';
}

/**
 * Handle the strike tag [sup]
 * 
 * @param string $content The contain to place within the tags
 * @return string
 */
function handle_strike_tag($content)
{
    return '<del>' . $content . '</del>';
}

/**
 * Handle the line tag [line]
 * 
 * @return string
 */
function handle_line_tag()
{
    return '</p><hr /><p>';
}