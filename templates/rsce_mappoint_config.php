<?php
return array(
  'label' => array('Punkt auf Karte', 'Punkt auf Karte'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'name' => array(
      'label' => array('Name der Region', '...'),
      'inputType' => 'text'
    ),
    'link' => array(
      'label' => array('Link zur Unterseite', '...'),
      'eval' => array('pageTree' => true),
      'inputType' => 'url'
    ),
    'xCoords' =>array(
      'label' => array('X-Koordinaten', 'in Prozent'),
      'inputType' => 'text'
    ),
    'yCoords' =>array(
      'label' => array('Y-Koordinaten', 'in Prozent'),
      'inputType' => 'text'
    )
  ),
);




