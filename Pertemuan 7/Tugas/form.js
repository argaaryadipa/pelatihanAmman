// EVENT ONCHANGE PERTAMA
// function info() {
//     var asal = document.getElementById("boxPilihan").value;
//     document.getElementById("info").innerHTML="Anda memilih : "+asal";
// }

// EVENT ONCHANGE
const boxPilihan = document.getElementById("boxPilihan");
const info = document.getElementById("info");

boxPilihan.addEventListener("change", function (e) {
  info.innerText = `Anda memilih : ${e.target.value}`;
});

// FUNGSI ONSUBMIT
function tampil() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var ttl = document.getElementById("ttl").value;
  var boxPilihan = document.getElementById("boxPilihan").value;
  //  awal jenis kelamin
  var lakiLaki = document.getElementById("lakiLaki").value;
  var perempuan = document.getElementById("perempuan").value;
  // akhir jenis kelamin
  var noTelepon = document.getElementById("noTelepon").value;
  var foto = document.getElementById("foto").value;
  var komentar = document.getElementById("komentar").value;

  document.write("Nama    : " + nama + "<br>");
  document.write("Email    : " + email + "<br>");
  document.write("Tanggal Lahir    : " + ttl + "<br>");
  document.write("Asal    : " + boxPilihan + "<br>");
  // awal jenis kelamin
  document.write("Jenis Kelamin    : " + lakiLaki + "<br>");
  document.write("Jenis Kelamin    : " + perempuan + "<br>");
  // akhir jenis kelamin
  document.write("No Telepon    : " + noTelepon + "<br>");
  document.write("Foto    : " + foto + "<br>");
  document.write("Komentar Anda    : " + komentar + "<br>");
}
document.getElementById("form").onsubmit = tampil;

$("#selesai").click(function () {
  Swal.fire({
    icon: "success",
    title: "Inserted Successfully",
    html: "Nama : " + $("#nama").val() + "<br>",
    // "Age : " + $("#age").val(),
  });
});
