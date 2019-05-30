
<!-- Begin Page Content -->
<div class="container title">
  <h2 class="judul mb-4" id="nama"><u>Add DATA </u></h2>

  <div class="div-form">
      <!--form 1-->
      <form class="" action="<?= base_url('addseafood/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-lg-2"></div>
        <label class="col-2 label"> Nama Seafood</label>
        <div class="col-6">
          <input type="text" name="namaSeafood" class="form-control" placeholder="Nama Seafood">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-lg-10 offset-2">
          <button class="btn btn-success" id="addPasar">tambah</button>
          <button class="btn btn-danger" id="removePasar">hapus</button>
        </div>
      </div>
      <div id="fieldPasar"></div>

      <!--form 6-->
      <div class="form-group row">
        <div class="col-lg-2"></div>
        <label class="col-2 label" id="img">Input Image</label>
        <div class="col-6">
          <div class="input-group mb-3">
            <div class="input-group mb-3">
              <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--button-->
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
          <button class="btn btn-primary" type="submit" id="save">save</button>

        </div>
      </div>
    </form>
  </div>
</div>
<!-- End of Page Content -->


<script>
const generateFill = function () {
  let divPasar = document.createElement('div')
  divPasar.setAttribute('class','form-group row')
  let labelPasar = document.createElement('label')
  labelPasar.setAttribute('class','col-lg-2 offset-lg-2')
  labelPasar.innerHTML = namaPasar
  let divNama = document.createElement('div')
  divNama.setAttribute('class','col-lg-3')
  let inputNama = document.createElement('input')
  inputNama.setAttribute('class','form-control')
  inputNama.setAttribute('placeholder',`masukkan nama pasar` )
  inputNama.setAttribute('name',`namaPasar[]`)
  let divInput = document.createElement('div')
  divInput.setAttribute('class','col-lg-3')
  let inputHarga = document.createElement('input')
  inputHarga.setAttribute('class','form-control')
  inputHarga.setAttribute('placeholder',`masukkan harga` )
  inputHarga.setAttribute('name',`hargaSeafood[]`)
  divNama.appendChild(inputNama)
  divPasar.appendChild(labelPasar)
  divInput.appendChild(inputHarga)
  divPasar.appendChild(divInput)
  divPasar.appendChild(divNama)
  return divPasar
}
let jumlahPasar = 0;
let namaPasar = [];
let inputNamaPasar = document.querySelector('#namaPasar');
const fieldPasar = document.querySelector('#fieldPasar')
console.log(inputNamaPasar)
let addPasar = document.querySelector('#addPasar').addEventListener('click',function(){
  event.preventDefault()
  jumlahPasar++
  // console.log(jumlahPasar)
  // namaPasar.push(inputNamaPasar.value)
  fieldPasar.innerHTML = ''
  for (var i = 0; i < jumlahPasar; i++) {
    fieldPasar.appendChild(generateFill())

  }
nputNamaPasar.value = ''

})

let removePasar = document.querySelector('#removePasar').addEventListener('click',function(){

  event.preventDefault()
  jumlahPasar--
  // console.log(jumlahPasar)
  // namaPasar.push(inputNamaPasar.value)
  fieldPasar.innerHTML = ''
  for (var i = 0; i < jumlahPasar; i++) {
    fieldPasar.appendChild(generateFill())

  }

})
</script>
