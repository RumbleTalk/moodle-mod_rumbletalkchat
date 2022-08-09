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
 * Prints a particular instance of rumbletalkchat
 *
 * @package    mod_rumbletalkchat
 * @copyright  202 Richard Jones richardnz@outlook.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 
 */

namespace mod_rumbletalkchat\output;

use renderable;
use renderer_base;
use templatable;
use stdClass;

/**
 * rumbletalkchat: Create a new view page renderable object
 *
 * @param object simnplemod - instance of rumbletalkchat.
 * @param int id - course module id.
 * @copyright  2020 Richard Jones <richardnz@outlook.com>
 */

class view implements renderable, templatable {

    protected $rumbletalkchat;
    protected $id;

    public function __construct($rumbletalkchat, $id) {

        $this->rumbletalkchat = $rumbletalkchat;
        $this->id = $id;
    }
    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {

        $data = new stdClass();

        $data->name = $this->rumbletalkchat->name;
        $data->width = $this->rumbletalkchat->width;
        $data->height = $this->rumbletalkchat->height;
        $data->code = $this->rumbletalkchat->code;

        // Create md5 from the hashcode
        $data->chatmd5 = md5($this->rumbletalkchat->code);

        $data->body = format_module_intro('rumbletalkchat',
                $this->rumbletalkchat, $this->id);

        return $data;
    }
}
