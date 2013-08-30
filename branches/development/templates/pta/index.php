<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.beez5
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu()->getActive();
$pageclass = '';
if (is_object($menu))
$pageclass = $menu->params->get('pageclass_sfx');
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css"/>

</head>

<body class="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?> container">
<div id="main_container">
    <div id="header">
        <div id="top">
            <div id="logo"><jdoc:include type="modules" name="logo" style="none" /></div>
            <div id="banner_top"><jdoc:include type="modules" name="banner_top" style="none" /></div>
        </div>
        <div id="menubar_container">
            <div id="menubar">
                <div id="menubar_1"><jdoc:include type="modules" name="menubar_1" style="none" /></div>
                <div id="menubar_2"><jdoc:include type="modules" name="menubar_2" style="none" /></div>
                <div id="menubar_3"><jdoc:include type="modules" name="menubar_3" style="none" /></div>
                <div id="menubar_4"><jdoc:include type="modules" name="menubar_4" style="none" /></div>
                <div id="menubar_5"><jdoc:include type="modules" name="menubar_5" style="none" /></div>
                <div id="menubar_6"><jdoc:include type="modules" name="menubar_6" style="none" /></div>
                <div id="menubar_7"><jdoc:include type="modules" name="menubar_7" style="none" /></div>
            </div>
        </div>
        <div id="menu">
            <jdoc:include type="modules" name="menu" style="none" />
        </div>
        <div id="breadcrumb">
            <jdoc:include type="modules" name="breadcrumb" style="none" />
        </div>
    </div>

    <div id="home_imageslider"><jdoc:include type="modules" name="home_imageslider" style="none" /></div>

    <div id="content_back1"></div>
    <div id="content_back2">
        <div id="content">
            <div id="content_left">
                <div id="content_main">
                    <div><jdoc:include type="message" /></div>
                    <div><jdoc:include type="component" /></div>
                </div>
                <div id="content_header">
                    <jdoc:include type="modules" name="content_header" style="none" />
                </div>
                <div id="content_split">
                    <div id="content_1">
                        <jdoc:include type="modules" name="content_1" style="none" />
                    </div>
                    <div id="content_2">
                        <jdoc:include type="modules" name="content_2" style="none" />
                    </div>
                    <div id="content_3">
                        <jdoc:include type="modules" name="content_3" style="none" />
                    </div>
                </div>
                <div id="content_footer">
                    <jdoc:include type="modules" name="content_footer" style="none" />
                </div>
            </div>
            <div id="content_right"><jdoc:include type="modules" name="content_right" style="none" /></div>
        </div>
    </div>

    <div id="footer">
        <jdoc:include type="modules" name="footer" style="none"/>
    </div>
</div>
</body>
</html>