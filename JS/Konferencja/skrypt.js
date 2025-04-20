function showFormBlock(currentId, nextId) {
  document.getElementById(currentId).classList.remove("active");
  document.getElementById(nextId).classList.add("active");
}

document.getElementById("nastepny1").addEventListener("click", function () {
  const imie = document.getElementById("imie").value;
  const nazwisko = document.getElementById("nazwisko").value;

  if (imie && nazwisko) {
    showFormBlock("form1", "form2");
  } else {
    alert("Proszę wypełnić wszystkie pola");
  }
});

document.getElementById("nastepny2").addEventListener("click", function () {
  const email = document.getElementById("email").value;
  const telefon = document.getElementById("telefon").value;

  if (email && telefon) {
    showFormBlock("form2", "form3");
  } else {
    alert("Proszę wypełnić wszystkie pola");
  }
});

document.getElementById("zatwierdz").addEventListener("click", function () {
  const haslo = document.getElementById("haslo").value;
  const powtorzHaslo = document.getElementById("powtorzHaslo").value;
  const imie = document.getElementById("imie").value;
  const nazwisko = document.getElementById("nazwisko").value;

  if (haslo === powtorzHaslo) {
    console.log(`Witaj ${imie} ${nazwisko}`);
    alert("Formularz zakończony");
  } else {
    alert("Podane hasła różnią się");
  }
});
