<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin version info
 *
 * @package    local_lanalytics
 * @copyright  lanalytics <kttp://www.lanalytics.com>
 * @author     Thales Mesquita <thales@lanalytics.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once (dirname(dirname(dirname(__FILE__))).'/config.php');

//require_capability('local/lanalytics:manage', context_system::instance());
require_login(); 

$strheading = get_string('dashboardprototype', 'local_lanalytics');
$PAGE->set_pagelayout('standard');
$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/local/lanalytics/dashboard_prototype.php'));
$PAGE->set_title( $strheading );
$PAGE->navbar->add($strheading);

echo $OUTPUT->header();

echo $OUTPUT->box_start();

echo '<span style="align:center">';
echo '<img src="pix/dashboard.png" width="800" />';
echo '</span>';

echo '<br />';
echo 'Mostrar texto aqui';

echo $OUTPUT->footer();