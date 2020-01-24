<header>
    <div class='header'>
        <a href="index.php?action=actors"><img class="logo" src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF"></a>
        <div class="header-right">
            <i class="far fa-user-circle"></i>
            <a href="index.php?action=myaccount"><i class="fas fa-user-edit"></i> <?= $_SESSION['surname'] ?> <?= $_SESSION['name'] ?></a>
            <a href="index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a>
         </div>
    </div>
</header>
