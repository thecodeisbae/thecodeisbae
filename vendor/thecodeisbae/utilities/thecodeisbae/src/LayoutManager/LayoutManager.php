<?php 

/**
 * The class responsible of extends pages and adding conteht to layout pages
 * Usage :
 *  On the extended file you need to set different section which will be called on layout page: 
 *      Eg : 
 *          First of all init the LayoutManager
 *          <?php LayoutManager::init() ?>
 *          <?php LayoutManager::start_section(section_name) ?>
 *              HTML content of the section
 *          <?php LayoutManager::end_section(section_name) ?>
 * 
 *          <?php LayoutManager::set(layout_page) ?>
 * 
 *  On the layout file you need to call for the section part on the page
 *      Eg :
 *          <html>
 *              <head>
 *                  <?= LayoutManager::section('head') ?>
 *              </head>
 *              <body>
 *                  <?= LayoutManager::section('content') ?>
 *                  <?= LayoutManager::section('script') ?>
 *              </body>
 *          </html>
 *          
 *  
**/

namespace thecodeisbae\LayoutManager;

final class LayoutManager
{
    static protected $sections = []; /** Type array for sections storage */

    static function set($layout_file) /** Set the layout file and hydrate it */
    {
        include $layout_file;
    }

    static function init() /** Init sections array */
    {
        self::$sections = [];
    }

    static function add_section($section_name)
    {
        self::$sections[$section_name] = '';
    }

    static function start_section($section_name)
    {
        self::add_section($section_name);
        ob_start();
    }

    static function end_section($section_name)
    {
        self::$sections[$section_name] = ob_get_clean();
    }
    
    static function section($section_name) /** Return content of the section named section_name */
    {
        if(array_key_exists($section_name,self::$sections))
            return self::$sections[$section_name];
        return ;
    }

}