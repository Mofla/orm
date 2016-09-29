<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriesMovie->movie_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesMovie->movie_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categories Movies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriesMovies form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriesMovie) ?>
    <fieldset>
        <legend><?= __('Edit Categories Movie') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
