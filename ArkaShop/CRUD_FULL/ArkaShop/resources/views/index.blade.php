<!DOCTYPE html>
<html>
<head>
    <title>ArkaShop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/custom.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container">
   <a class="navbar-brand" href="#">
    <img src="./asset/logo.svg" height="61" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline col-11">
      <input class="form-point-nav mr-sm-2 col-12" type="search" placeholder="Search" aria-label="Search">
    </form>
      <ul class="navbar-nav">
      <li class="nav-item active">
        <button type="button" class="btn btn-ark shadow-sm text-white pl-4 pr-4" data-toggle="modal" data-target="#exampleModalCenter" id="add">ADD</button>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class="container justify-content-center pt-5">
<table class="table col-8 m-auto bg-white shadow" border="0">
  <thead class="tb-head shadow-sm text-white">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Cahier</th>
      <th scope="col">Product</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 0 ?>
    @foreach($data as $n)
    <?php $i++ ?>
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $n->cashier_name }}</td>
      <td>{{ $n->name }}</td>
      <td>{{ $n->category_name }}</td>
      <td>Rp. {{ $n->price }}</td>
      <td><a href="" class="mr-2"><img src="./asset/image/edit.svg" width="20px"></a><a href="/delete/{{ $n->id }}"><img src="./asset/image/bin.svg" width="20px"></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="roundedd modal-content">
      <div class="modal-header border-none">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b>ADD</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form method="post" action="/add">
            {{csrf_field()}}
        <div class="col-10 m-auto">
        <select class="form-point cashier" id="cashier" name="id_cashier">
            @foreach($cashier as $n)
                 <option value="{{ $n->id }}">{{ $n->name }}</option>
            @endforeach
        </select>
        <select class="form-point" id="exampleFormControlSelect1" name="id_category">
            @foreach($category as $n)
                 <option value="{{ $n->id }}">{{ $n->name }}</option>
            @endforeach
        </select>
          <div class="form-group row">
            <div class="col-sm-12">
              <input type="text" class="form-point"  placeholder="Barang" name="name">
              <input type="number" class="form-point"  placeholder="Harga" name="price">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-none">
        <button type="submit" class="btn btn-ark shadow pl-4 pr-4 text-white">ADD</button>
      </div>
            </form>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="roundedd modal-content">
      <div class="modal-header border-none">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true text-danger">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <div class="col-10 m-auto">
        <p><b>Data Joni ID <span class="text-ark">#1</span></b></p>
        <img src="./asset/image/success.svg" width="120" />
        <p class="mt-2"><b>Berhasil Dihapus!</b></p>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript" src="{{ asset('asset/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js')}}"></script>
</body>
</html>