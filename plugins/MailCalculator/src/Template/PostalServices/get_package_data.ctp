<h1>Calculate the Expected Value of your mail insurance</h1>
<?= $this->Form->create(null, ['class' => 'm-t', 'role' => 'form']) ?>
<div class="form-group">
    <?= $this->Form->input('content_id', ['options' => [__('Münzen')], 'class' => 'form-control', 'label' => false, 'empty' => __('Was möchten Sie verschicken?')]) ?>
    <?= $this->Form->input('value', ['placeholder' => __('in €'), 'autofocus']) ?>
    <?= $this->Form->input('weight', ['placeholder' => __('in g')]) ?>
    <?= $this->Form->input('height', ['placeholder' => __('in cm')]) ?>
</div>
<div class="form-group">
    <?= $this->Form->button(__('Calculate!'), ['id' => 'calc-button', 'class' => 'btn btn-info']); ?>
</div>
<?= $this->Form->end() ?>

<?php if (isset($calcResultCell)): ?>
    <?= $calcResultCell ?>
<?php endif; ?>