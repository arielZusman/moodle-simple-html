<?php
class block_simplehtml extends block_base {
  public function init() {
    $this->title = get_string('simplehtml', 'block_simplehtml');
  }

  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }

    $this->content = new stdClass;
    if( !empty($this->config->text)) {
      $this->content->text = $this->config->text;
    }
    $this->class->footer - 'Footer here...';

    return $this->content;
  }
}
