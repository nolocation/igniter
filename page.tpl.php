<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
</head>

<body class="page<?php print $is_front ? ' front_page' : ''; ?>">
<div id="container">
    <div id="header">
        <?php print $pre_header; //REGION ?>
        <?php if ($logo): ?>
            <div id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
        <?php endif; ?>
        <?php if ($site_name): ?>
            <?php //use h1 for site name juste on front page
            $tag = $is_front ? 'h1' : 'div'; ?>
            <?php print '<' . $tag; ?> id='site_name'>
            <strong><a href="<?php print check_url($base_path); ?>"><?php print check_plain($site_name); ?></a></strong>
            <?php print '</' . $tag . '>'; ?>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
            <p id='site-slogan'><?php print $site_slogan; ?></p>
        <?php endif; ?>
        <?php print $header; //REGION ?>
    </div><!-- end #header -->
    
    <?php if($primary_links || $secondary_links || $navbar || $search_box){ ?>
    <div id='navigation'>
     	<?php print $breadcrumb; ?>
        <?php if ($search_box): ?>
          <div id="search-box">
              <?php print $search_box; ?>
            </div> <!-- /#search-box -->
          <?php endif; ?>

          <?php if ($primary_links): ?>
            <div id="primary">
              <?php print theme('links', $primary_links); ?>
            </div> <!-- /#primary -->
          <?php endif; ?>

          <?php if ($secondary_links): ?>
            <div id="secondary">
              <?php print theme('links', $secondary_links); ?>
            </div> <!-- /#secondary -->
          <?php endif; ?>
          <?php print $navbar; //REGION ?>
          
    </div>
    <?php } ?>
    
    <?php if ($left): ?>
        <div id="sidebar_left">
            <?php print $left ?>
        </div><!-- end #sidebar1 -->
    <?php endif; ?> 
  
    <?php if ($right): ?>
        <div id="sidebar_right">
            <?php print $right ?>
        </div><!-- end #sidebar2 -->
    <?php endif; ?>
  
    <div id="main_content">
    
        <?php if ($mission != ""): ?>
            <?php print $mission ?>
        <?php endif; ?>
        
         <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; //REGION ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>
        
         <?php if ($title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>
        
        <!-- content -->
        <?php print($content) ?>
        <!-- end content -->
        
        <?php if ($content_bottom): ?>
          <div id="content-bottom">
            <?php print $content_bottom; //REGION ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>
    
    </div><!-- end #mainContent -->
    <div class="clearfloat"><hr /></div>
    <div id="footer">
        <p><?php print $footer_message //REGION ?></p>
    </div><!-- end #footer -->
    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>
    <?php print $closure; //REGION ?>
</div><!-- end #container -->
</body>
</html>
