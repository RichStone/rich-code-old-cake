<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $postalService->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $postalService->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Postal Services'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="postalServices form large-9 medium-8 columns content">
    <?= $this->Form->create($postalService) ?>
    <fieldset>
        <legend><?= __('Edit Postal Service') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('price');
            echo $this->Form->input('tracked');
            echo $this->Form->input('insurance_max_sum');
            echo $this->Form->input('insurance_type');
            echo $this->Form->input('insurance_forbidden_products');
            echo $this->Form->input('max_weight');
            echo $this->Form->input('max_height');
            echo $this->Form->input('max_width');
            echo $this->Form->input('max_length');
            echo $this->Form->input('max_overall_size');
            echo $this->Form->input('country_iso');
            echo $this->Form->input('country_name');
            echo $this->Form->input('shipping_range');
            echo $this->Form->input('additional_info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
