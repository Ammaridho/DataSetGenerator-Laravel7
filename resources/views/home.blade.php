<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 400px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>

    <title>DATASET GENERATOR</title>
  </head>
  <body>
    
    <div class="container pb-5">

        <div class="row text-center mt-5">
            <div class="col">
                <h1>DATASET GENERATOR</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{route('generator')}}"><button>Generate 10 data</button></a>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <h3>internet_keluarga</h3>
            </div>
            <div class="col-6">
                <h3>{{$jumlahData}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0" style="height:180px">
                    <thead class="thead-dark sticky-top">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">namaKeluarga</th>
                        <th scope="col">noTelp</th>
                        <th scope="col">provider</th>
                        <th scope="col">bandwidth</th>
                        <th scope="col">biayaBulanan</th>
                        <th scope="col">jumlahPenghuni</th>
                        <th scope="col">jumlahGadget</th>
                        <th scope="col">kesimpulan</th>
                        <th scope="col">create_at</th>
                        <th scope="col">updated_at</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        @foreach ($internet_keluarga as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item['namaKeluarga']}}</td>
                                <td>{{$item['noTelp']}}</td>
                                <td>{{$item['provider']}}</td>
                                <td>{{$item['bandwidth']}}</td>
                                <td>{{$item['biayaBulanan']}}</td>
                                <td>{{$item['jumlahPenghuni']}}</td>
                                <td>{{$item['jumlahGadget']}}</td>
                                <td>{{$item['kesimpulan']}}</td>
                                <td>{{$item['created_at']}}</td>
                                <td>{{$item['updated_at']}}</td>
                                <?php $i++;?>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                  
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>data_penghuni</h3>
            </div>
        </div>
        <div class="row">
            <div class="col table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0" style="height:180px">
                    <thead class="thead-dark sticky-top">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">internet_keluarga_id</th>
                        <th scope="col">nama</th>
                        <th scope="col">banyakGadget</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        @foreach ($data_penghuni as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item['internet_keluarga_id']}}</td>
                                <td>{{$item['nama']}}</td>
                                <td>{{$item['banyakGadget']}}</td>
                                <?php $i++;?>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>detail_gadget</h3>
            </div>
        </div>
        <div class="row">
            <div class="col table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0" style="height:180px">
                    <thead class="thead-dark sticky-top">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">data_penghuni_id</th>
                        <th scope="col">namaGadget</th>
                        <th scope="col">range</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        @foreach ($detail_gadget as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item['data_penghuni_id']}}</td>
                                <td>{{$item['namaGadget']}}</td>
                                <td>{{$item['range']}}</td>
                                <?php $i++;?>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>