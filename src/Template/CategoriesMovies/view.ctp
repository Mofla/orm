<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categories Movie'), ['action' => 'edit', $categoriesMovie->movie_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categories Movie'), ['action' => 'delete', $categoriesMovie->movie_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesMovie->movie_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categories Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriesMovies view large-9 medium-8 columns content">
    <h3><?= h($categoriesMovie->movie_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movie') ?></th>
            <td><?= $categoriesMovie->has('movie') ? $this->Html->link($categoriesMovie->movie->title, ['controller' => 'Movies', 'action' => 'view', $categoriesMovie->movie->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $categoriesMovie->has('category') ? $this->Html->link($categoriesMovie->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesMovie->category->id]) : '' ?></td>
        </tr>
    </table>
</div>
