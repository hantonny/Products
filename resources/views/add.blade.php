@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
<div class="container">

<form method="POST" class="form">
{{csrf_field()}}
            <h1 class="font-weight-bold text-success text-center">Adicionar Produto</h1>
            <div class="row justify-content-center">
 			<div class="form-group mb-2 mx-sm-3 col-sm-8">
 				<label class="font-weight-bold">Nome do Produto</label>
 				<input class="form-control col-12" type="text" id="name" name="name" required="">
 			</div>
             <div class="form-group mb-2 mx-sm-3 col-sm-8">
 				<label class="font-weight-bold">Preço</label>
 				<input class="form-control col-12" type="number" pattern="[0-9.,]{1,}" id="price" name="price" required="" step="0.01" min="0.01">
 			</div>
 			<div class="form-group mb-2 mx-sm-3 col-sm-8">
 				<label class="font-weight-bold">Quantidade</label>
 				<input class="form-control col-12" type="text" name="quantity" id="quantity" required="">
 			</div>
             </div>
            </div>
            <div class="col-sm-12 text-center">
             <a href="{{route('index')}}" class="btn btn-secondary mt-2 text-uppercase font-weight-bold">Voltar</a>
            <button type="submit" class="btn btn-primary font-weight-bold mt-2 text-uppercase">Adicionar Produto</button>
            </div>
</form>
</div>
@endsection

