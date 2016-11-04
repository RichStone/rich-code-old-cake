<?php if(isset($postalServiceNameInsured)): ?>
    <div>
        <div>Der billigste versicherte Versandservice für Ihre <?= $item_name ?> ist</div><?= $postalServiceNameInsured . ' mit einem Preis von ' . $postalServicePriceInsured ?>
    </div>
    <div>
        <div>EV versichert:</div> <?= $evInsured ?>
    </div>
<?php else: ?>
    <div>hi</div>
<?php endif; ?>

<div>
    <div>Der billigste NICHT versicherte Versandservice für Ihre <?= $item_name ?> ist</div><?= $postalServiceNameRisky . ' mit einem Preis von ' . $postalServicePriceRisky ?>
</div>
<div>
    <div>EV nicht versichert: </div> <?=  $evRisky?>
</div>