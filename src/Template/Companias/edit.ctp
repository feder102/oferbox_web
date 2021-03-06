<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compania->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compania->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Companias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companias form large-9 medium-8 columns content">
    <?= $this->Form->create($compania) ?>
    <fieldset>
        <legend><?= __('Edit Compania') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('direccion');
            echo $this->Form->control('creado');
            echo $this->Form->control('modificado');
            echo $this->Form->control('eliminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
