<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chatbot> $chatbots
 */
?>
<div class="chatbots index content">
    <?= $this->Html->link(__('New Chatbot'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chatbots') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Message') ?></th>
                    <th><?= $this->Paginator->sort('Response') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chatbots as $chatbot): ?>
                <tr>
                    <td><?= $this->Number->format($chatbot->id) ?></td>
                    <td><?= h($chatbot->messages) ?></td>
                    <td><?= h($chatbot->response) ?></td>
                    <td><?= h($chatbot->created) ?></td>
                    <td><?= h($chatbot->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chatbot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chatbot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chatbot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatbot->id)]) ?>
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
