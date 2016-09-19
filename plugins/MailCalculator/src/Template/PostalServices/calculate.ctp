<h1>Calculate the Expected Value of your mail insurance</h1>
<?= $this->Form->create(null, ['class' => 'm-t', 'role' => 'form']) ?>
<div class="form-group">
    <?= $this->Form->input('package-value', ['placeholder' => __('in €'), 'required', 'autofocus']) ?>
    <?= $this->Form->input('package-weight', ['placeholder' => __('in g')]) ?>
    <?= $this->Form->input('package-height', ['placeholder' => __('in cm')]) ?>
</div>
<div class="form-group">
    <?= $this->Form->button(__('Calculate!'), ['id' => 'calc-button', 'class' => 'btn btn-info']); ?>
</div>