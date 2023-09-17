var dataBarang = ["Laptop", "Mouse", "Keyboard"];

function showBarang() {
  var listBarang = document.getElementById("list-barang");
  // clear list barang
  // listBarang.innerHTML = "";
  listBarang.innerHTML =
    "<tr><th>No</th><th>Nama Barang</th><th>Action</th></tr>";

  // cetak semua barang
  for (let i = 0; i < dataBarang.length; i++) {
    var btnEdit = "<a href='#' onclick='editBarang(" + i + ")'>Edit</a>";
    var btnHapus = "<a href='#' onclick='deleteBarang(" + i + ")'>Hapus</a>";

    // listBarang.innerHTML +=
    //   "<li>" + dataBarang[i] + " [" + btnEdit + " | " + btnHapus + "] </li>";
    listBarang.innerHTML += "<tr><td>" + dataBarang[i] + "</td><td>";
    " [" + "</td><td>" + btnEdit + " | " + btnHapus + "] " + "</tr>";
  }
}

function addBarang() {
  var input = document.querySelector("input[name=barang]");
  dataBarang.push(input.value);
  showBarang();
}

function editBarang(id) {
  var newBarang = prompt("Nama baru", dataBarang[id]);
  dataBarang[id] = newBarang;
  showBarang();
}

function deleteBarang(id) {
  dataBarang.splice(id, 1);
  showBarang();
}

showBarang();
