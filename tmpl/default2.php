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
* {
    box-sizing: border-box;
}

.row::after {
    content: "";
    clear: both;
    display: table;
}

[class*="col-"] {
    float: left;
    padding: 15px;
}




.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.menu li:hover {
    background-color: #0099cc;
}





/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}

@media only screen and (min-width: 600px) {



    /* For tablets: */
    .col-s-3 {
        width: 100%;
        border: solid 1px
    }

    .col-s-4 {
        width: 100%;
        border: solid 1px red
    }

    .col-s-5 {
        width: 100%;
        border: solid 1px blue
    }

    .col-s-6 {
        width: 100%;
        border: solid 1px #ccc
    }


    .col-s-8 {
        width: 100%;
        border: solid 1px
    }

    .col-s-9 {
        width: 100%;
        border: solid 1px red
    }

    .col-s-10 {
        width: 100%;
        border: solid 1px #ccc
    }

}

@media only screen and (min-width: 768px) {
    /* For desktop: */

    .col-3 {
        width: 24%;
        border: solid 1px;
        column-gap: 20px;
    }

    .col-4 {
        width: 24%;
        border: solid 1px red;
        column-gap: 20px;

    }

    .col-5 {
        width: 24%;
        border: solid 1px blue;
        column-gap: 20px;
    }

    .col-6 {
        width: 24%;
        border: solid 1px #ccc;
        column-gap: 20px;
    }


    .col-8 {
        width: 32.3%;
        border: solid 1px
    }

    .col-9 {
        width: 32.3%;
        border: solid 1px red
    }

    .col-10 {
        width: 32.3%;
        border: solid 1px #ccc
    }




}

#grid {
    /* display: grid;*/
    height: 100px;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: 100px;
    column-gap: 1%;
}

.content-box {
  grid-gap: 50px;
    }
</style>


<div class="content-box">
    <div id="grid" class="row">
        <div class="col-3  col-s-3">
            col 3
        </div>


        <div class="col-4  col-s-4">
            col 4
        </div>

        <div class="col-5 col-s-5">
            col 5
        </div>

        <div class="col-6 col-s-6">
            col 6
        </div>
    </div>




    <div id="grid" class="row">
        <div class="col-8 col-s-8">
            col 8
        </div>


        <div class="col-9 col-s-9">
            col 9
        </div>

        <div class="col-10 col-s10">
            col 10
        </div>
    </div>

</div>