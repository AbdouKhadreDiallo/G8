<?php
            include_once 'EtudiantDao.php';
                $p = new EtudiantDao();
                $sortie = $p -> getStd();
                foreach ($sortie as $key => $value) {

            ?>
                <tr>
                    <th scope="row"><?= $value ->getMatricule() ?></th>
                    <td><?= $value ->getNom() ?></td>
                    <td><?= $value ->getPrenom() ?></td>
                    <td><?= $value ->getEmail() ?></td>
                    <td><?= $value ->getTel() ?></td>
                    <td><?= $value ->getBirthday() ?></td>
                    <td><?= $value ->gettypeEtudiant() ?></td>
                    <td><button class="btn-action bn-delete" id="<?= $value ->getMatricule() ?>">Delete</button></td>
                </tr>
                <?php

                }
                ?>