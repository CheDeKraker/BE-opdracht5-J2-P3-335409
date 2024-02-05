<?php
$this->component('PageEssentials/head', ['title' => $data['title']]);
?>

<body>
    <!-- All html goes here -->
    <h1><?= $data['title'] ?></h1>
    <table>
        <tr>
            <th>Barcode</th>
            <th>Naam</th>
            <th>Verpakkingseenheid</th>
            <th>Aantal aanwezig</th>
            <th>Allergene Info</th>
            <th>Leverantie Info</th>
        </tr>
        <?php foreach ($data['products'] as $product) : ?>
            <tr>
                <td><?= $product->barcode ?></td>
                <td><?= $product->name ?></td>
                <td><?= $product->packageUnit ?></td>
                <?php if ($product->inStorage == null) : ?>
                    <td>0</td>
                <?php else : ?>
                    <td><?= $product->inStorage ?></td>
                <?php endif; ?>

            </tr>
        <?php endforeach; ?>
</body>

<!-- Page still has to be closed -->

</html>