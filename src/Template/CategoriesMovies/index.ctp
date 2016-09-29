<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categories Movie'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriesMovies index large-9 medium-8 columns content">
    <h3><?= __('Categories Movies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriesMovies as $categoriesMovie): ?>
            <tr>
                <td><?= $categoriesMovie->has('movie') ? $this->Html->link($categoriesMovie->movie->title, ['controller' => 'Movies', 'action' => 'view', $categoriesMovie->movie->id]) : '' ?></td>
                <td><?= $categoriesMovie->has('category') ? $this->Html->link($categoriesMovie->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesMovie->category->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriesMovie->movie_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriesMovie->movie_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriesMovie->movie_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesMovie->movie_id)]) ?>
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
