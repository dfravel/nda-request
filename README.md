# NDA Request plugin for Craft CMS
This plugin confirms access to the Exari NDA Interview Request Form

## Installation
To install NDA Request, follow these steps:

1. Download & unzip the file and place the `ndarequest` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/dfravel/ndarequest.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require dfravel/ndarequest`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `ndarequest` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

NDA Request works on Craft 2.4.x and Craft 2.5.x.

## NDA Request Overview
As I continue to dive deeper into Craft CMS I need to stop the WordPress and ExpressionEngine way of thinking about things. Craft prohibits PHP in the templates and my clients require a lot of custom code to enable access to new/different functionality.

One of the custom elements for [the exari website](https://www.exari.com) is to allow sales reps and potential clients with the ability to generate their own NDA's. This feature is hidden behind a password protected form. This plugin (with a few modifications) allows access to that form.

This is my development copy of the plugin. The security (password lookup) has been modified for the production release.

Thanks to [Andrew at NY Studio](https://nystudio107.com/) for the awesome work on [Plugin Factory](https://www.pluginfactor.io). Without that tool I wouldn't have been able to start this project.

Brought to you by [Dave Fravel](https://davefravel.com)
