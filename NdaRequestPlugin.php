<?php
/**
 * NDA Request plugin for Craft CMS
 *
 * This plugin confirms access to the Exari NDA Interview Request Form
 *
 *
 * @author    Dave Fravel
 * @copyright Copyright (c) 2017 Dave Fravel
 * @link      davefravel.com
 * @package   NdaRequest
 * @since     0.1.0
 */

namespace Craft;

class NdaRequestPlugin extends BasePlugin
{
    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('NDA Request');
    }

    public function getDescription()
    {
        return Craft::t('This plugin confirms access to the Exari NDA Interview Request Form');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/dfravel/ndarequest/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/dfravel/ndarequest/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Dave Fravel';
    }

    public function getDeveloperUrl()
    {
        return 'https://davefravel.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function onBeforeInstall()
    {
    }

    public function onAfterInstall()
    {
    }

    public function onBeforeUninstall()
    {
    }

    public function onAfterUninstall()
    {
    }

    protected function defineSettings()
    {
        // return array(
        //     'someSetting' => array(AttributeType::String, 'label' => 'Some Setting', 'default' => ''),
        // );
    }

    public function getSettingsHtml()
    {
        // return craft()->templates->render('ndarequest/NdaRequest_Settings', array(
        //    'settings' => $this->getSettings()
        // ));
    }

    public function prepSettings($settings)
    {
        // Modify $settings here...
        return $settings;
    }
}
