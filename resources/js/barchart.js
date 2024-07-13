import Chart from "chart.js/auto";

const labels = ["User", "Member", "Membership", "Merchandise", "Duration"];

const data = {
    labels: labels,
    datasets: [
        {
            label: "My First Dataset",
            data: [1, 20, 2, 16, 4],
            backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
            ],
            borderColor: [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
            ],
            borderWidth: 1,
        },
    ],
};

const config = {
    type: "bar",
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
};

new Chart(document.getElementById("barChart"), config);
