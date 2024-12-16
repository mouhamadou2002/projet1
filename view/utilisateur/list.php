
<a href="?controller=utilisateur&&action=add">ADD PRODUCT</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe</th>
    </tr>
    <?php while( $p = pg_fetch_assoc($utilisateurs)){ ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['prenom'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['mot_de_passe'] ?></td>
            <td>
                <a href="?controller=utilisateur&&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <button>Update</button>
            </td>
        </tr>
    <?php } ?>    
</table>