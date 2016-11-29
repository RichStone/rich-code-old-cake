<style>
    .options {
        margin: 1%;
        border: solid 1px;
        border-radius: 5px;
        box-shadow: 5px 5px 2px #888;
    }
    a {
        text-decoration: underline;
        margin: 2%;
        display: inline-block;
    }
</style>
<div class="container-fluid">
    <div class="row">
            <?php if(isset($postalServiceNameInsured) && isset($evInsured) && isset($insuredCarrier) && isset($postalServicePriceInsured) ): ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Versandoption <strong>Versichert</strong> für <?= $item_name ?>: <br>
                    <?= $insuredCarrier ?>
                    <?= $postalServiceNameInsured ?> <br>
                    <?= $postalServicePriceInsured ?> <br>
                    Erwartungswert: <?= $evInsured ?> <br>
                    Verlust wird immer erstattet.
                </div>
            </div>
        <?php else: ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Wir haben zur Zeit leider keine <strong>versicherte</strong> Option für Ihren Wunschversand.
                    Bitte kontaktieren Sie uns mit
                    Ihren Daten, damit wir unsere Postdienste aktualisieren.
                </div>
            </div>
        <?php endif; ?>
<!-- TODO add boolean postalServiceSet to make the line below much shorter -->
        <?php if(isset($postalServiceNameRisky) && isset($evRisky) && isset($riskyCarrier) && isset($postalServicePriceRisky) ): ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Versandoption <strong>Unversichert</strong>:<br>
                    <?= $riskyCarrier ?>
                    <?= $postalServiceNameRisky ?> <br>
                    <?= $postalServicePriceRisky ?> <br>
                    Erwartungswert: <?=  $evRisky?> <br>
                    Geschätzte Verlustwahrscheinlichkeit: 2%
                </div>
            </div>
        <?php else: ?>
            <div class="col-sm-6 text-center">
                <div class="options">
                    Wir haben zur Zeit leider keine <strong>unversicherte</strong> Option für Ihren Wunschversand.
                    Bitte kontaktieren Sie uns mit
                    Ihren Daten, damit wir unsere Postdienste aktualisieren.
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="text-center">
            <a href="#">Was bedeuten die Zahlen für meine Sendung?</a>
        </div>
    </div>
</div>