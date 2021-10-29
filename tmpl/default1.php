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



<style>
.grid-container {
  display: grid;
  grid-gap: 10px 10px;
  grid-template-columns: auto auto auto;
  background-color: #eee;
  padding: 10px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid #ccc;
  padding: 20px;
  font-size: 12px;
  text-align: left;
}



/* Typography imported from Google Fonts */
@import url('https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro:200,400');

h1, h2, h3, h4, h5, h6 {
  font-family: 'Playfair Display', serif;
}

p, a {
  font-family: 'Source Sans Pro', sans-serif;
}

/* Generic styles */
html {
  scroll-behavior: smooth;
}



.breweries > ul > li > div > figure {
  max-height: 220px;
  overflow: hidden;
  border-top-left-radius: .5rem;
  border-top-right-radius: .5rem;
  position: relative;
}

.breweries > ul > li > div > figure > img {
  width: 100%;
}

.breweries > ul > li > div > figure > figcaption {
  position: absolute;
  bottom: 0;
  background-color: rgba(0,0,0,.7);
  width: 100%;
}

.breweries > ul > li > div > figure > figcaption > h3 {
  color: white;
  padding: .75rem;
  font-size: 1.25rem;
}



/*
a {
  background-color: goldenrod;
  text-decoration: none;
  color: white;
  border-radius: .25rem;
  text-align: center;
  display: inline-block;
  transition: all .3s;
}

a:hover {
  opacity: .6;
}
*/


/* breweries styles */
.breweries {
  padding: 2rem;
}

.breweries > ul {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  grid-gap: 1rem;
}

.breweries > ul > li {
  border: 1px solid #E2E2E2;
  border-radius: .5rem;
}





</style>

<?php
$n_articoli = count($articoli);
$imag_def = '<img src="http://caibo.it/images/rivista_sul_monte/sul-monte.png" alt="sul monte" width="447" height="174" style="display: block; margin-left: auto; margin-right: auto;">';
?>



  <section class="breweries" id="breweries">
    <ul>

    
    <?php for($x=0;$x < 3;$x++){ ?>
            <?php if(isset($articoli[$x]['title']) && isset($articoli[$x]['introtext'])){?>
            <li>
            <div class="grid-item">

            <figure>
                <!-- Photo by Quentin Dr on Unsplash -->
                <?php $imag = RartcolHelper::get_article_image($articoli[$x]['id']); ?> 
           

             <?php if($imag != ''){ ?>
                  <div class="imd1"><?php  echo $imag; ?></div>
            <?php }else{ ?>
              <div class="imd1"><?php  echo $imag_def; ?></div>
            <? } ?>

            </figure>

           <?php $art_senza_image = preg_replace("/<img[^>]+\>/i", "", $articoli[$x]['introtext']); ?>
           <?php echo $articoli[$x]['title']; ?><?php echo substr($art_senza_image,0,250); ?>
           </div>
      <? }}?>


    </ul>
  </section>


