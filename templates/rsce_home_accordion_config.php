<?php
return array(
  'label' => array('Zielgruppen-Akkordeon', ''),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'headline' => array(
      'label' => array('Überschrift', 'Der Text, auf den geklickt wird'),
      'inputType' => 'text'
    ),
    'fundings' => array(
      'label' => array('Fördermöglichkeiten', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'url' => array(
          'label' => array('Link', 'Wohin wird verlinkt?'),
          'inputType' => 'url'
        ),
        'linkText' => array(
          'label' => array('Text', 'Was soll auf dem Link stehen?'),
          'inputType' => 'text'
        )
      )
    ),
    'services' => array(
      'label' => array('Angebote', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'url' => array(
          'label' => array('Link', 'Wohin wird verlinkt?'),
          'inputType' => 'url'
        ),
        'linkText' => array(
          'label' => array('Text', 'Was soll auf dem Link stehen?'),
          'inputType' => 'text'
        )
      )
    )
  ),
);




