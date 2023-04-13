<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule - Leadership Project Team 8</title>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/gantt.css" />
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
          src="../assets/img/User-Profile-Pic.png	"
          alt="User Profile Picture"
          class="user--img"
        />
        <h3 class="user--name">Bullet Board</h3>
       <!-- // <i class="uil uil-angle-down icons down-arrow"></i> -->
      </div>
      <!-- <div class="search-bar">
        <i class="uil uil-search icons searchbar"></i>
        <input type="search" name="#" id="#" placeholder="Search..." />
      </div> -->
      <!-- <div class="notification-block">
        <h4 class="user-role-title">Admin</h4>
        <i class="uil uil-envelope-alt icons mail"></i>
        <i class="uil uil-bell icons bell"></i>
      </div> -->
    </header>
    <main class="main-content-wrapper">
      <aside class="side-panel">
        <a href="../index.php"
          ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.503 31.496">
            <path
              id="Icon_awesome-home"
              data-name="Icon awesome-home"
              d="M19.714,10.425,6.75,21.1V32.625A1.125,1.125,0,0,0,7.875,33.75l7.879-.02A1.125,1.125,0,0,0,16.874,32.6v-6.73A1.125,1.125,0,0,1,18,24.75h4.5a1.125,1.125,0,0,1,1.125,1.125V32.6a1.125,1.125,0,0,0,1.125,1.129l7.876.022a1.125,1.125,0,0,0,1.125-1.125V21.094L20.789,10.425A.857.857,0,0,0,19.714,10.425Zm20.477,7.257-5.878-4.845V3.1a.844.844,0,0,0-.844-.844H29.531a.844.844,0,0,0-.844.844V8.2l-6.3-5.179a3.375,3.375,0,0,0-4.289,0L.305,17.681A.844.844,0,0,0,.193,18.87l1.793,2.18a.844.844,0,0,0,1.189.115L19.714,7.542a.857.857,0,0,1,1.076,0l16.54,13.622a.844.844,0,0,0,1.188-.112l1.793-2.18a.844.844,0,0,0-.12-1.19Z"
              transform="translate(0.001 -2.254)"
            />
          </svg>
          Dashboard</a
        >
        <a href="teams.php"
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
        <a href="schedule.php" class="active"
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
        <a href="progress.php">
          <svg
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
        <h2 class="team-name"></h2>
      </aside>
      <div class="chartCard">
        <div class="chartBox">
          <canvas id="myChart"></canvas>
        </div>
      </div>
      <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"
      ></script>
      <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"
      ></script>
      <script>
        // setup
        const chartLabel = "Leaderboard Production Timeline";
        const data = {
          labels: [
            "Project Plan",
            "Design Requirements",
            "Specification Requirements",
            "Prototyping",
            "Debugging",
            "Design & Implementation",
          ],
          datasets: [
            {
              label: chartLabel,
              data: [
                ["2023-03-01", "2023-03-07"],
                ["2023-03-07", "2023-03-10"],
                ["2023-03-10", "2023-03-17"],
                ["2023-03-17", "2023-03-28"],
                ["2023-03-28", "2023-03-30"],
                ["2023-03-30", "2023-04-07"],
              ],
              backgroundColor: [
                "rgba(153, 102, 255, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(255, 26, 104, 1)",
                "rgba(0, 0, 0, 1)",
              ],
              barPercentage: 0.25,
            },
          ],
        };
        const legendMargin = {
          id: "legendMargin",
          beforeInit(chart, legend, options) {
            const fitValue = chart.legend.fit;

            chart.legend.fit = function fit() {
              fitValue.bind(chart.legend)();
              return (this.height += 10);
            };
          },
        };

        const toolTipTitle = (toolTipItems) => {
          return "";
        };

        const toolTipLabel = (toolTipItems) => {
          return chartLabel;
        };

        // config
        const config = {
          type: "bar",
          data,
          options: {
            indexAxis: "y",
            scales: {
              x: {
                min: "2023-03-01",
                type: "time",
                time: {
                  unit: "day",
                },
              },
              y: {
                beginAtZero: true,
              },
            },
            plugins: {
              legend: {
                position: "top",
                labels: {
                  padding: 50,
                },
              },
              tooltip: {
                yAlign: "bottom",
                displayColors: false,
                callbacks: {
                  title: toolTipTitle,
                  label: toolTipLabel,
                },
              },
            },
          },
          plugins: [legendMargin],
        };

        // render init block
        const myChart = new Chart(document.getElementById("myChart"), config);

        // Instantly assign Chart.js version
        const chartVersion = document.getElementById("chartVersion");
        chartVersion.innerText = Chart.version;
      </script>
    </main>
  </body>
</html>
