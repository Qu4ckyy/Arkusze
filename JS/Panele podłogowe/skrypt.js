function Oblicz() {
  const szerokosc = parseFloat(document.getElementById("szerokosc").value);
  const dlugosc = parseFloat(document.getElementById("dlugosc").value);
  const typPanelu = document.querySelector('input[name="typ_panelu"]:checked');
  const wynik = document.getElementById("wynik");

  if (!szerokosc || !dlugosc || !typPanelu || szerokosc <= 0 || dlugosc <= 0) {
    wynik.textContent = "Wprowadź poprawne dane.";
    return;
  }

  const pole = szerokosc * dlugosc;

  let kosztZaM2 = 0;
  if (typPanelu.value === "laminowane") kosztZaM2 = 12;
  else if (typPanelu.value === "winylowe") kosztZaM2 = 14;
  else if (typPanelu.value === "deska") kosztZaM2 = 18;

  const koszt = pole * kosztZaM2;

  wynik.textContent = `Pole powierzchni pomieszczenia: ${pole} m², koszt montażu ${koszt} zł`;
}
