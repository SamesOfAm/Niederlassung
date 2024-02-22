<?php
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    $creuzburg = str_contains($host, 'praxis-creuzburg');
    $lipprechterode = str_contains($host, 'praxis-lipprechterode');
    $devCreuzburg =  str_contains($uri, 'stiftungspraxis-seite');
    $devLipprectherode =  str_contains($uri, 'stiftungspraxis-lipprechterode');
?>

<div class="footer-left">
    <div class="footer-logo">
        {{insert_content::33}}  <!-- Eingefügte Inhalte/Footer/1 -->
    </div>
    <div class="footer-info">
        <div class="footer-address">
            {{insert_content::34}}  <!-- Eingefügte Inhalte/Footer/2 -->
        </div>
        <div class="footer-social">
            {{insert_content::35}}  <!-- Eingefügte Inhalte/Footer/3 -->
        </div>
    </div>
</div>
<div class="footer-right">
    <div class="white text-center"><h3>Kontakt aufnehmen</h3></div>
    <?php if($creuzburg || $devCreuzburg): ?>{{insert_form::4}} <!-- Kontaktformular Creuzburg -->
    <?php elseif($lipprechterode || $devLipprectherode): ?>{{insert_form::5}} <!-- Kontaktformular Lipprechterode -->
    <?php else: ?>{{insert_form::2}} <!-- Kontaktformular --><?php endif; ?>
</div>
