<?php
/**
 * Fieldtype_count_and_limit
 * Count and limit the number of charaters permitted in a field
 *
 * @author Todd Smith-Salter <todd@12starsmedia.com>
 * @copyright 2015
 * @link https://github.com/12StarsMedia/count_and_limit
 * @license http://opensource.org/licenses/MIT
 *
 * Versions 0.1.0 Initial release
 */

/**
 * TODO:
 * - create html
 * - add script to count and limit
 */

class Fieldtype_count_and_limit extends Fieldtype
{
    public function render()
    {
        $html = '';

        $count = isset($this->field_config['count']) ? $this->field_config['count'] : null;
        $limit = isset($this->field_config['limit']) ? $this->field_config['limit'] : null;
        $display_name = $this->field_config['display'];

        // $html .= "<div class='input-block input-count-and-limit'>";

        $attributes = array(
            'name' => $this->fieldname,
            'tabindex' => $this->tabindex,
            'type' => 'text',
            'class' => 'text count_and_limit',
            'id' => 'id_'.$this->field_id . '-count_and_limit'
        );

        if ( ! is_null($limit) ) {
            $attributes['maxlength'] = $limit;
        }

        if ( ! is_null($count) ) {
            $attributes['oninput'] = '_'.$this->field_id.'()';
        }

        $html .= HTML::makeInput('text', $attributes);

        if ( ! is_null($count) ) {
            $html .= "<div class='count_and_limit__counter'>Character Count: ";
            $html .= "<span class='{$this->field_id}_count'>0</span>";
            if ( ! is_null($limit) ) {
                $html .= "/<span class='limit'>{$limit}</span>";
            }
            $html .= "</div>";
        }

        if ( ! is_null($count) ) {
            $html .= "<script>
                        function _{$this->field_id}() {
                            var input = document.querySelector('#id_{$this->field_id}-count_and_limit');
                            var length = input.value.length;

                            _{$this->field_id}_update_count(length);
                        }

                        function _{$this->field_id}_update_count(count) {
                            document.querySelector('.{$this->field_id}_count').innerHTML = count;
                        }

                        _{$this->field_id}();
                    </script>";
        }

        return $html;
    }
}