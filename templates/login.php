<form action="index.php" method="post">
    <p><label for="email">Email</label><input class="input" type="text" name="email" required="" value=<?php echo $this -> mail ?>></p>
    <p><label for="password">Password</label><input class="input" type="password" name="password" required="" value=<?php echo $this -> password ?>></p>
    <p><input class="button" type="submit" name="pseudo" required="" value=Valider></p>
</form>