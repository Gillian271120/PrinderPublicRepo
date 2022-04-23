<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JwtRefreshToken $jwtRefreshToken
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Jwt Refresh Token'), ['action' => 'edit', $jwtRefreshToken->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Jwt Refresh Token'), ['action' => 'delete', $jwtRefreshToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jwtRefreshToken->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jwt Refresh Tokens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Jwt Refresh Token'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jwtRefreshTokens view content">
            <h3><?= h($jwtRefreshToken->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($jwtRefreshToken->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($jwtRefreshToken->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= h($jwtRefreshToken->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($jwtRefreshToken->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expired') ?></th>
                    <td><?= $this->Number->format($jwtRefreshToken->expired) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($jwtRefreshToken->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($jwtRefreshToken->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
