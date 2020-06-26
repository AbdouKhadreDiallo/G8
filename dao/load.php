<?php
            include_once 'chambreDao.php';
                $p = new ChambreDao();
                $sortie = $p -> getChambre();
                foreach ($sortie as $key => $value) {

            ?>
                <tr>
                    <th scope="row"><?= $value ->getNumeroChambre() ?></th>
                    <td contenteditable data-id1="<?= $value ->getNumeroChambre() ?>" class="numeroBatiment"><?= $value ->getNumeroBatiment() ?></td>
                    <td contenteditable data-id2="<?= $value ->getNumeroChambre() ?>" class="typeChambre"><?= $value ->getTypeChambre() ?></td>
                    <td><button class="btn-action bn-delete" id="<?= $value ->getNumeroChambre() ?>">Delete</button></td>
                </tr>
                <?php

                }
                ?>