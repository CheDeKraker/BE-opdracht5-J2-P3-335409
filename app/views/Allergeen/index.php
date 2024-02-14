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
                <td>-</td>
                <td>In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken</td>
            </tr>
            <?php header("refresh:4;url=/Product/index") ?>
        <?php endif; ?>
    </table>
</body>



</html>