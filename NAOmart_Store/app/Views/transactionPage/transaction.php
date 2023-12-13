<!-- application/views/transaction_history.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Transaction History</title>
</head>
<body>

    <h2>User Transaction History</h2>
    <?php echo (session("username"));?>

    <?php if (!empty($transactions)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Item ID</th>
                    <th>Amount</th>
                    <th>Total Price</th>
                    <th>Transaction Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?php echo esc($transaction['transactionId']); ?></td>
                        <td><?php echo esc($transaction['itemId']); ?></td>
                        <td><?php echo esc($transaction['amount']); ?></td>
                        <td><?php echo esc($transaction['totalPrice']); ?></td>
                        <td><?php echo esc($transaction['transactionDate']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No transactions found for this user.</p>
    <?php endif; ?>

</body>
</html>
