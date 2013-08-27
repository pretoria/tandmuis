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
<html lang="<?php echo $this->language; ?>">
<head>
	<jdoc:include type="head" />
	<?php $headerstuff = $this->getHeadData();
	foreach ($headerstuff['scripts'] as $k => $item) {
		if(stristr($k, 'mootools-core.js')) unset($headerstuff['scripts'][$k]);
		if(stristr($k, 'mootools-more.js')) unset($headerstuff['scripts'][$k]);
 }
	$this->setHeadData($headerstuff); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-responsive.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css"/>

</head>

<body class="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?> container">
<div id="content" class="row-fluid">
	<?php $jAp = JFactory::getApplication();
$messagesJSON = json_encode($jAp->getMessageQueue());
	if (empty($messagesJSON[0]) !== false) { ?>
	<div class="span12">
		<jdoc:include type="message" />
	</div>
	<?php } ?>
	<div class="span12">
		<jdoc:include type="component" />
	</div>
	<div class="clearfix"></div>
</div>

<div class="footer">
	<jdoc:include type="modules" name="footer" style="none"/>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/custom.js"></script>
</body>
</html>