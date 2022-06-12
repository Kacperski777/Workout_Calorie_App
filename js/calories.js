// Graph produced by library called CHART JS - referenced in the documentation
// variables getting elements;

var ctx = document.getElementById('myChart');
var div = document.querySelector('#div-canvas')
var h1 = document.querySelector('#h1');





// five variables that receive the data inputted by user in the form section
// check if inputs are empty or equal to 0 or less.
// add or remove classes;
// create graph from the data received, using variables stored before.

function submitValues(){
  let calories = document.getElementById('calories').value;
  let carbohydrates = document.getElementById('carbohydrates').value;
  let fat = document.getElementById('fat').value;
  let protein = document.getElementById('protein').value;
  let chart = document.getElementById('chart').value;


  if(calories == "" || carbohydrates == "" || fat == "" || protein == ""){
    return alert("Fill in all the inputs")
  } else if(calories <= 0 || carbohydrates <= 0 || fat <= 0  || protein <= 0 ){
    return alert("Numbers can not equal 0 or be negative")
  } else{
    h1.classList.add("display-none");
    div.classList.remove("chart-container-title");
    div.classList.add("chart-container");



  }


  document.getElementById('calories').value = null;
  document.getElementById('carbohydrates').value = null;
  document.getElementById('fat').value = null;
  document.getElementById('protein').value = null;


  const data = {
    labels: [
      'Calories',
      'Carbohydrate',
      'Fat',
      'Protein'

    ],
    datasets: [{
      label: 'Bar',
      data: [calories , carbohydrates, fat, protein],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 128, 0)'
      ],
      hoverOffset: 4
    }]
  };




  var myChart = new Chart(ctx, {
      type: chart,
      data: data,
      options: {
         plugins: {
             legend: {
                 labels: {
                   color: "white",
                     // This more specific font property overrides the global property
                     font: {
                         size: 17,
                         family: "Bebas Neue",
                     }
                 }
             }
         }
     }

  });
}
