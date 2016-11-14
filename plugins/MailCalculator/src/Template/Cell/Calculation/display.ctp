<div class="container-fluid">
    <div class="row">
            <?php if(isset($postalServiceNameInsured)): ?>
            <div class="col-sm-6">
                Der billigste versicherte Versandservice für Ihre <?= $item_name ?> ist <?= $postalServiceNameInsured . ' mit einem Preis von ' . $postalServicePriceInsured ?>
            <br>
            EV versichert: <?= $evInsured ?>
            </div>
        <?php else: ?>
            <div class="col-sm-6">
                No insured option available
            </div>
        <?php endif; ?>

        <div class="col-sm-6">
            Der billigste NICHT versicherte Versandservice für Ihre <?= $item_name ?> ist <?= $postalServiceNameRisky  . ' mit einem Preis von ' . $postalServicePriceRisky ?>
            <br>
            EV nicht versichert: <?=  $evRisky?>
        </div>
    </div>
</div>