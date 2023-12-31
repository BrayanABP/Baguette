<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore $proveedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedores form content">
            <?= $this->Form->create($proveedore) ?>
            <fieldset>
                <legend><?= __('Add Proveedore') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('Producto_proveedor');
                    echo $this->Form->control('numero_de_contacto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
