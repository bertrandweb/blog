<form action="index.php" method="post">
    <p><label for="nom">Nom</label><input class="input" type="text" name="nom" required="" value=<?php echo $this-> nom ?>></p>
    <p><label for="prenom">Prénom</label><input class="input" type="text" name="prenom" required="" value=<?php echo $this-> prenom ?>></p>
    <p><label for="email">Email</label><input class="input" type="text" name="email" required="" value=<?php echo $this -> mail ?>></p>
    <p><label for="password">Password</label><input class="input" type="password" name="password" required="" value=<?php echo $this -> password ?>></p>
    <p><label for="pseudo">Pseudo</label><input class="input" type="text" name="pseudo" required="" value=<?php echo $this -> pseudo ?>></p>
    <p><input class="button" type="submit" name="pseudo" required="" value=Valider></p>
</form>