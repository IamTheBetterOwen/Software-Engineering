<?php
  include("path.php");
  // include(ROOT_PATH . "/src/app/database/db_connect.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Leadership Project Team 8</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <script src="assets/js/app.js" defer></script>
  </head>
  <body>
    <header>
      <div class="user-profile">
        <img
          src="assets/img/User-Profile-Pic.png	"
          alt="User Profile Picture"
          class="user--img"
        />
        <h3 class="user--name">Ashley</h3>
        <i class="uil uil-angle-down icons down-arrow"></i>
      </div>
      <div class="search-bar">
        <i class="uil uil-search icons searchbar"></i>
        <input type="search" name="#" id="#" placeholder="Search..." />
      </div>
      <div class="notification-block">
        <h4 class="user-role-title">Admin</h4>
        <i class="uil uil-envelope-alt icons mail"></i>
        <i class="uil uil-bell icons bell"></i>
      </div>
    </header>
    <main class="main-content-wrapper dashboard">
      <aside class="side-panel">
<<<<<<< Updated upstream
        <a href="index.html" class="active">
=======
        <a href="index.php" class="active">
>>>>>>> Stashed changes
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40.503"
            height="31.496"
            viewBox="0 0 40.503 31.496"
          >
            <path
              id="Icon_awesome-home"
              data-name="Icon awesome-home"
              d="M19.714,10.425,6.75,21.1V32.625A1.125,1.125,0,0,0,7.875,33.75l7.879-.02A1.125,1.125,0,0,0,16.874,32.6v-6.73A1.125,1.125,0,0,1,18,24.75h4.5a1.125,1.125,0,0,1,1.125,1.125V32.6a1.125,1.125,0,0,0,1.125,1.129l7.876.022a1.125,1.125,0,0,0,1.125-1.125V21.094L20.789,10.425A.857.857,0,0,0,19.714,10.425Zm20.477,7.257-5.878-4.845V3.1a.844.844,0,0,0-.844-.844H29.531a.844.844,0,0,0-.844.844V8.2l-6.3-5.179a3.375,3.375,0,0,0-4.289,0L.305,17.681A.844.844,0,0,0,.193,18.87l1.793,2.18a.844.844,0,0,0,1.189.115L19.714,7.542a.857.857,0,0,1,1.076,0l16.54,13.622a.844.844,0,0,0,1.188-.112l1.793-2.18a.844.844,0,0,0-.12-1.19Z"
              transform="translate(0.001 -2.254)"
            />
          </svg>
          Dashboard</a
        >
<<<<<<< Updated upstream
        <a href="src/teams.html"
=======
        <a href="src/teams.php"
>>>>>>> Stashed changes
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="30.857"
            height="27.429"
            viewBox="0 0 30.857 27.429"
          >
            <path
              id="Icon_metro-users"
              data-name="Icon metro-users"
              d="M23.143,25.784V24.371A7.657,7.657,0,0,0,26.571,18c0-4.26,0-7.714-5.143-7.714S16.286,13.74,16.286,18a7.657,7.657,0,0,0,3.429,6.371v1.414C13.9,26.26,9.429,29.117,9.429,32.571h24c0-3.455-4.47-6.312-10.286-6.787Zm-11.807.662a16.287,16.287,0,0,1,5.351-2.154A9.67,9.67,0,0,1,15.6,22.711,9.816,9.816,0,0,1,14.357,18c0-2.3,0-4.482.82-6.261a5.581,5.581,0,0,1,4.265-3.2c-.453-2.049-1.659-3.4-4.87-3.4-5.143,0-5.143,3.454-5.143,7.714a7.657,7.657,0,0,0,3.429,6.371v1.414c-5.815.475-10.286,3.333-10.286,6.787h7.473a10.98,10.98,0,0,1,1.291-.982Z"
              transform="translate(-2.571 -5.143)"
            />
          </svg>
          Teams</a
        >
        <a href="src/schedule.html"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="36"
            height="31.5"
            viewBox="0 0 36 31.5"
          >
            <path
              id="Icon_open-project"
              data-name="Icon open-project"
              d="M0,0V31.5H4.5V0ZM31.5,0V31.5H36V0ZM9,4.5V9h9V4.5Zm4.5,9V18h9V13.5Zm4.5,9V27h9V22.5Z"
            />
          </svg>
          Schedule</a
        >
        <a href="src/progress.html"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="39.99"
            height="32.5"
            viewBox="0 0 39.99 32.5"
          >
            <path
              id="Icon_metro-chart-bars"
              data-name="Icon metro-chart-bars"
              d="M2.571,33.284h39.99v5H2.571Zm5-10h5v7.5h-5Zm7.5-10h5v17.5h-5Zm7.5,7.5h5v10h-5Zm7.5-15h5v25h-5Z"
              transform="translate(-2.571 -5.784)"
            />
          </svg>
          Progress</a
        >
<<<<<<< Updated upstream
        <h2 class="team-name"></h2>
=======
        <h2 class="Team-name"></h2>
>>>>>>> Stashed changes
      </aside>
      <!-- TODO -->
      <section class="welcome-dashboard">
        <div class="h3 section-title">Welcome back, Ashley</div>
        <p>
          Here you can quickly and easily add or update leader-board information
          to better track your position. Simply choose from the below options to
          manage the data you want.
        </p>
      </section>
      <section class="admin-dashboard-content">
        <button data-modal="addTeamModal">Add Team</button>
        <button data-modal="editTeamModal">Edit Team</button>
        <button data-modal="addMilestoneModal">Add Milestone</button>
        <button data-modal="editMilestoneModal">Update Milestone</button>

        <dialog id="addTeamModal">
