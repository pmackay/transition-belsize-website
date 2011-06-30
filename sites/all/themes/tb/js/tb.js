Drupal.behaviors.tb = function(context) {
  // limit rows in 'About you' field (it's actually node type profile body)
  $('#edit-body-wrapper textarea').attr('rows', 6);
}