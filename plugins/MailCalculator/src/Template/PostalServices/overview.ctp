<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Postal Service'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postalServices overview large-9 medium-8 columns content">
    <h3><?= __('Postal Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('tracked') ?></th>
            <th><?= $this->Paginator->sort('insurance_max_sum') ?></th>
            <th><?= $this->Paginator->sort('insurance_type') ?></th>
            <th><?= $this->Paginator->sort('max_weight') ?></th>
            <th><?= $this->Paginator->sort('max_height') ?></th>
            <th><?= $this->Paginator->sort('max_width') ?></th>
            <th><?= $this->Paginator->sort('max_length') ?></th>
            <th><?= $this->Paginator->sort('max_overall_size') ?></th>
            <th><?= $this->Paginator->sort('country_name') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($postalServices as $postalService): ?>
            <tr>
                <td><?= $this->Number->format($postalService->id) ?></td>
                <td><?= h($postalService->name) ?></td>
                <td><?= $this->Number->format($postalService->price) ?></td>
                <td><?= h($postalService->tracked) ?></td>
                <td><?= $this->Number->format($postalService->insurance_max_sum) ?></td>
                <td><?= h($postalService->insurance_type) ?></td>
                <td><?= $this->Number->format($postalService->max_weight) ?></td>
                <td><?= $this->Number->format($postalService->max_height) ?></td>
                <td><?= $this->Number->format($postalService->max_width) ?></td>
                <td><?= $this->Number->format($postalService->max_length) ?></td>
                <td><?= $this->Number->format($postalService->max_overall_size) ?></td>
                <td><?= h($postalService->country_name) ?></td>
                <td><?= h($postalService->created) ?></td>
                <td><?= h($postalService->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postalService->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postalService->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postalService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postalService->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
