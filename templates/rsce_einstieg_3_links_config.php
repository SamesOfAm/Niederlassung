<?php
return array(
    'label' => array('Einstieg Box 3 Links', 'Eine Box für den Einstieg in ein Thema von der Startseite aus...'),
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
        'button1Text' => array(
            'label' => array('Text Button 1', '...'),
            'inputType' => 'text'
        ),
        'button1Link' => array(
            'label' => array('Link Button 1', 'Beschreibung...'),
            'eval' => array('pageTree' => true),
            'inputType' => 'url'
        ),
        'button2Text' => array(
          'label' => array('Text Button 2', '...'),
          'inputType' => 'text'
        ),
        'button2Link' => array(
            'label' => array('Link Button 2', 'Beschreibung...'),
            'eval' => array('pageTree' => true),
            'inputType' => 'url'
        ),
        'button3Text' => array(
          'label' => array('Text Button 3', '...'),
          'inputType' => 'text'
        ),
        'button3Link' => array(
            'label' => array('Link Button 3', 'Beschreibung...'),
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




