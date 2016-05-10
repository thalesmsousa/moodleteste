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

function local_lanalytics_extends_navigation(global_navigation $navigation){
    global $CFG;


    $nodeLanalytics = $navigation->add(get_string('pluginname', 'local_lanalytics'));
    $nodeLanalytics->add(get_string('dashboardprototype', 'local_lanalytics'), new moodle_url($CFG->wwwroot.'/local/lanalytics/dashboard_prototype.php'));
    $nodeLanalytics->add(get_string('reportsprototype', 'local_lanalytics'), new moodle_url($CFG->wwwroot.'/local/lanalytics/reports_prototype.php'));
    $nodeLanalytics->add(get_string('interferenceprototype', 'local_lanalytics'), new moodle_url($CFG->wwwroot.'/local/lanalytics/interference_prototype.php'));
    $nodeLanalytics->add(get_string('alertsprototype', 'local_lanalytics'), new moodle_url($CFG->wwwroot.'/local/lanalytics/alerts_prototype.php'));
    
}