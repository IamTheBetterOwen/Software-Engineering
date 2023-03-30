const modals = document.querySelectorAll("[data-modal]");
const teamRankings = document.querySelectorAll(".team-listing");
const rankPosition = document.querySelectorAll("[data-position]");

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
