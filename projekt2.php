<!DOCTYPE html>
<html lang="pl">

<head>
  <link rel="stylesheet" href="style2.css">
  </link>
  <meta charset="UTF-8" />
  <title>&#9986 Perfect Cut - Salon fryzjerski</title>
  <link rel="icon" href=" ">
  <script src="skrypt2.js"></script>

</head>

<body>
  <h1 id="start"> &#9986 Perfect Cut &#9986</h1>
  <h2>- SALON FRYZJERSKI -</h2>
  <header>
    <ul class="ul1">
      <li><a href="#start">Start</a></li>
      <li><a href="#info">O nas</a></li>
      <li><a class="gallery" href="#galeria">Galeria</a></li>
      <li><a href="#wizyta">Umów spotkanie</a></li>
      <li><a href="#cennik">Cennik</a></li>
      <li><a href="#godziny">Godziny otwarcia</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </header>
  <main>
    <h3 id="info">O nas</h3>
    <p>
      &emsp;Nasz salon zajmuje się profesjonalnym strzyżeniem oraz modelowaniem włosów zarówno u kobiet jak i u mężczyzn.
      Tradycja naszej sieci salonów sięga swoją historią roku 1878, kiedy to nasz założyciel Heinrich Missel von Kattanna uznał, że strzyżenie
      owiec to nie wszystko na co go stać i zjął się ścinaniem (a poprzez własną fantazję, także i modelowaniem) włosów miejscowych rolników.
      Bardzo szybko jego zaangażowanie zostało zauważone przez wójta gminy oraz miejscowego pastora, którzy namówili go, aby wyjechał do miasta
      i zajął się swoją pracą na większą skalę. W Paryżu, do którego się udał, zyskał niemałą sławę oraz uznanie w oczach elit.
      W ciągu następnych 10 lat stał się jednym z najsłynniejszych wirtuozerów nożyc i zdobył nagrodę "Platynowe Nożyce" wręczaną najlepszemu
      fryzjerowi w kraju. Po zdobyciu tej nagrody otworzył pierwsze salony poza Paryżem. Aż do śmierci oddawał się swojej pasji, pozostając
      w bardzo wysokiej formie, docenianej i sowicie opłacanej przez klientów. Salony, które wiernie oddawały jego styl, były otwierane w całej Europie
      i istenieją po dziś dzień pod nazwą "Perfect Cut".<br>
      <br>
      &emsp;Mając na względzie tak odpowiedzialne zadanie, podtrzymania wysokiego poziomu narzuconego przez Heinricha Missela von Kattana'a,
      staramy się świadczyć od wielu lat jak najlepsze i jak najbardziej wyrafinowane oraz prestiżowe zabiegi, pozwalające włosom nie tylko
      dobrze wyglądać, ale również czuć się wyjątkowo. W naszym salonie każdy Twój włos jest traktowany z należytą uwagą, tak abyś po odbytym zabiegu
      mógł poczuć, że Twoja fryzura nie tylko wygląda, ale i jest nienaganna.
    </p>

    <!-- Galeria zdjęć -->
    <h3 id="galeria">Galeria</h3>
    <p style="text-align: center; margin-top: 30px;">Kliknij na zdjęcie, aby je obejrzeć: </p>
    <div class="container">

      <!-- Zdjęcia -->
      <div class="slajdy">
        <div class="numer">1 / 6</div>
        <img src="zdjecia/1.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">2 / 6</div>
        <img src="zdjecia/2.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">3 / 6</div>
        <img src="zdjecia/3.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">4 / 6</div>
        <img src="zdjecia/4.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">5 / 6</div>
        <img src="zdjecia/5.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">6 / 6</div>
        <img src="zdjecia/6.jpg" style="width:100%">
      </div>

      <!-- Przyciski -->
      <a class="poprzedni" onclick="plusSlides(-1)">&#10094;</a>
      <a class="nastepny" onclick="plusSlides(1)">&#10095;</a>

      <!-- Miniaturki zdjęć -->
      <div class="rzad">
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/1.jpg" style="width:100%" onclick="currentSlide(1)" onload="currentSlide(1)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/2.jpg" style="width:100%" onclick="currentSlide(2)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/3.jpg" style="width:100%" onclick="currentSlide(3)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/4.jpg" style="width:100%" onclick="currentSlide(4)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/5.jpg" style="width:100%" onclick="currentSlide(5)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/6.jpg" style="width:100%" onclick="currentSlide(6)">
        </div>
      </div>
    </div>

    <h3 id="wizyta">Umów spotkanie</h3>

    <p style="text-align: center; margin-top: 30px; font-size: 22px;">
      Bardzo prosimy o umawianie się na spotkania w godzinach otwarcia salonu (najpóźniej jednak pół godziny
      przed zamknięciem). </p>

    <div class="formularz">
      <form method="POST" action="" name="myForm" id="form">
        <h4>Imię</h4><input type="text" name="imie"><br>
        <h4>Nazwisko</h4><input type="text" name="nazwisko"><br>
        <h4>Data</h4><input type="date" name="data"><br>
        <h4>Godzina</h4><input type="time" name="godzina"><br>
        <h4>Telefon</h4><input type="text" name="telefon" id="telefon" class="kolor2"><br>
        <h4>Email</h4><input type="text" name="email"><br>
        <input type="hidden" name="myForm" value="selectForm" />
        <input type="button" name="button" value="Zatwierdź" style="margin-top: 20px; font-size: 20px;" onclick="return doSubmit()">
      </form>

    </div>
    

    <?php
    if (isset($_POST['myForm'])) {
      $a = $_POST['imie'];
      $b = $_POST['nazwisko'];
      $c = $_POST['data'];
      $d = $_POST['godzina'];
      $e = $_POST['telefon'];
      $f = $_POST['email'];

      if (
        empty($_POST["imie"]) || empty($_POST["nazwisko"]) || empty($_POST["data"])
        || empty($_POST["godzina"]) ||  empty($_POST["telefon"]) ||  empty($_POST["email"])
      ) {
        echo "Uzupełnij wszystkie dane!";
      }

      if (!filter_var($f, FILTER_VALIDATE_EMAIL)) {
        echo "Podaj poprawny email!";
      } 
      
      else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
          die("Błąd połączenia: " . $conn->connect_error);
        }

        $sql = "CREATE DATABASE IF NOT EXISTS myDB";
        if ($conn->query($sql) === TRUE) {
        } else {
          echo "Błąd: " . $conn->error;
        }


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Błąd połączenia : " . $conn->connect_error);
        }

        $sql = "CREATE TABLE IF NOT EXISTS klienci (
                   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                   imie NVARCHAR(30) NOT NULL,
                   nazwisko NVARCHAR(30) NOT NULL,
                   data_ NVARCHAR(30) NOT NULL,
                   godzina NVARCHAR(30) NOT NULL,
                   telefon NVARCHAR(30) NOT NULL,
                   email NVARCHAR(30) NOT NULL,
                   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                   )";

        if ($conn->query($sql) === TRUE) {
        } else {
          echo "Błąd: " . $conn->error;
        }

        $sql = "INSERT INTO klienci (imie, nazwisko, data_, godzina, telefon, email)
        VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

        if ($conn->query($sql) === TRUE) {
          echo '<script type="text/javascript">',
          'zapisane();',
          '</script>';
        } else {
          echo "Błąd: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
      }
    }

    ?>

    <h3 id="cennik">Cennik</h3>

    <div class="tytul">
      <p style="margin-right:15%; margin-left: 18%; font-size: 50px; margin-bottom:20px; margin-top:10px;">Kobiety</p>
      <p style="margin-right:0%; margin-left:21%; font-size: 50px; margin-bottom:20px; margin-top:10px;">Mężczyźni</p>
    </div>

    <div class="row" style="box-sizing: border-box; display: flex;
  flex-direction: row;">
      <div class="column">
        <table>
          <tr>
            <th>Włosy</th>
            <th>Krótkie</th>
            <th>Średnie</th>
            <th>Długie</th>
          </tr>
          <tr>
            <td>Strzyżenie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Mycie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Modelowanie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
        </table>
      </div>
      <div class="column">
        <table>
          <tr>
            <th>Włosy</th>
            <th>Krótkie</th>
            <th>Średnie</th>
            <th>Długie</th>
          </tr>
          <tr>
            <td>Strzyżenie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Mycie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Modelowanie</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
          </tr>
        </table>
      </div>
    </div>

    <h3 id="godziny">Godziny otwarcia</h3>
    <p style="text-align: center; margin-top: 30px; font-size: 25px;">

      &emsp;Jesteśmy do państwa dyspozycji 6 dni w tygodniu w następujących godzinach:
    </p>
    <div class="row" style="box-sizing: border-box; display: flex;
  flex-direction: row;">
      <div class="column">
        <table>
          <tr>
            <th>Dzień</th>
            <th>Godziny</th>
          </tr>
          <tr>
            <td>Poniedziałek</td>
            <td>8:00 - 16:30</td>
          </tr>
          <tr>
            <td>Wtorek</td>
            <td>9:00 - 17:00</td>
          </tr>
          <tr>
            <td>Środa</td>
            <td>8:00 - 16:30</td>
          </tr>
          <tr>
            <td>Czwartek</td>
            <td>9:00 - 17:00</td>
          </tr>
          <tr>
            <td>Piątek</td>
            <td>8:00 - 16:30</td>
          </tr>
          <tr>
            <td>Sobota</td>
            <td>10:00 - 14:00</td>
          </tr>
          <tr>
            <td>Niedziela</td>
            <td>ZAMKNIĘTE</td>
          </tr>
        </table>
      </div>
    </div>
    <h3 id="kontakt">Kontakt</h3>
    <p>
    <div class="row" style="box-sizing: border-box; display: flex;
    flex-direction: row;">
      <div class="column">
        <h5>&#9743 123 456 789</h5>
      </div>
      <div class="column">
        <h6>&#9993 perfectcut@gmail.com</h6>
      </div>
    </div>
    </p>
    <p class="dół">Czekamy na was!</p>
  </main>

</body>

</html>
