const wheel = document.getElementById("wheel");
const spinBtn = document.getElementById("spin-btn");
const finalValue = document.getElementById("final-value");

let myChart = new Chart(wheel, {
  plugins: [ChartDataLabels],
  type: "pie",
  data: {
    labels: labelArr,
    datasets: [
      {
        backgroundColor: pieColors,
        data: data,
      },
    ],
  },
  options: {
    responsive: true,
    animation: { duration: 0 },
    plugins: {
      tooltip: false,
      legend: {
        display: false,
      },
      datalabels: {
        color: "#ffffff",
        formatter: (_, context) => context.chart.data.labels[context.dataIndex],
        font: { size: 40 },
      },
    },
  },
});
const valueGenerator = (angleValue) => {
  let check;
  for (let i of rotationValues){
    if (i.minDegree+angleValue < 360 && i.maxDegree+angleValue > 360)
      check = ((i.minDegree+angleValue)%360 <= 90 || (i.maxDegree+angleValue)%360 >= 90);
    else
      check = ((i.minDegree+angleValue)%360 <= 90 && (i.maxDegree+angleValue)%360 >= 90);
    if (check){
      index = (Math.floor(Math.random() * lotteryPrizes[i.value].length));
      finalValue.innerHTML = `<p>Congratulations you got a ${lotteryPrizes[i.value][index]["discount"]}% discount on ${prizeName[lotteryPrizes[i.value][index]["itemID"]]}</p>`;
      spinBtn.disabled = false;
      break;
    }
  }
  if (spinBtn.disabled){
    console.log(angleValue);
    finalValue.innerHTML = `<p>No Luck: Try Again</p>`;
    spinBtn.disabled = false;
  }
};

let count = 0;
let resultValue = 101;
spinBtn.addEventListener("click", () => {
  spinBtn.disabled = true;
  finalValue.innerHTML = `<p>Good Luck!</p>`;
  let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
  let rotationInterval = window.setInterval(() => {
    myChart.options.rotation = myChart.options.rotation + resultValue;
    myChart.update();
    if (myChart.options.rotation >= 360) {
      count += 1;
      resultValue -= 5;
      myChart.options.rotation = 0;
    } else if (resultValue <= 0 || (count > 15 && myChart.options.rotation == randomDegree)) {
      myChart.options.rotation = randomDegree;
      myChart.update();
      valueGenerator(randomDegree);
      clearInterval(rotationInterval);
      count = 0;
      resultValue = 101;
    }
  }, 10);
});
