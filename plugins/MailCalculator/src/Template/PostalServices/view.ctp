<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Postal Service'), ['action' => 'edit', $postalService->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Postal Service'), ['action' => 'delete', $postalService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postalService->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Postal Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Postal Service'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postalServices view large-9 medium-8 columns content">
    <h3><?= h($postalService->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($postalService->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Type') ?></th>
            <td><?= h($postalService->insurance_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Country Name') ?></th>
            <td><?= h($postalService->country_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($postalService->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($postalService->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Max Sum') ?></th>
            <td><?= $this->Number->format($postalService->insurance_max_sum) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Weight') ?></th>
            <td><?= $this->Number->format($postalService->max_weight) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Height') ?></th>
            <td><?= $this->Number->format($postalService->max_height) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Width') ?></th>
            <td><?= $this->Number->format($postalService->max_width) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Length') ?></th>
            <td><?= $this->Number->format($postalService->max_length) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Overall Size') ?></th>
            <td><?= $this->Number->format($postalService->max_overall_size) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($postalService->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($postalService->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Tracked') ?></th>
            <td><?= $postalService->tracked ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Insurance Forbidden Products') ?></h4>
        <?= $this->Text->autoParagraph(h($postalService->insurance_forbidden_products)); ?>
    </div>
    <div class="row">
        <h4><?= __('Country Iso') ?></h4>
        <?= $this->Text->autoParagraph(h($postalService->country_iso)); ?>
    </div>
    <div class="row">
        <h4><?= __('Shipping Range') ?></h4>
        <?= $this->Text->autoParagraph(h($postalService->shipping_range)); ?>
    </div>
    <div class="row">
        <h4><?= __('Additional Info') ?></h4>
        <?= $this->Text->autoParagraph(h($postalService->additional_info)); ?>
    </div>
</div>
