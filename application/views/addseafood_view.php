
        <!-- Begin Page Content -->
        <div class="container title">
            <h2 class="judul mb-4" id="nama"><u>Add DATA </u></h2>

            <div class="div-form">
                <form>
                    <!--form 1-->
                    <div class="form-group row">
                        <div class="col-lg-2"></div>
                        <label class="col-2 label"> Nama Seafood</label>
                        <div class="col-6">
                            <input type="text" name="Nama Ikan" class="form-control" placeholder="Nama Seafood">
                        </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-lg-2 offset-2">
                        <label for="">Nama pasar</label>
                      </div>
                      <div class="col-lg-6">
                        <input type="text" placeholder="masukkan nama pasar" id="namaPasar" class="form-control">
                      </div>
                      <button class="btn btn-success" id="addPasar">tambah</button>
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
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
    const generateFill = function (namaPasar) {
      let divPasar = document.createElement('div')
      divPasar.setAttribute('class','form-group row')
      let labelPasar = document.createElement('label')
      labelPasar.setAttribute('class','col-lg-2 offset-lg-2')
      labelPasar.innerHTML = namaPasar
      let divInput = document.createElement('div')
      divInput.setAttribute('class','col-lg-6')
      let inputHarga = document.createElement('input')
      inputHarga.setAttribute('class','form-control')
      inputHarga.setAttribute('placeholder',`masukkan harga pada pasar ${namaPasar}`)
      divPasar.appendChild(labelPasar)
      divInput.appendChild(inputHarga)
      divPasar.appendChild(divInput)

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
      namaPasar.push(inputNamaPasar.value)
      fieldPasar.innerHTML = ''
      namaPasar.forEach(function(item){
        console.log(item)

        fieldPasar.appendChild(generateFill(item))
      })

    })
  </script>
