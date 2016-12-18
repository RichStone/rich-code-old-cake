<?= $this->Html->css('MailCalculator.styles'); ?>

<!-- TODO Header with float left INFO and float right comments -->
<div>
    <h3>Versand Erwartungswert Rechner</h3>
</div>
<?= $this->Form->create(null, ['class' => 'm-t', 'role' => 'form']) ?>
<div id="get-data-form" class="form-group">
    <div class="container-fluid">
        <?= $this->Form->select('item_id', $items, ['id' => 'item-id', 'class' => 'form-control', 'label' => false, 'empty' => __('Was möchten Sie verschicken?'), 'required']) ?>
        <div class="row text-center">
            <h4>Wert</h4>
        </div>
        <div class="img-input-field dollar-img">
            <?= $this->Form->input('value', ['placeholder' => __('in €'), 'class' => 'form-control small-input', 'label' => false, 'autofocus', 'required']) ?>
        </div>
        <div class="row text-center">
            <h4>Gewicht</h4>
        </div>
        <div class="img-input-field weight-img">
            <?= $this->Form->input('weight', ['placeholder' => __('in gr'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 text-center">
                <h4>Höhe</h4>
            <div class="img-input-field height-img">
                <?= $this->Form->input('height', ['placeholder' => __('in mm'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
            </div>
            </div>
                <div class="col-md-4 col-sm-6 text-center">
                <h4>Länge</h4>

            <div class="img-input-field width-img">
                <?= $this->Form->input('height', ['placeholder' => __('in mm'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
            </div>
                </div>
            <div class="col-md-4 text-center">
                <h4>Breite</h4>
            <div class="img-input-field length-img">
                <?= $this->Form->input('height', ['placeholder' => __('in mm'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
            </div>
            </div>
        </div>
        <div class="img-input-field calculator-img">
            <?= $this->Form->button(__('Calculate!'), ['id' => 'calc-button', 'class' => 'btn btn-info']); ?>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>

<?php if (isset($calcResultCell)): ?>
    <?= $calcResultCell ?>
<?php endif; ?>