<?php include 'head.php'; ?>
<?php include 'nav.php'; ?>

    <main class="main">
        <div class="heroSection">
            <div class="info">
                <p class="title-60">Plan It</p>
                <p class="text-20">Plan your events like a pro!</p>
                <div class="heroBtns">
                    <a href="./events.html">
                        <button class="outlineBtn-light bigBtn">Events</button>
                    </a>
                    <a href="./index.html">
                        <button class="outlineBtn-light bigBtn">Log In</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="popularEvents">
            <div style="z-index: 500; width: 100%;">
                <p class="title-60 color-caa8f5">Trending events around you!</p>                
            </div>
            <div class="eventsContainer">
                <div class="event">
                    <p class="eventTitle">Test</p>
                    <p class="locationOfEvent">Somewhere</p>
                    <p class="timeAndDay">Sometime</p>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>
</body>
</html>