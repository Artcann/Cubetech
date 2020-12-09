var salles;

let request = new XMLHttpRequest();
request.open("GET","index.php?controller=api&action=getusers", true);
request.responseType = "json";
request.onload = function() {
    if(request.status === 200) {
        let response = request.response;
        console.log(response['1']['login']);

    } else {
        console.log('La demande réseau pour salles.json a échoué avec la réponse ' + request.status + ': ' + request.statusText)
    }
};

request.send();

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['0', '10', '20', '30', '40', '50', '60'],
        datasets: [{
            label: 'Résultat Test Fréquence Cardiaque',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [75, 80, 85, 78, 80, 83, 75]
        }]
    },

    // Configuration options go here
    options: {}
});