<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Check</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>


        <?php foreach ($transactions as $transaction):?>
            <tr>
                <td><?= $transaction['date'] ?></td>
                <td><?= $transaction['checkNo'] ?></td>
                <td><?= $transaction['desc'] ?></td>
                <td><?= $transaction['amt'] ?></td>
            </tr>
        
        <?php endforeach ?>
        

        
        
    </table>
</body>
</html>