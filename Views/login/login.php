<?php $v->layout("_theme")?>

<?php if (!empty($_SESSION['alert'])) {
                echo $_SESSION['alert'];
            } ?>
<form action="<?= SITE["base_url"]?>login/auth" method="POST">
    <img src="<?= SITE["base_url"] ?>/Views/assets/img/avatar.svg">
    <h2 class="title">Bem Vindo</h2>
    <div class="input-div one">
        <div class="i">
            <i class="fas fa-user"></i>
        </div>
        <div class="div">
            <h5>Email</h5>
            <input type="text" name="email" class="input" required>
        </div>
    </div>
    <div class="input-div pass">
        <div class="i"> 
            <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Senha</h5>
            <input type="password" name="password" class="input" required>
        </div>
    </div>
    <a href="<?= SITE['base_url']?>login/reset">Esqueceu sua senha?</a>
    <input type="submit" class="btn" value="Entrar">
</form>