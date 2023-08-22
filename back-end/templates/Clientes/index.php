<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="clientes index content">
    <h3 class="text-center"><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                <th class="actions text-center"><?= __('Acciones') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('id',['label'=> 'Identificador']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('tdoc',['label'=> 'Tipo de documento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('ndocu',['label'=> 'Numero de documento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('nombre',['label'=> 'Nombre']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('fnaci',['label'=> 'Fecha de nacimiento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('correo',['label'=> 'Correo Electrónico']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('direccion',['label'=> 'Dirección']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('numcont',['label'=> 'Teléfono']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('contra',['label'=> 'Contraseña']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('role_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('regisFecha') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('regisHora') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('fechaContra') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('horaContra') ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                <td class="actions text-center">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                    </td>
                    <td class="text-center"><?= $this->Number->format($cliente->id) ?></td>
                    <td  class="text-center"><?= h($cliente->tdoc) ?></td>
                    <td  class="text-center"><?= $this->Number->format($cliente->ndocu) ?></td>
                    <td  class="text-center"><?= h($cliente->nombre) ?></td>
                    <td  class="text-center"><?= h($cliente->fnaci) ?></td>
                    <td  class="text-center"><?= h($cliente->correo) ?></td>
                    <td  class="text-center"><?= h($cliente->direccion) ?></td>
                    <td  class="text-center"><?= h($cliente->numcont) ?></td>
                    <td  class="text-center"><?= h($cliente->contra) ?></td>
                    <td  class="text-center"><?= $cliente->role_id === null ? '' : $this->Number->format($cliente->role_id) ?></td>
                    <td  class="text-center"><?= h($cliente->regisFecha) ?></td>
                    <td  class="text-center"><?= h($cliente->regisHora) ?></td>
                    <td  class="text-center"><?= h($cliente->fechaContra) ?></td>
                    <td  class="text-center"><?= h($cliente->horaContra) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
