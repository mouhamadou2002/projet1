<form action="?controller=utilisateur&&action=update" method="POST">
    <input type="text" name="id" value="<?= $utilisateur['id'] ?>" hidden><br>
    
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="<?= $utilisateur['nom'] ?>"><br>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" value="<?= $utilisateur['prenom'] ?>"><br>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?= $utilisateur['email'] ?>"><br>

    <label for="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe"><br>

    <button type="submit">Update</button>
</form>
