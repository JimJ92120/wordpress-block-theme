<?php
 /**
  * Title: Latest Posts
  * Slug: wordpress-block-theme/latest-posts
  * Categories: wordpress-block-theme
  */
?>
<!-- wp:group -->
<div class="wp-block-group latest-posts">
    <!-- wp:group {
        "tagName": "header",
        "layout": {
            "type": "flex",
            "justifyContent": "center"
        }
    } -->
    <header class="wp-block-group latest-posts__header">
        <!-- wp:heading -->
            <h2>Latest Post</h2>
        <!-- /wp:heading -->
    </header>
    <!-- /wp:group -->

    <!-- wp:query {
        "queryId":0,
        "query": {
            "perPage": 3,
            "postType": "post"
        },
        "displayLayout": {
            "type": "flex",
            "columns": 3
        }
    } -->
        <div class="wp-block-query latest-posts__list-container">    
            <!-- wp:post-template {
                "className": "latest-posts__list"
            } -->
                <!-- wp:post-featured-image /-->
                <!-- wp:post-title /-->
                <!-- wp:post-excerpt {
                    "moreText": "Read more"
                } /-->
            <!-- /wp:post-template -->            
        </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
