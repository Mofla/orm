<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actors Movie'), ['action' => 'edit', $actorsMovie->actor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actors Movie'), ['action' => 'delete', $actorsMovie->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorsMovie->actor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actors Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actors Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actorsMovies view large-9 medium-8 columns content">
    <h3><?= h($actorsMovie->actor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Actor') ?></th>
            <td><?= $actorsMovie->has('actor') ? $this->Html->link($actorsMovie->actor->id, ['controller' => 'Actors', 'action' => 'view', $actorsMovie->actor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie') ?></th>
            <td><?= $actorsMovie->has('movie') ? $this->Html->link($actorsMovie->movie->title, ['controller' => 'Movies', 'action' => 'view', $actorsMovie->movie->id]) : '' ?></td>
        </tr>
    </table>
</div>
