<!-- Begin Page Content -->
<div class="container-fluid">
  <h3 class="judul"> <u> Daftar Seafood</u> </h3>
  <div class="grid-container">

    <?php

    for ($i = 0; $i < count($total); $i++) {
      ?>
      <div class="grid-item">
        <div class="card" style="width: 80%;">
          <center>
            <h4 style="color:black"><b><u><?= $total[$i]->nama_seafood ?></u></b></h4>
          </center>
          <img class="card-img-top" src="<?= base_url('img/') . $total[$i]->gambar_seafood ?>" width="280" height="200" alt="Card image cap">
          <div class="card-body">
            <div class="card-text">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $i ?>">
                More Detail
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1<?= $i ?>">
                Tambah Pasar
              </button>
              <div class="modal fade" id="exampleModal1<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Pasar</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="" action="<?= base_url('addseafood/tambah_pasar') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row d-none">
                          <div class="col-lg-2"></div>
                          <label class="col-2 label"> Nama seafood</label>
                          <div class="col-6">
                            <input type="hidden" value="<?= $total[$i]->nama_seafood ?>" name="namaseafood" class="form-control" placeholder="Nama seafood">
                          </div>
                        </div>
                        <input type="hidden" name="gambar_seafood" value="<?= $total[$i]->gambar_seafood  ?>">
                        <div class="form-group row">
                          <div class="col-lg-10 offset-2">
                            <button class="btn btn-success" id="addPasar">tambah</button>
                            <button class="btn btn-danger" id="removePasar">hapus</button>
                          </div>
                        </div>
                        <div id="fieldPasar"></div>

                        <!--button-->
                        <div class="row">
                          <div class="col-lg-2"></div>
                          <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit" id="save">save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="exampleModal<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="card-title" style="color:red"><b><u>Info Data : </u></b></h5>
                      <!-- <?= $this->session->flashdata('message'); ?> -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?php
                      foreach ($seafood as $item) {
                        if ($item->nama_seafood == $total[$i]->nama_seafood) {
                          // code...
                          ?>
                          <form id="modal" action="<?= base_url('dftrseafood/editHarga/') . $item->id_seafood ?>" method="post">
                            <div class="row justify-content-end-mr-5">
                              <div class="col-md-2" style="color:black"><?= $item->nama_pasar ?></div>
                              <div class="col-lg-6" class="form-group row">
                                <input type="text" name="harga" class="form-control " value="<?= $item->harga ?>">
                              </div>
                              <!-- </div> <br> -->
                              <div class="col-lg-mb-2">
                                <button class="btn btn-info" id="tombolEdit" type="submit" name="button"><i class="fas fa-edit"></i></button>
                              </div>
                              <div class="col-md-12">
                                <span>Last update data : <?= $item->last_update ?></span>
                              </div>
                            </div>
                          </form>

                        <?php
                      }
                    }
                    ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <a class="btn btn-danger text-light" href="<?= base_url('dftrseafood/hapus/') . $total[$i]->gambar_seafood ?>">Hapus</a>
        </div>

      </div>
    <?php
  }
  // }
  ?>
  </div>
</div>

<script type="text/javascript">
  const generateFill = function() {
    let divPasar = document.createElement('div')
    divPasar.setAttribute('class', 'form-group row')
    let divNama = document.createElement('div')
    divNama.setAttribute('class', 'col-lg-5')
    let inputNama = document.createElement('input')
    inputNama.setAttribute('class', 'form-control')
    inputNama.setAttribute('placeholder', `nama pasar`)
    inputNama.setAttribute('name', `namaPasar[]`)
    let divInput = document.createElement('div')
    divInput.setAttribute('class', 'col-lg-5')
    let inputHarga = document.createElement('input')
    inputHarga.setAttribute('class', 'form-control')
    inputHarga.setAttribute('placeholder', `harga`)
    inputHarga.setAttribute('name', `hargaseafood[]`)
    divNama.appendChild(inputNama)
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
  let addPasar = document.querySelector('#addPasar').addEventListener('click', function() {
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

  let removePasar = document.querySelector('#removePasar').addEventListener('click', function() {

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