<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>BMI Calculator</title>
</head>

<body>
  <?php include './components/navigation.php' ?>
  <section class="bmi-calculator">
    <div class="bmi-calculator__contents">
      <h1>BMI Calculator</h1>
      <div>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
          <option value="Pria" selected>Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
        <label for="tinggi_badan">Tinggi Badan</label>
        <input type="number" id="tinggi_badan" />
        <label for="berat_badan">Berat Badan</label>
        <input type="number" id="berat_badan" />
        <button onclick="show()">Hitung</button>
      </div>
      <div class="hasil hidden">
        <h2 id="hasil__header">Hasil</h2>
        <p>Index Massa Tubuh : <span id="hasil__bmi">30</span></p>
        <p>Kategori : <span id="hasil__badan">Kegemukan</span></p>
      </div>
    </div>
  </section>
  <script>
    function show() {
      var beratBadan = document.getElementById("berat_badan").value
      var tinggiBadan = document.getElementById("tinggi_badan").value / 100
      var gender = document.querySelector('select').value
      var bmi = parseInt(beratBadan / tinggiBadan ** 2);
      var kategori = "";
      if (gender == "Pria") {
        if (bmi < 17) kategori = 'Kurus';
        else if (bmi >= 17 && bmi < 23) kategori = 'Normal';
        else if (bmi >= 23 && bmi < 27) kategori = 'Kegemukan';
        else if (bmi >= 27) kategori = 'Obesitas';
      } else if (gender == "Wanita") {
        if (bmi < 18) kategori = 'Kurus';
        else if (bmi >= 18 && bmi < 25) kategori = 'Normal';
        else if (bmi >= 25 && bmi < 27) kategori = 'Kegemukan';
        else if (bmi >= 27) kategori = 'Obesitas';
      }
      document.getElementById('hasil__header').innerHTML = "Hasil"
      document.getElementById('hasil__bmi').innerHTML = bmi
      document.getElementById('hasil__badan').innerHTML = kategori
      try {
        document.querySelector('div.hasil.hidden').classList.remove('hidden');
      } catch (error) {}
    }
  </script>
</body>

</html>