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
 * Colours settings page file.
 *
 * @package    theme_walrus
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_walrus_colours', get_string('colours_settings', 'theme_walrus'));

// Raw SCSS to include before the content.
$setting = new admin_setting_scsscode('theme_walrus/scsspre',
    get_string('rawscsspre', 'theme_walrus'), get_string('rawscsspre_desc', 'theme_walrus'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandprimary.
$name = 'theme_walrus/brandprimary';
$title = get_string('brandprimary', 'theme_walrus');
$description = get_string('brandprimary_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandsuccess.
$name = 'theme_walrus/brandsuccess';
$title = get_string('brandsuccess', 'theme_walrus');
$description = get_string('brandsuccess_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandwarning.
$name = 'theme_walrus/brandwarning';
$title = get_string('brandwarning', 'theme_walrus');
$description = get_string('brandwarning_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $branddanger.
$name = 'theme_walrus/branddanger';
$title = get_string('branddanger', 'theme_walrus');
$description = get_string('branddanger_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandinfo.
$name = 'theme_walrus/brandinfo';
$title = get_string('brandinfo', 'theme_walrus');
$description = get_string('brandinfo_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $graybase.
$name = 'theme_walrus/brandgraybase';
$title = get_string('brandgray', 'theme_walrus');
$description = get_string('brandgray_desc', 'theme_walrus');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// Raw SCSS to include after the content.
$setting = new admin_setting_scsscode('theme_walrus/scss', get_string('rawscss', 'theme_walrus'),
    get_string('rawscss_desc', 'theme_walrus'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
