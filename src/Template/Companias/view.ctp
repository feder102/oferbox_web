<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Compania $compania
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compania'), ['action' => 'edit', $compania->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compania'), ['action' => 'delete', $compania->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compania->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compania'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companias view large-9 medium-8 columns content">
    <h3><?= h($compania->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($compania->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compania->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($compania->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($compania->modificado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $compania->eliminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($compania->direccion)); ?>
    </div>
</div>
