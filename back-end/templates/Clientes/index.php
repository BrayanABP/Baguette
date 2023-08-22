<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tdoc') ?></th>
                    <th><?= $this->Paginator->sort('ndocu') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('fnaci') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('numcont') ?></th>
                    <th><?= $this->Paginator->sort('contra') ?></th>
                    <th><?= $this->Paginator->sort('codigos') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('regisFecha') ?></th>
                    <th><?= $this->Paginator->sort('regisHora') ?></th>
                    <th><?= $this->Paginator->sort('fechaContra') ?></th>
                    <th><?= $this->Paginator->sort('horaContra') ?></th>
                    <th><?= $this->Paginator->sort('numeroTarjeta') ?></th>
                    <th><?= $this->Paginator->sort('titularTarjeta') ?></th>
                    <th><?= $this->Paginator->sort('tarjetaDebito1') ?></th>
                    <th><?= $this->Paginator->sort('tarjetaCredito2') ?></th>
                    <th><?= $this->Paginator->sort('fechaVencimiento') ?></th>
                    <th><?= $this->Paginator->sort('pinTarjeta') ?></th>
                    <th><?= $this->Paginator->sort('correoElectronico') ?></th>
                    <th><?= $this->Paginator->sort('Cuenta') ?></th>
                    <th><?= $this->Paginator->sort('Banco') ?></th>
                    <th><?= $this->Paginator->sort('cuentaAhorros') ?></th>
                    <th><?= $this->Paginator->sort('cuentaCorriente') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->tdoc) ?></td>
                    <td><?= $this->Number->format($cliente->ndocu) ?></td>
                    <td><?= h($cliente->nombre) ?></td>
                    <td><?= h($cliente->fnaci) ?></td>
                    <td><?= h($cliente->correo) ?></td>
                    <td><?= h($cliente->direccion) ?></td>
                    <td><?= h($cliente->numcont) ?></td>
                    <td><?= h($cliente->contra) ?></td>
                    <td><?= $this->Number->format($cliente->codigos) ?></td>
                    <td><?= $cliente->role_id === null ? '' : $this->Number->format($cliente->role_id) ?></td>
                    <td><?= h($cliente->regisFecha) ?></td>
                    <td><?= h($cliente->regisHora) ?></td>
                    <td><?= h($cliente->fechaContra) ?></td>
                    <td><?= h($cliente->horaContra) ?></td>
                    <td><?= $this->Number->format($cliente->numeroTarjeta) ?></td>
                    <td><?= h($cliente->titularTarjeta) ?></td>
                    <td><?= h($cliente->tarjetaDebito1) ?></td>
                    <td><?= h($cliente->tarjetaCredito2) ?></td>
                    <td><?= $this->Number->format($cliente->fechaVencimiento) ?></td>
                    <td><?= $this->Number->format($cliente->pinTarjeta) ?></td>
                    <td><?= h($cliente->correoElectronico) ?></td>
                    <td><?= $this->Number->format($cliente->Cuenta) ?></td>
                    <td><?= $this->Number->format($cliente->Banco) ?></td>
                    <td><?= $this->Number->format($cliente->cuentaAhorros) ?></td>
                    <td><?= $this->Number->format($cliente->cuentaCorriente) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
