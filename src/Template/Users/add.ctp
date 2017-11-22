<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php //__('Actions') ?></li>
        <li><?php //$this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar usuario al sistema') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            $this->Form->input('role', [
                'options' => ['administrador' => 'Administrador', 'cobrador' => 'Cobrador']
            ])
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
