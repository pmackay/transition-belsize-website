<?php
// $Id: node-og-group-post.tpl.php,v 1.3 2008/11/09 17:17:54 weitzman Exp $

/**
 * @file node-og-group-post.tpl.php
 * 
 * Og has added a brief section at bottom for printing links to affiliated groups.
 * This template is used by default for non group nodes.
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

  
    
  <div class="event-details">
    <?php if (!$page): ?>
      <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
      <span>Event start: <?php print format_date($node->field_date[0]['value'], 'medium'); ?></span>
    <?php else: ?>
      <span>Event date: <?php print $event_date; ?></span>
    <?php endif; ?>
  
    <div class="loc-con">
       <div class="location">Location: </div>
       <div class="location-add"><?php print $location; ?></div>
    </div>
    
    <div class="meta clear">
    <?php if ($submitted && $page): ?>
      <span class="submitted">Organiser: <?php print $submitted ?></span>
    <?php endif; ?>


    <?php if ($terms): ?>
      <div class="terms terms-inline"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($node->og_groups && $page): ?>
      <div class="groups"><?php print t('Groups:'); ?>
        <div class="links"><?php print $og_links['view']; ?></div>
      </div>
    <?php endif; ?>

    <?php if($attend_event && $page): ?>
      <div class="rsvp-event"><?php print $attend_event; ?></div>
    <?php endif; ?>
  </div> <!-- red -->
  


  <div class="event-map"><?php print $google_map; ?></div>
    
    
  <div class="clear"></div>   
      
  
  <div class="content">
    <div class="event-details-wrapper"></div><!-- #event-details-wrapper -->
    <!--h1>Description</h1-->
    <?php print $content ?>
  </div>
  <?php print $links; ?>
  
</div>
