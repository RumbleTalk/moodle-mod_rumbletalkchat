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
 * English strings for rumbletalkchat
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod_rumbletalkchat
 * @copyright  2022 RumbleTalk, LTD {@link https://www.rumbletalk.com/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Rumbletalk Chat';
$string['modulenameplural'] = 'Rumbletalk Chats';
$string['modulename_help'] = 'Create an interactive chat inside your classroom';
$string['rumbletalkchat:addinstance'] = 'Add a new rumbletalkchat';
$string['rumbletalkchat:submit'] = 'Submit rumbletalkchat';
$string['rumbletalkchat:view'] = 'View rumbletalkchat';
$string['rumbletalkchatfieldset'] = 'Custom example fieldset';
$string['rumbletalkchat'] = 'rumbletalkchat';
$string['pluginadministration'] = 'rumbletalkchat administration';
$string['pluginname'] = 'rumbletalkchat';
$string['norumbletalkchats'] = 'No instances';

// General Settings Strings
$string['generalchatname'] = 'Chat name: ';
$string['generalchatname_help'] = 'This will be used to display the name of your chat.';
// Chat: Embed Strings (mod_form.php).
$string['embed_chat'] = 'Embed a Chat';
$string['embed_width'] = 'Chat Width: ';
$string['embed_height'] = 'Chat Height: ';
$string['embed_code'] = 'Chat Hashcode: ';
$string['code'] = 'How to get hashcode?';
$string['code_help'] = '<p>Where is a hashcode found?</p>
<p>You can find it at you <a href="https://cp.rumbletalk.com/login" target="_blank">Administrator panel</a>(https://cp.rumbletalk.com/login) at RumbleTalk.</p>
<p>It is represented by an 8 characters code.</p>';
$string['width'] = 'What is Chat Width?';
$string['height'] = 'What is Chat Height?';
$string['width_help'] = '<p>Chat\'s Width is based on pixels(px).</p><p>Please enter numbers only.</p>';
$string['height_help'] = '<p>Chat\'s Height is based on pixels(px).</p><p>Please enter numbers only.</p>';
$string['members'] = 'Read instructions first, before checking the box.';
$string['members_help'] = '<p>Before checking the box, check this link:</p>
<p><a href="https://rumbletalk.com/blog/index.php/knowledge-base/how-to-make-a-members-only-chat-in-a-moodle-page/" target="_blank">Members Only</a></p>';
$string['login_type'] = 'Login Type: ';
$string['members_only'] = 'Members Only';

// Error Strings.
$string['error_email_required'] = 'Please enter an email.';
$string['error_email_regex'] = 'Please enter a  valid email.';
$string['error_password_required'] = 'Please enter a password.';
$string['error_password_regex'] = 'Please enter a valid password.';
$string['error_numbers_only'] = 'Please enter numbers only';
$string['error_code_required'] = 'Please enter a hashcode';
$string['error_height_required'] = 'Please enter a height';
$string['error_width_required'] = 'Please enter a width';

// Mod form specific rumbletalkchat settings.
$string['title'] = 'Activity Title: ';