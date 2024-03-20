<?php include 'head.php'; ?>
<?php include 'nav.php'; ?>

    <div class="main">
        <div class="sign-up-container">
            <form name="form">
                <p class="sign-up-title">Sign Up</p>
                <input type="text" name="name" class="input" id="name-input" placeholder="Enter your name">
                <input type="email" name="email" class="input" id="email-input" placeholder="Enter your email">
                <input type="password" name="password" class="input" id="password-input" placeholder="Enter your password">
            </form>
            <p id="error-text-message"></p>
            <div class="bottom-div">
                <button class="outlineBtn-dark submit-btn" onclick="SignUp()">Sign Up</button>
                <p>Already have an account?<a href="./sign-in.html"> Sign In</a></p>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>