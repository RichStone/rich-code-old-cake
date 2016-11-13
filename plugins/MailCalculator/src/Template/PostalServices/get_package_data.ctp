<?= $this->Html->css('MailCalculator.styles'); ?>

<h1>Calculate the Expected Value of your mail insurance</h1>
<?= $this->Form->create(null, ['class' => 'm-t', 'role' => 'form']) ?>
<div id="get-data-form" class="form-group">
    <div class="container">

        <?= $this->Form->select('item_id', $items, ['id' => 'item-id', 'class' => 'form-control', 'label' => false, 'empty' => __('Was möchten Sie verschicken?'), 'required']) ?>

        <div class="img-input-field dollar-img">
            <?= $this->Form->input('value', ['placeholder' => __('in €'), 'class' => 'form-control small-input', 'label' => false, 'autofocus', 'required']) ?>
        </div>
        <div class="img-input-field weight-img">
            <?= $this->Form->input('weight', ['placeholder' => __('in gr'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
        </div>
        <div class="img-input-field height-img">
            <?= $this->Form->input('height', ['placeholder' => __('in mm'), 'class' => 'form-control small-input', 'label' => false,  'required']) ?>
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