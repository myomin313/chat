<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatbot $chatbot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chatbots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chatbots form content">
            <?= $this->Form->create($chatbot) ?>
            <fieldset>
                <legend><?= __('Add Chatbot') ?></legend>
                <?php
                    echo $this->Form->control('messages');
                    echo $this->Form->control('response');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
