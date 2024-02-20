<?php
return array(
  'label' => array('Thüringen-Karte FÄ', ''),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'mapfilename' => array(
      'label' => array('Name der Bild-Datei im Templates-Ordner', 'Die SVG-Datei mit der Endung ".html5" in den Templates-Ordner legen und hier den Namen der Datei inkl. html5-Endung angeben'),
      'inputType' => 'text'
    ),
    'areas' => array(
      'label' => array('Landkreise', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'name' => array(
          'label' => array('Name', 'Name des Planungsbereiches'),
          'inputType' => 'select',
          'options' => array('Altenburger Land', 'Eichsfeld', 'Erfurt, Stadt', 'Gotha', 'Greiz/Gera', 'Hildburghausen', 'Ilm Kreis', 'Jena, Stadt', 'Kyffhäuserkreis', 'Nordhausen', 'Saale Holzland Kreis', 'Saale Orla Kreis', 'Saalfeld Rudolstadt', 'Schmalkalden Meiningen/Suhl', 'Sonneberg', 'Sömmerda', 'Unstrut Hainich Kreis', 'Wartburgkreis/Eisenach', 'Weimarer Land, Weimar')
        ),
        'gpPositions' => array(
          'label' => array('Hausarzt-Stellen', 'Wieviele offene Hausarzt-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'auPositions' => array(
          'label' => array('Au-Stellen', 'Wieviele offene Augenarzt-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'coPositions' => array(
          'label' => array('C_O-Stellen', 'Wieviele offene Chirurgen und Orthopäden-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'fPositions' => array(
          'label' => array('F-Stellen', 'Wieviele offene Frauenarzt-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'nPositions' => array(
          'label' => array('N-Stellen', 'Wieviele offene Nervenheilkunde-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'doppelfachPositions' => array(
          'label' => array('Doppelfacharzt-Stellen', 'Wieviele offene Doppelfacharzt-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'psychPositions' => array(
          'label' => array('Psych-Stellen', 'Wieviele offene Psychotherapeuten-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'aerztlPsychPositions' => array(
          'label' => array('Ärztliche Psych-Stellen', 'Wieviele offene ärztliche Psychotherapeuten-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'kjPsychPositions' => array(
          'label' => array('KJ-Stellen', 'Wieviele offene KJ-Psychotherapeuten-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'psychSomPositions' => array(
          'label' => array('Psychosomatiker-Stellen', 'Wieviele offene Psychosomatiker-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'uPositions' => array(
          'label' => array('U-Stellen', 'Wieviele offene Urologen-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'presentation' => array(
          'label' => array('Link zur Landkreis-Vorstellung', ''),
          'inputType' => 'url',
          'eval' => array('tl_class' => 'clr')
        ),
        'link' => array(
          'label' => array('Link zu den Stellen auf KVT.de', ''),
          'inputType' => 'url'
        ),
        'zip' => array(
          'label' => array('Postleitzahlen', 'Alle Postleitzahlen dieses Landkreises, mit Komma getrennt ohne Leerzeichen (bsp: 99423,99424,99435,...)'),
          'inputType' => 'text'
        )
      )
    )
  ),
);




