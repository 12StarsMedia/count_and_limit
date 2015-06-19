<?php
/**
 * Hooks_count_and_limit
 * Count and limit the number of charaters permitted in a field
 *
 * @author Todd Smith-Salter <todd@12starsmedia.com>
 * @copyright 2015
 * @link https://github.com/12StarsMedia/count_and_limit
 * @license http://opensource.org/licenses/MIT
 *
 * Versions 0.1.0 Initial release
 */
class Hooks_count_and_limit extends Hooks {
  public $meta = array(
     'name'       => 'Count and Limit Input Field Type',
     'version'    => '1.0.0',
     'author'     => 'Todd Smith-Salter',
     'author_url' => 'https://github.com/12StarsMedia/count_and_limit'
   );
  /**
   *  We'll add our CSS styles to the head here.
   */
  public function control_panel__add_to_head() {
    // If we're not on the /publish page, then don't load the CSS.
    if ( URL::getCurrent(false) != '/publish' ) { return ""; }
    return $this->css->link('count_and_limit.min.css');
  }
}