function total_harga() {
  var data=['halo','asdad']
  var harga = document.getElementById('harga').value;
  var jumlah = document.getElementById('jumlah').value;
  var total = parseInt(harga) * parseInt(jumlah);
  document.getElementById('total').value = total;
  console.log(total);
}