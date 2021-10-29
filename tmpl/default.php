<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_rartcol
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

<?php $gap = '1rem'; ?>
<?php
 $n_articoli = count($articoli);
 $imag_def = '<img src="http://caibo.it/images/rivista_sul_monte/sul-monte.png" alt="sul monte" width="447" height="174" style="display: block; margin-left: auto; margin-right: auto;">';
?>

<style>
html { font-size: 22px; }
body { padding: 1rem; }

.card {
 /* background-color: dodgerblue;
  color: white;*/
  padding: 1rem;
  height: 14rem;
  border: solid 1px #ccc;
  overflow:hidden;
}


@media (min-width: 600px) {
  .cards { grid-template-columns: repeat(2, 1fr); }
}

@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(3, 1fr); }
}

.cards {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-gap: <?php echo $gap ?>;
}
</style>



<div class="cards">
  <?php for($x = 0; $x < 6; $x++) { ?>
    <?php if (isset($articoli[$x]['title']) && isset($articoli[$x]['introtext'])) {?>
  <div class="card">

  <figure>
                <!-- Photo by Quentin Dr on Unsplash -->
                <?php $imag = RartcolHelper::get_article_image($articoli[$x]['id']); ?> 
           

             <?php if($imag != ''){ ?>
                  <div class="imd1"><?php  echo $imag; ?></div>
            <?php }else{ ?>
              <div class="imd1"><?php  echo $imag_def; ?></div>
            <? } ?>

            </figure>

            <?php $art_senza_image = preg_replace("/<img[^>]+\>/i", "", $articoli[$x]['introtext']);
            
            $clear = strip_tags($art_senza_image, '');
            // Clean up things like &amp;
            $clear = html_entity_decode($clear);
            // Strip out any url-encoded stuff
            $clear = urldecode($clear);
            // Replace non-AlNum characters with space
            $clear = preg_replace('/[^A-Za-z0-9]/', ' ', $clear);
            // Replace Multiple spaces with single space
            $clear = preg_replace('/ +/', ' ', $clear);
            // Trim the string of leading/trailing space
            $fullArticle= trim($clear);
            
            if(!strlen(trim($fullArticle))) $fullArticle = "No Titolo ";
            $partArticle = substr($fullArticle,0,240);
            
            
            ?>

            <?php echo $articoli[$x]['title']; ?><?php echo $partArticle; ?>

</div>

 <?php } }?>
</div>