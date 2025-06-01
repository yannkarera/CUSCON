<section class="listing-customers">
<h1>Customers</h1>

<?php if (!empty($customers)): ?>
    <ul>
        <?php foreach ($customers as $customer): ?>
        <table>
            <thead>
                <tr>
                    <th>Fisrtname</th>
                    <th>name</th>
                    <th>email</th>
                </tr>
            </thead>
                              <tbody>
                                <td><?= htmlspecialchars($customer['firstname']) ?></td>
                                <td><?= htmlspecialchars($customer['name']) ?></td>
                                <td><?= htmlspecialchars($customer['email']) ?></td>
                              </tbody>
                               </thead>
            
             </table>
             <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun operateur.</p>
<?php endif; ?>
</section>