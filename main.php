<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon(); ?>

  <?php @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">

  <?php html_msgarea()?>

  <h1><?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?></h1>

  <div class="navi">
    <?php tpl_include_page("navi")?>
  </div>

  <div class="stylehead">

    <?php if (false): ?>
    <div class="header">
      <div class="pagename">
        <?php #echo tpl_pagetitle($ID,true)?>
      </div>
      <div class="clearer"></div>
    </div>
    <?php endif; ?>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  </div>
  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <div class="clearer"></div>

  <?php tpl_flush()?>

  <div class="stylefoot">

    <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

    <div class="bar" id="bar__bottom">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
        <?php tpl_button('revert')?>
        <?php tpl_button('subscribe')?>
        <?php tpl_button('media')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
        <?php tpl_button('top')?>&nbsp;
    </div>

  </div>

  <?php tpl_license(false);?>

</div>
<?php @include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
