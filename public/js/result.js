function ajaxRequest(idTest) {

    let request = new XMLHttpRequest();
    request.open("GET", "index.php?controller=api&action=getrecenttestbyuser&id=" + userId + "&idTest=" + idTest, true);
    request.setRequestHeader('Authorization', 'helloworld');

    request.responseType = "json";
    request.onload = function () {
        if (request.status === 200) {
            let response = request.response;
            console.log(response);
            let i = 0;
            for (var key in response) {
                if (response.hasOwnProperty(key)) {
                    results[i] = response[key]['valeur'];
                }
                i++;
            }
            chart.options.legend.display = true;
            chart.update();
        } else {
            console.log('La demande réseau pour salles.json a échoué avec la réponse ' + request.status + ': ' + request.statusText)
        }
    };

    request.send();
}

var results = [0, 0, 0, 0, 0, 0, 0];

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['0', '10', '20', '30', '40', '50', '60'],
        datasets: [{
            label: 'Test',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: results
        }]
    },

    // Configuration options go here
    options: {
        legend: {
            display: false
        }
    }
});

const selectButton = document.querySelector("#selectResult");

selectButton.addEventListener('change', (event) => {
    const selectedTest = event.target.value;
    ajaxRequest(selectedTest);
});

