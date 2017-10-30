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
 * Presets settings page file.
 *
 * @package    theme_walrus
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_walrus_presets', get_string('presets_settings', 'theme_walrus'));

// Preset.
$name = 'theme_walrus/preset';
$title = get_string('preset', 'theme_walrus');
$description = get_string('preset_desc', 'theme_walrus');
$presetchoices = '';
// Add preset files from theme preset folder.
$iterator = new DirectoryIterator($CFG->dirroot . '/theme/walrus/scss/preset/');
foreach ($iterator as $presetfile) {
    if (!$presetfile->isDot()) {
        $presetname = substr($presetfile, 0, strlen($presetfile) - 5); // Name - '.scss'.
        $presetchoices[$presetname] = ucfirst($presetname);
    }
}
// Add preset files uploaded.
$context = context_system::instance();
$fs = get_file_storage();
$files = $fs->get_area_files($context->id, 'theme_walrus', 'preset', 0, 'itemid, filepath, filename', false);
foreach ($files as $file) {
    $pname = substr($file->get_filename(), 0, strlen($file->get_filename()) - 5); // Name - '.scss'.
    $presetchoices[$pname] = ucfirst($pname);
}
// Sort choices.
natsort($presetchoices);
$default = 'default';
$setting = new admin_setting_configselect($name, $title, $description, $default, $presetchoices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Preset files setting.
$name = 'theme_walrus/presetfiles';
$title = get_string('presetfiles', 'theme_walrus');
$description = get_string('presetfiles_desc', 'theme_walrus');

$setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
array('maxfiles' => 20, 'accepted_types' => array('.scss')));
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
