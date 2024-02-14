<?php
$this->component('PageEssentials/head', ['title' => $data['title']]);
?>

<body>
    <h1><?= $data['title'] ?></h1>
    
        <p>Naam leverancier: <?= $data['leverancierInfo']->name ?></p>
        <p>Contactpersoon leverancier: <?= $data['leverancierInfo']->contactPerson ?></p>
        <p>Leverancier nummer: <?= $data['leverancierInfo']->supplierNumber ?></p>
        <p>Mobiel: <?= $data['leverancierInfo']->phone ?></p>
    
    <table>
        <tr>
            <th>Naam Product</th>
            <th>Datum laatste levering</th>
            <th>Aantal</th>
            <th>Eerstvolgende levering</th>
        </tr>
        <?php foreach ($data['levernacierProduct'] as $leverancier) : ?>
            <tr>
                <td><?= $leverancier->name ?></td>
                <td><?= $leverancier->dateDelivery ?></td>
                <td><?= $leverancier->amount ?></td>
                <?php if ($leverancier->dateNextDelivery == null) : ?>
                    <td>Null</td>
                <?php else : ?>
                    <td><?= $leverancier->dateNextDelivery ?></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>



</html>