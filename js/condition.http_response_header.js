(function (Drupal, drupalSettings) {
  Drupal.smartContent = Drupal.smartContent || {};
  Drupal.smartContent.plugin = Drupal.smartContent.plugin || {};
  Drupal.smartContent.plugin.Field = Drupal.smartContent.plugin.Field || {};

  Drupal.smartContent.plugin.Field['http_response_header'] = function (condition) {
    var req = new XMLHttpRequest();
    req.open('GET', document.location, false);
    req.send(null);
    let header =  req.getResponseHeader(condition.field.settings.key);
    return header ? header : null;
  };

}(Drupal, drupalSettings));
