<?php
return array(
  'label' => array('Portrait', 'Button'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'headline' => array(
      'label' => array('Überschrift', '...'),
      'inputType' => 'text'
    ),
    'shortInfo' => array(
      'label' => array('Steckbrief Info', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'info' => array(
          'label' => array('Info', 'Kurzinfo für Steckbrief'),
          'inputType' => 'text'
        )
      )
    ),
    'slider' => array(
      'label' => array('Slider', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'image' => array(
          'label' => array('Bild', 'Bild für Slideshow'),
          'inputType' => 'fileTree',
          'eval' => array('filesOnly' => true)
        )
      )
    ),
    'description' => array(
      'label' => array('Beschreibungstext', 'Längere Beschreibung der Region'),
      'inputType' => 'textarea',
      'eval' => array('rte' => 'tinyMCE')
    ),
    'links' => array(
      'label' => array('Weiterführende Links', 'Rechts auf "Neues Element" klicken'),
      'eval' => array('pageTree' => true),
      'inputType' => 'list',
      'fields' => array(
        'url' => array(
          'label' => array('URL', 'Die URL, auf die verlinkt werden soll'),
          'inputType' => 'url'
        ),
        'text' => array(
          'label' => array('Text', 'Der anzuzeigende Text'),
          'inputType' => 'text'
        )
      )
    ),
  ),
);




