<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style untuk semua field input */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style untuk button submit  */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style container untuk inputan */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* Kotak pesan ditampilkan ketika pengguna mengklik kolom password */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Tambahkan warna teks hijau dan tanda centang jika persyaratannya benar */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Tambahkan warna teks merah dan "x" jika persyaratannya salah*/
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>

<h3>Password Validation</h3>
<p>Coba form validasi di bawah ini.</p>

<div class="container">
  <form action="">
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
    
    <input type="submit" value="kirim">
  </form>
</div>

<div id="message">
<h3> Password harus terdiri dari: </h3>
   <p id = "letter" class = "invalid"> Huruf <b> kecil </b> </p>
   <p id = "capital" class = "invalid"> Huruf <b> KAPITAL (huruf besar) </b> </p>
   <p id = "number" class = "invalid"> <b>Angka</b>(0-9) </p>
   <p id = "length" class = "invalid"> Minimal <b> 8 karakter </b> </p>
</div>
        
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// Ketika pengguna mengklik bidang kata sandi, tunjukkan kotak pesan
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// Ketika pengguna mengklik di luar field password, sembunyikan kotak pesan
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// Saat pengguna mulai mengetik sesuatu di dalam field password
myInput.onkeyup = function() {
  // Validasi huruf kecil(lowercase)
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validasi huruf kapital
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validasi angka/number
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validasi panjangnya
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>
