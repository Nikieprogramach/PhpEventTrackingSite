<?php include 'head.php'; ?>
<?php include 'nav.php'; ?>

    <div class="main">
        <div class="sign-in-container">
            <form name="form">
                <p class="sign-in-title">Log In</p>
                <input type="email" name="email" class="input" id="email-input" placeholder="Enter your email">
                <input type="password" name="password" class="input" id="password-input" placeholder="Enter your password">
            </form>
            <p id="error-text-message"></p>
            <div class="bottom-div">
                <button class="outlineBtn-dark submit-btn" onclick="LogIn()">Log in</button>
                <p>Don't have an account?<a href="./sign-up.html"> Sign Up</a></p>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>