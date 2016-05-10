<?php
namespace SmartKlass\xAPI;

/**
 * xAPI failed Verb
 *
 * @package    local_smart_klass
 * @copyright  KlassData <kttp://www.klassdata.com>
 * @author     Oscar Ruesga <oscar@klassdata.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class failed extends VerbObject {

    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/failed';

        $this->display['en-US'] = 'failed';
        $this->display['es'] = 'fallado';
    }

}
