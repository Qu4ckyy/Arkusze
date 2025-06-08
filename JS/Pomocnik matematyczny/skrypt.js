function licz(typ) {
  let numA = parseInt(document.getElementById("numA").value);
  let numB = parseInt(document.getElementById("numB").value);
  let wynik;

  if (typ === "dodawanie") {
    wynik = numA + numB;
  }
  if (typ === "odejmowanie") {
    wynik = numA - numB;
  }
  if (typ === "mnozenie") {
    wynik = numA * numB;
  }
  if (typ === "dzielenie") {
    wynik = numA / numB;
  }
  if (typ === "potegowanie") {
    wynik = Math.pow(numA, numB);
  }

  document.getElementById("wynik").innerHTML = "Wynik: " + wynik;
}
