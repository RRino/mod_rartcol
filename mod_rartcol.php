<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_add_rartcol
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

 use Joomla\CMS\Factory;
 use Joomla\CMS\Filesystem\Path;
 use Joomla\CMS\Form\Form;
 use Joomla\CMS\HTML\HTMLHelper;
 use Joomla\CMS\Language\Text;
 use Joomla\CMS\Filesystem\File;
 use Joomla\CMS\Language\LanguageHelper;
 use Joomla\CMS\Helper\ModuleHelper;
 use RartcolNamespace\Module\Rartcol\Site\Helper\RartcolHelper;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       

<script type="text/javascript">
function showServerErrorMessage() {
    $("#server-error").modal('show');
}
</script>


<?php

jimport('joomla.filesystem.file');
$document = Factory::getDocument ();
$jinput = Factory::getApplication ()->input;

//Module parameters from outside a module
$module = JModuleHelper::getModule('mod_rartcol'); 
$moduleParams = new JRegistry(); 
$moduleParams->loadString($module->params); 

$maxmenorecnti = $moduleParams->get('maxmenorecenti', '5');
$maxbox = $moduleParams->get('maxmenorecenti', '3');
$catid = $moduleParams->get('catid', '3');

$maxmenorecnti = $maxbox + $maxmenorecnti;
$maxart = $maxbox +  $maxmenorecnti;;//max articoli

$articoli = RartcolHelper::get_articles_category($catid,$maxart);


// load the default Tmpl
require JModuleHelper::getLayoutPath('mod_rartcol', $params->get('layout', 'default'));
?>


