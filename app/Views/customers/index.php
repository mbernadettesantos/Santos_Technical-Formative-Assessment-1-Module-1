<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Customers</title>
</head>
<body>
    <?= $this->include('partials/nav') ?>
    <h1>Customer Accounts</h1>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>