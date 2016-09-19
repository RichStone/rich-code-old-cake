<h1>DA Code</h1>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Content') ?></li>
        <li><?= $this->Html->link(__('Postal Services'), ['plugin' => 'MailCalculator', 'controller' => 'postal_services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Numismatorium', 'http://www.numismatorium.com') ?></li>
    </ul>
</nav>
<ul id="upper_menu">
    <li><?= $this->Html->link('About', '/pages/about', ['class' => 'button']); ?></li>
    <li><?= $this->Html->link('Blog', '/pages/blog', ['class' => 'button']);?></li>
    <li><?= $this->Html->link('Oven', '/oven', ['class' => 'button']); ?></li>
</ul>