<<<<<<< Updated upstream
          <form action="index.php" method="post">
            <div>
              <h4 class="modal-title">Add Team</h4>
              <label for="teamName">Team Name:</label>
              <input name="teamName" type="text" />
              <label for="teamImage">Team Icon:</label>
              <input
                name="teamImage"
=======
           <form enctype="multipart/form-data" action="/Software-Engineering-Local/src/app/helpers/processForm.php" method="post">
            <div>
              <h4 class="modal-title">Add Team</h4>
              <label for="TeamName">Team Name:</label>
              <input name="TeamName" id="TeamName" type="text" />
              <label for="TeamImage">Team Icon:</label>
              <input
                name="TeamImage" id="TeamImage"
>>>>>>> Stashed changes
                type="file"
                accept=".jpg, .jpeg, .png, .svg"
              />
            </div>
<<<<<<< Updated upstream
            <label for="teamScore">Team Score:</label>
            <input name="teamScore" type="text" />
            <div class="flex-container">
              <button type="submit" name="add-team">Submit</button>
=======
            <label for="TeamScore">Team Score:</label>
            <input name="TeamScore" id="TeamScore" type="text" />
            <div class="flex-container">
              <button id="add-team" name="add-team">Submit</button>
>>>>>>> Stashed changes
              <button class="modal-exit">Cancel</button>
            </div>
          </form>
        </dialog>

        <dialog id="editTeamModal">
<<<<<<< Updated upstream
          <form action="index.php" method="post">
            <div>
              <h4 class="modal-title">Edit Team</h4>
              <label for="teamID">Team ID:</label>
              <input name="teamID" type="text" />
              <label for="teamName">Team Name:</label>
              <input name="teamName" type="text" />
            </div>
            <label for="teamImage">Team Icon:</label>
              <input
                name="teamImage"
=======
          <form enctype="multipart/form-data" action="/Software-Engineering-Local/src/app/helpers/processForm.php" method="post">
            <div>
              <h4 class="modal-title">Edit Team</h4>
              <label for="TeamID">Team ID:</label>
              <input name="TeamID" id="TeamId" type="text" />
              <label for="TeamName">Team Name:</label>
              <input name="TeamName" id="TeamName" type="text" />
            </div>
            <label for="TeamImage">Team Icon:</label>
              <input
                name="TeamImage" id="TeamImage"
>>>>>>> Stashed changes
                type="file"
                accept=".jpg, .jpeg, .png, .svg"
              />
            </div>
<<<<<<< Updated upstream
            <label for="teamScore">Team Score:</label>
            <input name="teamScore" type="text" />
            <div class="flex-container">
              <button type="submit" name="edit-team">Submit</button>
=======
            <label for="TeamScore">Team Score:</label>
            <input name="TeamScore" id="TeamScore" type="text" />
            <div class="flex-container">
              <button id="edit-team" name="edit-team">Submit</button>
>>>>>>> Stashed changes
              <button class="modal-exit">Cancel</button>
            </div>
          </form>
        </dialog>

        <dialog id="addMilestoneModal">
<<<<<<< Updated upstream
          <form action="index.php" method="post">
            <div>
              <h4 class="modal-title">Add New Milestone</h4>
              <label for="teamID">Team ID:</label>
              <input name="teamID" type="text" />
              <label for="teamMilestone">Milestone:</label>
              <input name="teamMilestone" type="text" />
              <label for="teamMilestone">Milestone Description:</label>
              <input name="teamMilestoneDescription" type="text" />
            </div>
            <div class="flex-container">
              <button type="submit" name="add-milestone">Submit</button>
=======
          <form enctype="multipart/form-data" action="/Software-Engineering-Local/src/app/helpers/processForm.php" method="post">
            <div>
              <h4 class="modal-title">Add New Milestone</h4>
              <label for="TeamID">Team ID:</label>
              <input name="TeamID" id="TeamId" type="text" />
              <label for="TeamMilestone">Milestone:</label>
              <input name="TeamMilestone" id="TeamMilestone" type="text" />
              <label for="TeamMilestone">Milestone Description:</label>
              <input name="TeamMilestoneDescription" id="TeamMilstoneDescription" type="text" />
            </div>
            <div class="flex-container">
              <button  id="add-milestone" name="add-milestone">Submit</button>
>>>>>>> Stashed changes
              <button class="modal-exit">Cancel</button>
            </div>
          </form>
        </dialog>

        <dialog id="editMilestoneModal">
<<<<<<< Updated upstream
          <form action="index.php" method="post">
            <div>
              <h4 class="modal-title">Update Milestone</h4>
              <label for="teamID">Team ID:</label>
              <input name="teamID" type="text" />
              <label for="teamMilestone">Milestone:</label>
              <input name="teamMilestone" type="text" />
              <label for="teamMilestone">Milestone Description:</label>
              <input name="teamMilestoneDescription" type="text" />
            </div>
            <div class="flex-container">
              <button type="submit" name="edit-milestone">Submit</button>
=======
          <form enctype="multipart/form-data" action="/Software-Engineering-Local/src/app/helpers/processForm.php" method="post">
            <div>
              <h4 class="modal-title">Update Milestone</h4>
              <label for="TeamID">Team ID:</label>
              <input name="TeamID" id="TeamId" type="text" />
              <label for="TeamMilestone">Milestone:</label>
              <input name="TeamMilestone" id="TeamMilestone" type="text" />
              <label for="TeamMilestone">Milestone Description:</label>
              <input name="TeamMilestoneDescription" id="TeamMilstoneDescription" type="text" />
            </div>
            <div class="flex-container">
              <button  id="edit-milestone" name="edit-milestone">Submit</button>
>>>>>>> Stashed changes
              <button class="modal-exit">Cancel</button>
            </div>
          </form>
        </dialog>
      </section>
    </main>
  </body>
</html>
