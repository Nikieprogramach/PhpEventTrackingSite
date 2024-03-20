<?php include 'head.php'; ?>
<?php include 'nav.php'; ?>

    <div class="main">
        <div class="searchEvents">
            <div class="filters">
                <div class="filtersBtn" onclick="openFiltersMenu()">Filters</div>
            </div>
            <div class="inputs">
                <input class="searchEventInput" type="text" placeholder="Search event"/>
            </div>
        </div>
        <div class="filtersMenu notVisible" id="filtersMenu">
            <div class="closeBtn" onclick="openFiltersMenu()">x</div>
            <div class="filtersContainer">
                <div class="typeOfEvent">
                    <p class="expandFilterBtn" onclick="expandFilter('typeOfEvent')">typeOfEvent</p>
                    <div id="typeOfEvent" class="subFilterDropdown notVisible">
                        Bruh
                    </div>
                </div>
            </div>
            <div class="filtersContainer">
                <div class="typeOfEvent">
                    <p class="expandFilterBtn" onclick="expandFilter('host')">host</p>
                    <div id="host" class="subFilterDropdown notVisible">
                        Bruh
                    </div>
                </div>
            </div>
        </div>
        <div class="eventsDisplayContainer">
            <div class="event">
                <p>Name</p>
                <p>Description</p>
                <p>Date/Time</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>