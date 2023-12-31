<?php
return array(
  'label' => array('Button', 'Button'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
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
    ),
    'targetBlank' => array(
      'label' => array('Neuer Tab?'),
      'inputType' => 'checkbox'
    )
  ),
);




