<?php
return array(
  'label' => array('Thüringen-Karte', ''),
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
          'label' => array('Name', 'Name des Landkreises'),
          'inputType' => 'select',
          'options' => array('Altenburg','Apolda','Arnstadt','Artern','Bad Langensalza','Bad Lobenstein','Bad Salzungen','Dornburg-Camburg / Bürgel','Eisenach','Eisenberg','Erfurt-Stadt','Gera-Land','Gera-Stadt','Gotha','Greiz','Heiligenstadt','Hermsdorf / Bad Klosterlausnitz','Hildburghausen','Ilmenau','Jena-Stadt','Kahla','Leinefelde-Worbis','Meiningen','Mühlhausen','Neuhaus / Lauscha','Nordhausen','Pößneck','Saalfeld / Rudolstadt / Bad Blankenburg','Schleiz','Schmalkalden','Schmölln / Gößnitz','Sömmerda','Sondershausen','Sonneberg','Stadtroda','Suhl-Stadt','Weimar-Land','Weimar-Stadt','Zeulenroda-Triebis')
        ),
        'gpPositions' => array(
          'label' => array('Hausarzt-Stellen', 'Wieviele offene Hausarzt-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'pedPositions' => array(
          'label' => array('KJPP-Stellen', 'Wieviele offene KJPP-Stellen gibt es hier?'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'presentation' => array(
          'label' => array('Landkreis-Vorstellung', 'Kurze Beschreibung des Landkreises'),
          'inputType' => 'textarea',
          'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr')
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




