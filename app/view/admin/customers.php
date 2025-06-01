<section class="listing-customers">
<h1>Customers</h1>

<?php if (!empty($customers)): ?>
    <ul>
        <?php foreach ($customers as $customer): ?>

                    <li>
                    Fisrtname: <?= htmlspecialchars($customer['firstname']) ?><br>
                    name: <?= htmlspecialchars($customer['name']) ?><br>
                    email: <?= htmlspecialchars($customer['email']) ?><br>
                    </li>

            
             <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun operateur.</p>
<?php endif; ?>
</section>