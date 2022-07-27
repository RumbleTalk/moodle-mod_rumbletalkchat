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
 * Prints a particular instance of rumbletalk_chat
 *
 * @package    mod_rumbletalk_chat
 * @copyright  2022 RumbleTalk, LTD {@link https://www.rumbletalk.com/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_rumbletalk_chat\output\view;
require_once('../../config.php');

// We need the course module id (id) or
// the rumbletalk_chat instance id (n).
$id = optional_param('id', 0, PARAM_INT);
$n  = optional_param('n', 0, PARAM_INT);

if ($id) {
    $cm = get_coursemodule_from_id('rumbletalk_chat', $id, 0, false,
            MUST_EXIST);
    $course = $DB->get_record('course',
            array('id' => $cm->course), '*', MUST_EXIST);
    $rumbletalk_chat = $DB->get_record('rumbletalk_chat',
            array('id' => $cm->instance), '*', MUST_EXIST);
} else if ($n) {
    $rumbletalk_chat = $DB->get_record('rumbletalk_chat', array('id' => $n), '*',
            MUST_EXIST);
    $course = $DB->get_record('course',
            array('id' => $rumbletalk_chat->course), '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('rumbletalk_chat', $rumbletalk_chat->id,
            $course->id, false, MUST_EXIST);
}

// Print the page header.
$PAGE->set_url('/mod/rumbletalk_chat/view.php', array('id' => $cm->id));

require_login($course, true, $cm);

// Set the page information.
$PAGE->set_title(format_string($rumbletalk_chat->name));
$PAGE->set_heading(format_string($course->fullname));

// Check for intro page content.
if (!$rumbletalk_chat->intro) {
    $rumbletalk_chat->intro = '';
}
// Start output to browser.
echo $OUTPUT->header();

// Call classes/output/view and view.mustache to create output.
echo $OUTPUT->render(new view($rumbletalk_chat, $cm->id));

// End output to browser.
echo $OUTPUT->footer();
