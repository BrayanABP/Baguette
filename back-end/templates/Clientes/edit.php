<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Edit Cliente') ?></legend>
                <?php
                    echo $this->Form->control('tdoc');
                    echo $this->Form->control('ndocu');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('fnaci');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('numcont');
                    echo $this->Form->control('contra');
                    echo $this->Form->control('role_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
