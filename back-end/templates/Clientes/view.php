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
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tdoc') ?></th>
                    <td><?= h($cliente->tdoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fnaci') ?></th>
                    <td><?= h($cliente->fnaci) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($cliente->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($cliente->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numcont') ?></th>
                    <td><?= h($cliente->numcont) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contra') ?></th>
                    <td><?= h($cliente->contra) ?></td>
                </tr>
                <tr>
                    <th><?= __('TitularTarjeta') ?></th>
                    <td><?= h($cliente->titularTarjeta) ?></td>
                </tr>
                <tr>
                    <th><?= __('TarjetaDebito1') ?></th>
                    <td><?= h($cliente->tarjetaDebito1) ?></td>
                </tr>
                <tr>
                    <th><?= __('TarjetaCredito2') ?></th>
                    <td><?= h($cliente->tarjetaCredito2) ?></td>
                </tr>
                <tr>
                    <th><?= __('CorreoElectronico') ?></th>
                    <td><?= h($cliente->correoElectronico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ndocu') ?></th>
                    <td><?= $this->Number->format($cliente->ndocu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigos') ?></th>
                    <td><?= $this->Number->format($cliente->codigos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role Id') ?></th>
                    <td><?= $cliente->role_id === null ? '' : $this->Number->format($cliente->role_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroTarjeta') ?></th>
                    <td><?= $this->Number->format($cliente->numeroTarjeta) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaVencimiento') ?></th>
                    <td><?= $this->Number->format($cliente->fechaVencimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('PinTarjeta') ?></th>
                    <td><?= $this->Number->format($cliente->pinTarjeta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuenta') ?></th>
                    <td><?= $this->Number->format($cliente->Cuenta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Banco') ?></th>
                    <td><?= $this->Number->format($cliente->Banco) ?></td>
                </tr>
                <tr>
                    <th><?= __('CuentaAhorros') ?></th>
                    <td><?= $this->Number->format($cliente->cuentaAhorros) ?></td>
                </tr>
                <tr>
                    <th><?= __('CuentaCorriente') ?></th>
                    <td><?= $this->Number->format($cliente->cuentaCorriente) ?></td>
                </tr>
                <tr>
                    <th><?= __('RegisFecha') ?></th>
                    <td><?= h($cliente->regisFecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('RegisHora') ?></th>
                    <td><?= h($cliente->regisHora) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaContra') ?></th>
                    <td><?= h($cliente->fechaContra) ?></td>
                </tr>
                <tr>
                    <th><?= __('HoraContra') ?></th>
                    <td><?= h($cliente->horaContra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
