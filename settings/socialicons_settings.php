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
 * Links settings page file.
 *
 * @package    theme_walrus
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Social Network Settings */
$page = new admin_settingpage('theme_walrus_social', get_string('socialheading', 'theme_walrus'));
$page->add(new admin_setting_heading('theme_walrus_social', get_string('socialheadingsub', 'theme_walrus'),
        format_text(get_string('socialdesc' , 'theme_walrus'), FORMAT_MARKDOWN)));

// Website url setting.
$name = 'theme_walrus/website';
$title = get_string('website', 'theme_walrus');
$description = get_string('websitedesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_walrus/blog';
$title = get_string('blog', 'theme_walrus');
$description = get_string('blogdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_walrus/facebook';
$title = get_string('facebook', 'theme_walrus');
$description = get_string('facebookdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_walrus/flickr';
$title = get_string('flickr', 'theme_walrus');
$description = get_string('flickrdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Twitter url setting.
$name = 'theme_walrus/twitter';
$title = get_string('twitter', 'theme_walrus');
$description = get_string('twitterdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Google+ url setting.
$name = 'theme_walrus/googleplus';
$title = get_string('googleplus', 'theme_walrus');
$description = get_string('googleplusdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// LinkedIn url setting.
$name = 'theme_walrus/linkedin';
$title = get_string('linkedin', 'theme_walrus');
$description = get_string('linkedindesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Tumblr url setting.
$name = 'theme_walrus/tumblr';
$title = get_string('tumblr', 'theme_walrus');
$description = get_string('tumblrdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Pinterest url setting.
$name = 'theme_walrus/pinterest';
$title = get_string('pinterest', 'theme_walrus');
$description = get_string('pinterestdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Instagram url setting.
$name = 'theme_walrus/instagram';
$title = get_string('instagram', 'theme_walrus');
$description = get_string('instagramdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// YouTube url setting.
$name = 'theme_walrus/youtube';
$title = get_string('youtube', 'theme_walrus');
$description = get_string('youtubedesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Vimeo url setting.
$name = 'theme_walrus/vimeo';
$title = get_string('vimeo', 'theme_walrus');
$description = get_string('vimeodesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Skype url setting.
$name = 'theme_walrus/skype';
$title = get_string('skype', 'theme_walrus');
$description = get_string('skypedesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// General social url setting 1.
$name = 'theme_walrus/social1';
$title = get_string('sociallink', 'theme_walrus');
$description = get_string('sociallinkdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 1.
$name = 'theme_walrus/socialicon1';
$title = get_string('sociallinkicon', 'theme_walrus');
$description = get_string('sociallinkicondesc', 'theme_walrus');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 2.
$name = 'theme_walrus/social2';
$title = get_string('sociallink', 'theme_walrus');
$description = get_string('sociallinkdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 2.
$name = 'theme_walrus/socialicon2';
$title = get_string('sociallinkicon', 'theme_walrus');
$description = get_string('sociallinkicondesc', 'theme_walrus');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 3.
$name = 'theme_walrus/social3';
$title = get_string('sociallink', 'theme_walrus');
$description = get_string('sociallinkdesc', 'theme_walrus');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 3.
$name = 'theme_walrus/socialicon3';
$title = get_string('sociallinkicon', 'theme_walrus');
$description = get_string('sociallinkicondesc', 'theme_walrus');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
