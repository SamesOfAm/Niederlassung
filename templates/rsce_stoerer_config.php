<?php
return array(
  'label' => array('Störer', 'Störer'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'text' => array(
      'label' => array('Störertext', '...'),
      'inputType' => 'text'
    ),
    'link' => array(
      'label' => array('Link', 'Beschreibung...'),
      'eval' => array('pageTree' => true),
      'inputType' => 'url'
    )
  ),
);




