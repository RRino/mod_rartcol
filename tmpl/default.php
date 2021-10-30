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
 $imag_def = '<img src="images/Loghi/notizie.png" alt="Notizie cai bologna" width="447" height="174" style="display: block; margin-left: auto; margin-right: auto;">';
?>

<style>
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
    grid-gap: 20px;
    align-items: stretch;
}

.grid>article {
    border-top:1px solid #ccc;
    padding-top:5px;
    /*  border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);*/
    display: flex;
    /* <-------------- changes */
    flex-direction: column;
    /* <-------------- changes */
}

.grid>articleb {
      border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    display: flex;
    /* <-------------- changes */
    flex-direction: column;
    /* <-------------- changes */
}

.grid>article img {
    max-width: 100%;
}

.text {
    padding: 0 20px 20px;
    flex-grow: 1;
    display: flex;
    /* <-------------- changes */
    flex-direction: column;
    /* <------x-2------- changes */
}

.text>p {
    flex-grow: 1;
    /* <-------------- changes */
}

.text>button {
    background: gray;
    border: 0;
    color: white;
    padding: 10px;
    width: 100%;
}

figure {
    min-height: 150px;
}

.titb{
  text-align:center;
}

.ameno{
    text-decoration: none !important;
}
</style>


<main class="grid">
    <?php for($x =0; $x < $maxbox;$x ++){ ?>
    <?php if (isset($articoli[$x]['title']) && isset($articoli[$x]['introtext'])) {?>
    <article>
        <?php $imag = RartcolHelper::get_article_image($articoli[$x]['id']); ?>

        <figure>
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
            $partArticle = substr($fullArticle,0,240); ?>

        <div class="text">
            <?php echo '<h3>'.$articoli[$x]['title'].'</h3>' ?>
            <p><?php echo $partArticle.' ....'; ?></p>
            <a href="index.php?option=com_content&view=article&id=<?php echo $articoli[$x]['id'] ?>">Leggi
                l'articolo</a>
        </div>
    </article>
    <?php } }?>


    <articleb>
        <h3 class="titb">Articoli meno recenti</h3>
        <div class="text">
            <?php for($xa = $maxbox ;$xa < $maxmenorecnti; $xa++){ ?>
                <?php if (isset($articoli[$xa])) {  ?>
             <a class="ameno" href="index.php?option=com_content&view=article&id=<?php echo $articoli[$xa]['id'] ?>"><?php echo $articoli[$xa]['title'] ?></a> 
            <?php } } ?>
        </div>
    </articleb>

</main>