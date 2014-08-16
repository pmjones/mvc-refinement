<?php use Aura\Html\Escaper as e; ?>

<div class="blog-intro">
    <h2><?= e::h($this->blog->title) ?></h2>
    <p class="byline"><?= e::h($this->blog->author) ?></p>
    <?= e::h($this->blog->intro) ?>
    <p><?= $this->a("/blog/read/{$this->blog->id}", 'Read More ...'); ?></p>
</div>
