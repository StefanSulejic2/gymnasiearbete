<div role ="main">
    <h2>Logga in</h2>
    <form action="frågaoss.php" method="post">
       
            
            <?php echo $login_errormsg; ?>
            <p class="input">
                <label class="widelbl" for="username">Användarnamn:</label><br>
                <input type="text" name="username" maxlength="20" value="<?php echo $login_username; ?>" id="username" required>
            </p>
            <p class="input">
                <label class="widelbl" for="password">Lösenord:</label><br>
                <input type="password" name="password" value="" id="password" required>
            </p>
            <p>
                <input type="submit" value="Logga in">
            </p>
        
    </form>
</div>