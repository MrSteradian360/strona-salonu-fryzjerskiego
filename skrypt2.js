var slideIndex = 1;
showSlides(slideIndex);

// Kontrolki (Następny/Poprzedni)
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slajdy");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}


function validate() {

  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();
  data = new Date(Date.parse(document.myForm.data.value));

  today = yyyy + '-' + mm + '-' + dd;

  var re = /\S+@\S+\.\S+/;
  var telefon = /^[0-9]{9}$/;

  if (document.myForm.nazwisko.value == ""
    || document.myForm.data.value == "" || document.myForm.godzina.value == ""
    || document.myForm.telefon.value == "" || document.myForm.email.value == "") {
    alert("Wypełnij wszystkie pola!");
    return false;
  }

  if (document.myForm.data.value <= today) {
    alert("Wybierz inny termin!");
    return false;
  }

  if (!re.test(document.myForm.email.value)) {
    alert("Wprowadź poprawny adres email!");
    return false;
  }

  if (!telefon.test(document.myForm.telefon.value)) {
    alert("Wprowadź poprawny numer!");
    return false;
  }

  if ((data.getDay() == 1 || data.getDay() == 3 || data.getDay() == 5) && 
  (document.myForm.godzina.value < "08:00" || document.myForm.godzina.value > "16:00")) 
  {
    alert("Wprowadź poprawną godzinę");
    return false;
  }

  if ((data.getDay() == 2 || data.getDay() == 4) && 
  (document.myForm.godzina.value < "09:00" || document.myForm.godzina.value > "16:30")) 
  {
    alert("Wprowadź poprawną godzinę");
    return false;
  }

  if (data.getDay() == 0) 
  {
    alert("W niedzielę mamy zamknięte !");
    return false;
  }
  return true;

}

function doSubmit() {
  if (validate()) {
    document.getElementById("form").submit();
  }
}

function zapisane() {
  alert("Dane zostały zapisane poprawnie!");
}
