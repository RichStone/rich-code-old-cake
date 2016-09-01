<div>
    <p>
        Einführung <br>
        Anhand der folgenden Schritte können Sie versuchen, das Problem zu ermitteln:
        Gehen Sie zu Anwendungen > Systemeinstellungen > Netzwerk > Assistent , um Ihre Verbindung zu testen.
    </p>
</div>
<div>
    <?= $this->Html->link('Rechner', ['controller' => 'postal_services', 'action' => 'calculate'], ['class' => 'button']); ?>
    <?= $this->Html->link('Statistiken', ['controller' => 'postal_services', 'action' => 'statistics'], ['class' => 'button']); ?>
    <?= $this->Html->link('Übersicht', ['controller' => 'postal_services', 'action' => 'overview'], ['class' => 'button']); ?>
</div>