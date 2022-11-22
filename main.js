
let box = document.getElementById("display");
box.value = "";
let firstValue = 0
let operatorValue = ''
let secondValue = 0

function addToScreen(e) {
  if (box.value == "" && e == '.'){
    box.value += '0';
  }
  if (box.value.length < 12 || box.value.charAt(box.value.length-1) == '.'){
    box.value += e;
  }
  if (e == "c") {
    resetScreen();
  }
}

function resetScreen() {
  box.value = '';
}

function operatorPressed(operator){
  firstValue = box.value
  operatorValue = operator
  resetScreen()
}

function answer() {
  secondValue = box.value;
  if (operatorValue == 'add'){
    box.value = parseFloat(firstValue) + parseFloat(secondValue)
  } else if (operatorValue == 'subtract'){
    box.value = parseFloat(firstValue) - parseFloat(secondValue)
  } else if (operatorValue == 'multiply'){
    box.value = parseFloat(firstValue) * parseFloat(secondValue)
  } else if (operatorValue == 'divide'){
    box.value = parseFloat(firstValue) / parseFloat(secondValue)
  }

  firstValue = 0
  operatorValue = ''
  secondValue = 0
}