function toggleQuotes(clickedId) {
  const quote1 = document.getElementById("osoba1");
  const quote2 = document.getElementById("osoba2");
  const quote3 = document.getElementById("osoba3");

  if (clickedId === "osoba1") {
    quote1.style.display = "none";
    quote2.style.display = "block";
  } else if (clickedId === "osoba2") {
    quote2.style.display = "none";
    quote3.style.display = "block";
  } else if (clickedId === "osoba3") {
    quote3.style.display = "none";
    quote1.style.display = "block";
  }
}

document.getElementById("osoba1").addEventListener("click", function () {
  toggleQuotes("osoba1");
});

document.getElementById("osoba2").addEventListener("click", function () {
  toggleQuotes("osoba2");
});

document.getElementById("osoba3").addEventListener("click", function () {
  toggleQuotes("osoba3");
});
