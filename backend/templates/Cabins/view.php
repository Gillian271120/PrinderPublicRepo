<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cabin $cabin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cabin'), ['action' => 'edit', $cabin->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cabin'), ['action' => 'delete', $cabin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cabin->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cabins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cabin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cabins view content">
            <h3><?= h($cabin->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($cabin->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($cabin->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cabin->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($cabin->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cabin->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cabin->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
