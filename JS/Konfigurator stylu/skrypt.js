function tlo(kolor) {
  document.getElementById("prawy").style.backgroundColor = kolor;
}

function czcionka(kolor) {
  document.getElementById("prawy").style.color = kolor;
}

function rozmiar(rozmiar) {
  document.getElementById("prawy").style.fontSize = rozmiar;
}

function ramka(stan) {
  if (stan == true) {
    document.getElementById("image").style.border = "1px solid #ccc";
  } else {
    document.getElementById("image").style.border = "none";
  }
}

function punktor(punktor) {
  document.getElementById("lista").style.listStyleType = punktor;
}
