<section class="messages-recus">
<h1>Messages reçus</h1>

<?php if (!empty($messages)): ?>
    <ul>
        <?php foreach ($messages as $message): ?>
                                <li>Fisrtname: <?= htmlspecialchars($message['firstname']) ?> <br>
                                    <span class="important">email: <?= htmlspecialchars($message['email']) ?><br>
                                    message: <?= htmlspecialchars($message['message']) ?> </span><br>
                                    sent_at: <?= htmlspecialchars($message['sent_at']) ?></li>


            
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun message reçu.</p>
<?php endif; ?>
</section>
                