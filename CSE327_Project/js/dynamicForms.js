const addBtn = document.querySelector(".add");
const input = document.querySelector(".inp-group");

function removeInput(){
  this.parentElement.remove();
}

function addInput(){
  const tierNo = document.createElement("select");
  tierNo.placeholder = "Enter Tier Number";
  tierNo.style = "width: 50%; margin: 0;";
  tierNo.name = "tierNo[]";
  tierNo.setAttribute("required", "true");

  const temp = document.createElement("option");
  temp.value = "";
  temp.text = "Selecy a Tier";
  temp.setAttribute("disabled", "true");
  temp.setAttribute("selected", "true");
  temp.setAttribute("hidden", "true");
  tierNo.appendChild(temp);

  for (let i = 0; i < tiersAvailable.length; i++){
    const option = document.createElement("option");
    option.value = tiersAvailable[i];
    option.text = tiersAvailable[i];
    tierNo.appendChild(option);
  }

  const tierProbability = document.createElement("input");
  tierProbability.type = "number";
  tierProbability.placeholder = "Enter Tier Probability";
  tierProbability.style = "width: 50%; margin: 0;";
  tierProbability.name = "tierProbability[]";
  tierProbability.setAttribute("required", "true");

  const btn = document.createElement("a");
  btn.className = "delete";
  btn.innerHTML = "&times;";

  btn.addEventListener("click", removeInput);

  const flex = document.createElement("div");
  flex.className = "flex";

  input.appendChild(flex);
  flex.appendChild(tierNo);
  flex.appendChild(tierProbability);
  flex.appendChild(btn);
}

addBtn.addEventListener("click", addInput);
