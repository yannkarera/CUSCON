<section class="register">

    <div class="login-container" id="login-container">
        <h1>Log in</h1>
        <?php if (!empty($error)): ?> <p><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form action="gate/login" method="POST">
            <label for="email"></label>
            <input type="email" name="email" placeholder="email">
            <label for="password"></label>
            <input type="password" name="password" placeholder="mot de passe">
            <button type="submit" class="controllers">se connecter</button>
        </form>
    </div>
    <div class="remember">
        <label for=""><input type="checkbox"><span class="text">Remember me</span></label>
        <a href="#" class="modal-link">Forgot password?</a>
    </div>

    <p>
        Don't have an account?
        <a href="/gate/register" class="modal-link">Register here</a>
    </p>

</section>