<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JwtRefreshToken[]|\Cake\Collection\CollectionInterface $jwtRefreshTokens
 */
?>
<div class="jwtRefreshTokens index content">
    <?= $this->Html->link(__('New Jwt Refresh Token'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jwt Refresh Tokens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th><?= $this->Paginator->sort('expired') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jwtRefreshTokens as $jwtRefreshToken): ?>
                <tr>
                    <td><?= h($jwtRefreshToken->id) ?></td>
                    <td><?= h($jwtRefreshToken->model) ?></td>
                    <td><?= h($jwtRefreshToken->foreign_key) ?></td>
                    <td><?= h($jwtRefreshToken->token) ?></td>
                    <td><?= $this->Number->format($jwtRefreshToken->expired) ?></td>
                    <td><?= h($jwtRefreshToken->created) ?></td>
                    <td><?= h($jwtRefreshToken->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jwtRefreshToken->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jwtRefreshToken->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jwtRefreshToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jwtRefreshToken->id)]) ?>
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
