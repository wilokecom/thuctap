<?php
require_once('partials/header.php');
?>
    <form action="register" method="POST" class="ui form">
        <div class="field">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        
        <button class="ui button" type="submit">Submit</button>
    </form>
<?php
require_once('partials/footer.php');
