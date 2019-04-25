<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
       .kanan{
           height: 150px;
           background-color: rgb(248, 145, 85);
           border: 1px solid black;
           text-align: center;
           padding: 50px;
           margin-top: 3px;
           }
       .kiri{
           height: 150px;
           background-color: rgb(255, 255, 255);
           border: 1px solid black;
           text-align: center;
           padding: 50px;
           margin-top: 3px;
       }
       .kiri_data{
           height: 500px;
           background-color: rgb(255, 255, 255);
           border: 1px solid black;
       }
       .kiri_add_data{
           height: 250;
           background-color: rgb(255, 255, 255);
           border: 1px solid black;
       }
       .kanan_edit_side{
           height: 500px;
           background-color: rgb(255, 255, 255);
           border: 1px solid black;
       }
       .LOGOUT{
           padding: 10px;
       }
       .border_edit{
           background-color: rgb(255, 255, 255);
           height: 460px;
           width: 880px;
           padding: 40px 90px;
           border: 1px solid black;
           padding-right: 10px;
           padding-left: 10px;
           margin-top: 15px;
           
       }
       .foto_edit_side{
           background-color: rgb(135, 184, 184);
           border: 1px solid black;
           height: 150px;
           padding: 10px;
       }
       .upload{
           background-color: rgb(255, 255, 255);
           border: 2px solid black;
           padding : 50px 50px;
           height:200px;
           width: 300px;
           margin-left: 100px
       }
       .input{
           background-color: antiquewhite;
           width:75%;
           margin-left: 10px;
       }
    </style>
  </head>
  <body>
    <div class="row">
        
        <div class="col-xl-4 kiri"><h5>ADMIN</h5>
        
        </div>
        
        <div class="col-xl-8 kanan"><h5>DASHBOARD</h5>

        </div>
        
        <div class="col-xl-4 kiri_data">
          <label style="margin-left : 3px; margin-top :80px; margin-left:15px " > <h5> DATA </h5> </label>
            <select class="input custom-select" nama="" id="di">
                <option value="none">Pilih:</option>
                    <Option value="IKAN">DATA IKAN</Option>
                    <option value="SEAFOOD">DATA SEAFOOD</option>
                </option>
            </select>
          <label style="margin-left : 3px; margin-top :120px; margin-left:15px " > <h5> ADD DATA </h5> </label>
            <select class="input custom-select" nama="" id="di">
                <option value="none">Pilih:</option>
                    <Option value="IKAN">IKAN</Option>
                    <option value="SEAFOOD" >SEAFOOD</option>
                </option>
            </select>
            <br>
            <br>
          <button type="button" class="btn btn-info" style="border :1px solid black; margin-bottom: 2px; margin-top: 2px; margin-left: 175px; margin-right: 2px" >LOGOUT</button>
        </div>
        
        <div class="col-xl-8 kanan_edit_side">ADD DATA
            <div class="form-group " class="form-control-inline">
                <form class="upload" action="aksi.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">

                </form>
                <br>
                <label for="nama">Nama SEAFOOD :</label>
                 <input type="text" id="nama" name="nama"> 
                 <br>
                 <br>
                  Daftar Harga
                 <br>
                 <label for="nama">Pasar Lampulo :</label>
                 <input type="text" id="nama" name="nama">
                 <br>
                 <label for="nama">Pasar peunayong :</label>
                 <input type="text" id="nama" name="nama">
                 <br>
                 <label for="nama">Pasar Rukoh :</label>
                 <input type="text" id="nama" name="nama">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>