<style>
    .options {
        margin: 1%;
        border: solid 1px;
        border-radius: 5px;
        box-shadow: 5px 5px 2px #888;
    }
</style>
<div class="container-fluid">
    <div class="row">
            <?php if(isset($postalServiceNameInsured)): ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Versandoption <strong>Versichert</strong> für <?= $item_name ?>: <br>
                    <?= $postalServiceCarrierInsured ?>
                    <?= $postalServiceNameInsured ?> <br>
                    <?= $postalServicePriceInsured ?> <br>
                    EV versichert: <?= $evInsured ?>
                </div>
            </div>
        <?php else: ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Wir haben zur Zeit leider keine versicherte Option für Ihre Eingabe.
                    Bitte kontaktieren Sie uns mit
                    Ihren Daten, damit wir unsere Postdienste aktualisieren.
                </div>
            </div>
        <?php endif; ?>

        <div class="col-sm-6 text-center">
            <div class="options">
                Versandoption <strong>Unversichert</strong>:<br>
                <?= $postalServiceCarrierUninsured ?>
                <?= $postalServiceNameRisky ?> <br>
                <?= $postalServicePriceRisky ?> <br>
                EV nicht versichert: <?=  $evRisky?>
            </div>
        </div>
    </div>
</div>