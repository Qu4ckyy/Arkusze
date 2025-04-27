function oblicz() {
  const kursReact = document.getElementById("react").checked;
  const kursJS = document.getElementById("js").checked;
  const liczbaRat = parseInt(document.getElementById("raty").value);
  const miasto = document.getElementById("miasto").value;
  const wynik = document.getElementById("wynik");

  const cenaReact = 5000;
  const cenaJS = 3000;

  let kwotaCalkowita = 0;
  if (kursReact) kwotaCalkowita += cenaReact;
  if (kursJS) kwotaCalkowita += cenaJS;

  if (kwotaCalkowita === 0) {
    wynik.textContent = "Wybierz przynajmniej jeden kurs.";
    return;
  }
  if (isNaN(liczbaRat) || liczbaRat < 1) {
    wynik.textContent = `Kurs odbędzie sie w ${miasto}. Koszt całkowity" ${kwotaCalkowita} zł`;
  }

  const rata = (kwotaCalkowita / liczbaRat).toFixed(2);
  wynik.textContent = `Kurs odbędzie sie w ${miasto}. Koszt całkowity: ${kwotaCalkowita} zł. Płacisz ${liczbaRat} rat po ${rata} zł`;
}
