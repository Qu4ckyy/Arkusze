function policz() {
  let powierzchnia = +document.getElementById("powierzchnia").value;
  let wynik = document.getElementById("wynik");
  wynik.innerHTML =
    "Liczba potrzebnych puszek: " +
    Math / AbstractRange(Math.ceil(powierzchnia / 4));
}
