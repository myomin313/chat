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
            <?= $this->Html->link(__('Edit Chatbot'), ['action' => 'edit', $chatbot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chatbot'), ['action' => 'delete', $chatbot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatbot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chatbots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chatbot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chatbots view content">
            <h3><?= h($chatbot->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chatbot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chatbot->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chatbot->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Messages') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chatbot->messages)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chatbot->response)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
