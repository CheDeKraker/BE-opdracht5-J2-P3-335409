<?php
$this->component('PageEssentials/head', ['title' => $data['title']]);
?>

<body>
    <h1><?= $data['title'] ?></h1>
    <p>Naam product: <?= $data['allergeenProduct']->name ?></p>
    <p>Barcode: <?= $data['allergeenProduct']->barcode ?></p>

    <table>
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
        </tr>
        <?php if( $data['allergeens'] ) : ?>
            <?php foreach ($data['allergeens'] as $allergeen) : ?>
                <tr>
                    <td><?= $allergeen->name ?></td>
                    <td><?= $allergeen->description ?></td>
                </tr>  
            <?php endforeach; ?>
         <?php else : ?>
            <tr>
                <td>Null</td>
                <td>Null</td>
            </tr>
        <?php endif; ?>
    </table>
</body>



</html>