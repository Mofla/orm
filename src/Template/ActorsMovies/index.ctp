<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actors Movie'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actorsMovies index large-9 medium-8 columns content">
    <h3><?= __('Actors Movies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('actor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actorsMovies as $actorsMovie): ?>
            <tr>
                <td><?= $actorsMovie->has('actor') ? $this->Html->link($actorsMovie->actor->id, ['controller' => 'Actors', 'action' => 'view', $actorsMovie->actor->id]) : '' ?></td>
                <td><?= $actorsMovie->has('movie') ? $this->Html->link($actorsMovie->movie->title, ['controller' => 'Movies', 'action' => 'view', $actorsMovie->movie->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actorsMovie->actor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actorsMovie->actor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actorsMovie->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorsMovie->actor_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
