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
            <?= $this->Html->link(__('List Jwt Refresh Tokens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jwtRefreshTokens form content">
            <?= $this->Form->create($jwtRefreshToken) ?>
            <fieldset>
                <legend><?= __('Add Jwt Refresh Token') ?></legend>
                <?php
                    echo $this->Form->control('model');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('token');
                    echo $this->Form->control('expired');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
