<div class="bg-white scroller">
    <table class="table border rounded">
        <thead class="text-uppercase sticky-top text-light">
        <tr>
            <th>id</th>
            <th class="text-left">
                <span>marque&emsp;</span>
                &emsp;<a class='tri' href="../../../exam_final_php_poo_tarik/index.php?controller=default&action=orderBy"><i class="fas fa-caret-down"></i></a>
                &emsp;<a class='tri' href="../../../exam_final_php_poo_tarik/index.php?controller=default&action=orderByDesc"><i class="fas fa-caret-up"></i></a>
            </th>
            <th>
                <span>modèle</span>
                &emsp;<a class='tri' href="../../../exam_final_php_poo_tarik/index.php?controller=default&action=orderByModeleAsc"><i class="fas fa-caret-down"></i></a>
                &emsp;<a class='tri' href="../../../exam_final_php_poo_tarik/index.php?controller=default&action=orderByModeleDesc"><i class="fas fa-caret-up"></i></a>
            </th>
            <th>énergie</th>
            <th>boite automatique</th>
            <th>photo</th>
            <th class="text-center" colspan="3">options</th>
        </tr>
        </thead>
        <tbody>
        <tr><?php foreach ($voitures as $voiture){?>
            <td><?=$voiture->getId();?></td>
            <td class="text-left"><?=$voiture->getMarque();?></td>
            <td><?=$voiture->getModele();?></td>
            <td><?=$voiture->getEnergie();?></td>
            <td><?=$voiture->getBoiteAuto()?'oui':'non';?></td>
            <td width="10%"><img width=50% height=40px src="assets/<?=$voiture->getPicture();?>"</td>
            <td class=""><a href="../../../exam_final_php_poo_tarik/index.php?controller=voitures&action=delete&id=<?php echo $voiture->getId()?>"><i class="fas fa-trash"></i></a></td>
            <td class=""><a href="../../../exam_final_php_poo_tarik/index.php?controller=voitures&action=updateForm&id=<?php echo $voiture->getId()?>"><i class="far fa-edit"></i></a></td>
            <td class=""><a title="voir le détail" href="../../../exam_final_php_poo_tarik/index.php?controller=voitures&action=displayOne&id=<?php echo $voiture->getId()?>"><i class="fas fa-info-circle"></i></a></td>
        </tr>
        <?php
        }?>
        </tbody>
    </table>
</div>
