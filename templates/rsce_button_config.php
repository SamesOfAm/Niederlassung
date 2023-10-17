<?php
return array(
  'label' => array('Einstieg Box', 'Eine Box für den Einstieg in ein Thema von der Startseite aus...'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array('headline', 'cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'headline' => array(
      'label' => array('Überschrift', '...'),
      'inputType' => 'text'
    ),
    'subheadline' => array(
      'label' => array('Unterüberschrift', '...'),
      'inputType' => 'text'
    ),
    'link' => array(
      'label' => array('Link', 'Beschreibung...'),
      'eval' => array('pageTree' => true),
      'inputType' => 'url'
    ),
    'icon' => array(
      'label' => array('Icon', 'Beschreibung...'),
      'eval' => array('filesOnly' => true),
      'inputType' => 'fileTree'
    ),
  ),
);




