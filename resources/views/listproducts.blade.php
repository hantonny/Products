@extends('layouts.app')

@section('content')
<?php
$totalPriceProducts = 0;
?>
<div class="container-fluid">
<div class="row justify-content-center mb-2">
    <a
        href="{{'add'}}"
        class="btn btn-primary col-sm-2 mt-2 mr-1 font-weight-bold text-uppercase"
    >
        Adicionar Produto
    </a>
</div>
<div class="row justify-content-center">
        <div class="col-md-9 mt-3">
            <div class="card">
                <div class="card-body">


@if(count($allproducts)>0)
<div class="table-responsive col-12">
 <h1 class="font-weight-bold text-success text-center">Lista de Produtos</h1>
<table class="table text-center">
  <thead class="thead">
    <tr>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Preço Unitário</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço total</th>
      <th colspan="2">Ações</th>
    </tr>
  </thead>
  @else
  <h4 class="text-center">Não tem produtos.</h4>
  @endif
  <tbody>
  @foreach($allproducts as $product)
    <tr>
        <td>{{ $product->name}}</td>
        <td>R$ {{ number_format($product->price, 2) }}</td>
               <?php
      $totalPriceProducts = $totalPriceProducts + ($product->price * $product->quantity);
      ?>
        <td>{{ $product->quantity}}</td>
        <td>R$ {{number_format(($product->price * $product->quantity),2)}}</td>
        <td><a href="edit/{{$product->id}}" class="btn btn-primary text-uppercase font-weight-bold">Editar</a></td>
        <td><a href="delete/{{$product->id}}" class="btn btn-danger text-uppercase font-weight-bold" onclick="return confirm('Tem certeza que deseja excluir?')">Remover</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<h3 class="text-center mt-2">Valor Total do Produtos: <span  class="text-success"><?php echo 'R$ ' . number_format($totalPriceProducts, 2, ',', '.'); ?></span>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
