<?php

class block_simplehtml_edit_form extends block_edit_form {

  protected function specific_definition($mform) {

    // Section header titlt according to language file.
    $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

    // A smaple string variable with default valu.
    $mform->addElement('text', 'config_text', get_string('blockstring', 'block_simplehtml'));
    $mform->setDefault('config_text', 'defualt value');
    $mform->setType('config_text', PARAM_RAW);

  }
}
