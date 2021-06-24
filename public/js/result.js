function onloadRequest(){
    console.log("onloadRequest");
}


function ajaxRequest(idTest) {

    let request = new XMLHttpRequest();
    request.open("GET", "index.php?controller=api&action=getrecenttestbyuser&id=" + userId + "&idTest=" + idTest, true);

    console.log("index.php?controller=api&action=getrecenttestbyuser&id=" + userId + "&idTest=" + idTest);

    request.responseType = "json";
    request.onload = function onloadRequest() {
        if (request.status === 200) {
            let response = request.response;
            console.log(response);
            let i = 0;
            for (var key in response) {
                if (response.hasOwnProperty(key)) {
                    results[i] = response[key]['valeur'];
                    console.log(results[i]);
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

var results = [0, 255, 312, 198, 227, 302, 241, 271];

function numAverage(a) {
  var b = a.length,
      c = 0, i;
  for (i = 0; i < b; i++){
    c += Number(a[i]);
  }
  return c/b;
}

var moyenne = numAverage(results);

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar', // point, bar, arc 

    // The data for our dataset
    data: {
        labels: ['0', '1', '2', '3', '4', '5', '6', '7'],
        datasets: [{
            label: 'Temps de réaction en ms',
            backgroundColor: 'rgb(255, 144, 0)',
            borderColor: 'rgb(255, 144, 0)',
            data: results
        }, {
            label: 'valeur moyenne',
            backgroundColor: 'rgb(49, 140, 231)',
            borderColor: 'rgb(49, 140, 231)',
            data: [moyenne],
        }],
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

