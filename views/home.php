<?php
require_once('partials/header.php');
require_once('partials/navigation.php');
?>
    <h1>List of users</h1>

    <div class="content">
        <?php if (!$aUsers) : ?>
            <article class="ui message">
                Oops! There is no customer
            </article>
        <?php else: ?>
            <ul class="ui list">
                <?php foreach ($aUsers as $aUser) : ?>
                    <li>Username: <?= $aUser['username']; ?> | Email: <?= $aUser['email'] ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php
require_once('partials/footer.php');
