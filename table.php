<?php

require __DIR__ . "/head.php";
require __DIR__ . "/logic.php";

?>
<table>

    <tr>
        <th>Team</th>
        <th>Logo</th>
        <th>UEFA Ranking</th>
    </tr>

    <?php foreach ($teams as $teamName => $teamData) : ?>
        <tr>
            <td>
                <h3><?= $teamName ?></h3>
                <p><b>City:</b> <?= $teamData["city"] ?></p>
                <p><b>League:</b> <?= $teamData["league"] ?></p>
                <p><b>Group:</b> <?= $teamData["group"] ?></p>
                <p><a href="<?= $teamData["url"] ?>" target="_blank">Website</a></p>
            </td>
            <td><img src="<?= $teamData["logo"] ?>" alt="<?= $teamName ?> Logo" width="100"></td>
            <td><?= $teamData["uefa-coefficient-ranking"] ?></td>
        </tr>
    <?php endforeach; ?>

</table>