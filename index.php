<!doctype html/>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SimpleCal</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="description" content="A simple calendar for your simple needs">

        <meta property="og:title" content="SimpleCal">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:image:alt" content="">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="manifest" href="site.webmanifest">
        <script src="https://kit.fontawesome.com/7d317bd9cc.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <header>
            <h1>SimpleCal <i class="fa-regular fa-calendar-days fa-sm"></i><br></h1><h2>Your Simple Calendar</h2>
        </header>

        <!-- Clock -->
        <div class="clock-container">
            <div id="clock"></div>
        </div>

        <!-- calendar section -->
        <div class="calendar">
            <div class="nav-btn-container">
                <button class="nav-btn" onclick="">
                    <i class="fa-solid fa-backward"></i>
                </button>
                <h2 id="monthYear" style="margin: 0"></h2>
                <button class="nav-btn" onclick="">
                    <i class="fa-solid fa-forward"></i>
                </button>
            </div>

            <div class="calendar-grid" id="calendar"></div>
        </div>

        <!-- Modal for Add/Edit/Delete appointment -->
        <div class="modal" id="eventModal">
            <div class="modal-content">
                <div id="eventSelectorWrapper">
                    <label for="eventSelector">
                        <strong>Select Event:</strong>
                    </label>
                    <select name="" id="eventSelector">
                        <option disabled selected>Choose Event...</option>
                    </select>
                </div>

                <!-- Main Form -->
                <form method="POST" id="eventForm">
                    <input type="hidden" name="action" id="formAction" value="add">
                    <input type="hidden" name="event_id" id="eventId">

                    <label for="eventName">Event Name:</label>
                    <input type="text" name="event_name" id="eventName" required>

                    <label for="participantName">Participants:</label>
                    <input type="text" name="participant_name" id="participantName" required>

                    <label for="startDate">Start Date:</label>
                    <input type="date" name="start_date" id="startDate" required>

                    <label for="endDate">End Date:</label>
                    <input type="date" name="end_date" id="endDate" required>

                    <label for="eventDescription">Description:</label>
                    <input type="text" name="event_description" id="eventDescription">

                    <button type="submit">
                        <i class="fa-solid fa-floppy-disk"></i>
                    </button>
                </form>

                <!-- Delete Form -->
                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this event?')">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="event_id" id="deleteEventId">
                    <button type="submit" class="submit-btn">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>

                <!-- Cancel -->
                <button type="button" class="submit-btn">
                    <i class="fa-solid fa-ban"></i> Cancel
                </button>
            </div>
        </div>

        <script src="scripts/calendar.js"></script>
    </body>
</html>
