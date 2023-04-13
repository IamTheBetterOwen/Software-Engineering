console.log("Connection Established");

const modals = document.querySelectorAll("[data-modal]");
const teamRankings = document.querySelectorAll(".team-listing");
const rankPosition = document.querySelectorAll("[data-position]");

let i = 0;

while (i < teamRankings.length) {
  rankPosition[i].dataset.position = i + 1;
  if (i === 0) {
    rankPosition[i].innerHTML = i + 1 + "st";
  } else if (i === 1) {
    rankPosition[i].innerHTML = i + 1 + "nd";
  } else if (i === 2) {
    rankPosition[i].innerHTML = i + 1 + "rd";
  } else {
    rankPosition[i].innerHTML = i + 1 + "th";
  }
  i++;
}

var specialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

// Select the form element
const addTeamForm = document.querySelector("#addTeamModal form");

// Add an event listener for when the form is submitted
addTeamForm.addEventListener("submit", (event) => {
  // Select the input fields
  const teamNameInput = document.querySelector("#TeamName");
  const teamImageInput = document.querySelector("#TeamImage");
  const teamScoreInput = document.querySelector("#TeamScore");
  var errorMessage = [];
  const errorContainer = document.querySelector(
    "#addTeamModal .error-messages"
  );

  // Check if the required fields are filled
  if (!teamNameInput.value || !teamImageInput.value || !teamScoreInput.value) {
    // Push error message
    errorMessage.push("<span>Please fill in all required fields.</span>");
  }

  // Check if the team score is a number
  if (isNaN(teamScoreInput.value)) {
    // Push error message
    errorMessage.push("<span>The team score must be a number.</span>");
  }

  // Check if the team name has special characters
  if (specialCharacters.test(teamNameInput.value)) {
    // Push error message
    errorMessage.push(
      "<span>The team name cannot have any special characters.</span>"
    );
  }

  // Check if the team score is between 0 and 100
  if (teamScoreInput.value < 0 || teamScoreInput.value > 100) {
    // Push error message
    errorMessage.push("<span>The team score must be between 0 and 100.</span>");
  }

  if (errorMessage.length > 0) {
    // Prevent the default form submission behavior
    event.preventDefault();
    // Display error messages
    errorContainer.innerHTML = errorMessage.join("");
    return;
  }
});

// Select the form element
const editTeamForm = document.querySelector("#editTeamModal form");

// Add an event listener for when the form is submitted
editTeamForm.addEventListener("submit", (event) => {
  // Select the input fields
  const teamIdInput = document.querySelector("#TeamId");
  const teamNameInput = document.querySelector("#TeamName");
  const teamImageInput = document.querySelector("#TeamImage");
  const teamScoreInput = document.querySelector("#TeamScore");
  var errorMessage = [];
  const errorContainer = document.querySelector(
    "#editTeamModal .error-messages"
  );

  // Check if the required fields are filled
  if (
    !teamNameInput.value ||
    !teamIdInput.value ||
    !teamImageInput.value ||
    !teamScoreInput.value
  ) {
    // Push error message
    errorMessage.push("<span>Please fill in all required fields.</span>");
  }

  // Check if the team score is a number
  if (isNaN(teamScoreInput.value)) {
    // Push error message
    errorMessage.push("<span>The team score must be a number.</span>");
  }

  // Check if the team name has special characters
  if (specialCharacters.test(teamNameInput.value)) {
    // Push error message
    errorMessage.push(
      "<span>The team name cannot have any special characters.</span>"
    );
  }

  // Check if the team id is greater than 0
  if (teamScoreInput.value > 0) {
    // Push error message
    errorMessage.push("<span>The team id must be greater than 0.</span>");
  }

  // Check if the team score is between 0 and 100
  if (teamScoreInput.value < 0 || teamScoreInput.value > 100) {
    // Push error message
    errorMessage.push("<span>The team score must be between 0 and 100.</span>");
  }

  if (errorMessage.length > 0) {
    // Prevent the default form submission behavior
    event.preventDefault();
    // Display error messages
    errorContainer.innerHTML = errorMessage.join("");
    return;
  }
});

// Select the form element
const addMilestoneForm = document.querySelector("#addMilestoneModal form");

// Add an event listener for when the form is submitted
addMilestoneForm.addEventListener("submit", (event) => {
  // Select the input fields
  const teamIdInput = document.querySelector("#addMilestoneModal #TeamId");
  const milestoneInput = document.querySelector(
    "#addMilestoneModal #TeamMilestone"
  );
  const milestoneDescriptionInput = document.querySelector(
    "#TeamMilestoneDescription"
  );
  var errorMessage = [];
  const errorContainer = document.querySelector(
    "#addMilestoneModal .error-messages"
  );

  // Check if the required fields are filled
  if (
    !teamIdInput.value ||
    !milestoneInput.value ||
    !milestoneDescriptionInput.value
  ) {
    // Push error message
    errorMessage.push("<span>Please fill in all required fields.</span>");
  }

  // Check if the team id less greater than 0
  if (teamIdInput.value < 0) {
    // Push error message
    errorMessage.push("<span>The team id must be less than 0.</span>");
  }

  if (errorMessage.length > 0) {
    // Prevent the default form submission behavior
    event.preventDefault();
    // Display error messages
    errorContainer.innerHTML = errorMessage.join("");
    return;
  }
});

const editMilestoneForm = document.querySelector("#editMilestoneModal form");

editMilestoneForm.addEventListener("submit", (event) => {
  // Select the input fields
  const milestoneIdInput = document.querySelector(
    "#editMilestoneModal #MilestoneId"
  );
  const milestoneInput = document.querySelector(
    "#editMilestoneModal #TeamMilestone"
  );
  const milestoneDescriptionInput = document.querySelector(
    "#editMilestoneModal #TeamMilestoneDescription"
  );
  var errorMessage = [];
  const errorContainer = document.querySelector(
    "#editMilestoneModal .error-messages"
  );

  // Check if the required fields are filled
  if (
    !milestoneIdInput.value ||
    !milestoneInput.value ||
    !milestoneDescriptionInput.value
  ) {
    // Push error message
    errorMessage.push("<span>Please fill in all required fields.</span>");
  }

  // Check if the milestone id is less than 0
  if (milestoneIdInput.value < 0) {
    // Push error message
    errorMessage.push("<span>The milestone id must be less than 0.</span>");
  }

  if (errorMessage.length > 0) {
    // Prevent the default form submission behavior
    event.preventDefault();
    // Display error messages
    errorContainer.innerHTML = errorMessage.join("");
    return;
  }
});

modals.forEach(function (trigger) {
  trigger.addEventListener("click", function (event) {
    event.preventDefault();
    const modal = document.getElementById(trigger.dataset.modal);
    modal.classList.add("open");
    const exits = modal.querySelectorAll(".modal-exit");
    exits.forEach(function (exit) {
      exit.addEventListener("click", function (event) {
        event.preventDefault();
        modal.classList.remove("open");
      });
    });
  });
});
