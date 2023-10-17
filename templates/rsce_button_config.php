<?php
return array(
  'label' => array('Button', 'Button'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array('headline', 'cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'text' => array(
      'label' => array('Buttontext', '...'),
      'inputType' => 'text'
    ),
    'color' => array(
      'label' => array('Farbe', '...'),
      'inputType' => 'select',
      'options' => ['Blau', 'Gruen', 'Transparent']
    ),
    'link' => array(
      'label' => array('Link', 'Beschreibung...'),
      'eval' => array('pageTree' => true),
      'inputType' => 'url'
    )
  ),
);




