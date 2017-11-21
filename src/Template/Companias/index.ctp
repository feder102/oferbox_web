<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Compania[]|\Cake\Collection\CollectionInterface $companias
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compania'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companias index large-9 medium-8 columns content">
    <h3><?= __('Companias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eliminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companias as $compania): ?>
            <tr>
                <td><?= $this->Number->format($compania->id) ?></td>
                <td><?= h($compania->nombre) ?></td>
                <td><?= h($compania->creado) ?></td>
                <td><?= h($compania->modificado) ?></td>
                <td><?= h($compania->eliminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compania->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compania->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compania->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compania->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
