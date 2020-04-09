<html>
 <head>
  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
 <style>
#kontener{
width: 960px;
margin: 0 auto;
}

#naglowek{
margin: 10px;
width: 936px;
height: 800px;
border: 2px solid black;
background-color: lightblue;
color: black;
}




div {
  margin-bottom: 10px;
  position: relative;
}

input[type="number"] {
  width: 100px;
}

input + span {
  padding-right: 30px;
}

input:invalid+span:after {
  position: absolute;
  content: '✖';
  padding-left: 5px;
  color: #8b0000;
}

input:valid+span:after {
  position: absolute;
  content: '✓';
  padding-left: 5px;
  color: #009000;
}

</style>

<body>
<div id="kontener">
    <div id="naglowek">
        <h4>zmiana koloru tla</h4>
        <button onclick="myFunction()">Try it</button>

        <h4>Imie (Wielkie litery)</h4>
        <input type="text" style="text-transform: uppercase;" />

        <h4>Nazwisko (Pierwsza wielka litera)</h4>
        <input type="text" style="text-transform: capitalize;" />

        <h4>Kod pocztowy(po 2 znaku mysnik)</h4>
        <input id="kod_pocztowy" />

        <h4>Miasto(Po spacji wielka litera)</h4>
        <input type="text" style="text-transform: capitalize;"  /><br>

        <h4>Telefon</h4>
        <form>
        <div>
          <label for="telNo">(xxx-xxx-xxx): </label>
          <br><input id="telNo" name="telNo" type="tel" required
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
          <span class="validity"></span>
        </div>
      </form>

    <h4>Email</h4>
          <form>
            <div>
              <label for="email">(xxx@gmail.com): </label>
              <br><input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              <span class="validity"></span>
            </div>
          </form>


<script>
//styl okna (kolor tła) zmieniamy przez
function myFunction() {
document.getElementById("naglowek").style.backgroundColor = "red";
}
// wstawienie "-" po 2 znaku
const input = document.getElementById('kod_pocztowy');
document.addEventListener('keyup', e => {
  const val = e.target.value;
  // od którego
  if (val.length < 0) { input.value = e.target.value; }
  // do którego
  if (val.length > 4) {
    input.value = input.value.replace('-', '');
    // wstawienie po
    input.value = input.value.substring(0, 2) + '-' + input.value.substring(2, input.value.length);
  }
});



</script>
</body>


</html>