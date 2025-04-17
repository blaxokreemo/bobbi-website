<?php
  $theParent = wp_get_post_parent_id(get_the_ID());
  $test_array = get_pages(array(
      'child_of' => get_the_ID()
  ));
  
  if ($theParent or $test_array) { ?>
    
    <div class="side-menu-background box">
      <div class="page-links">
        <h2 class="title-box"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
          <?php 
          
            if ($theParent) {
                $findChildrenOf = $theParent;
            } else {
                $findChildrenOf = get_the_ID();
            }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
          ));

          ?>
        </ul>
      </div>
    </div>

  <?php } ?>