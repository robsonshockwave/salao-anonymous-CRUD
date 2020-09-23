@include('admin.includes.alerts')

@csrf

<div class="form-group">
    <label>* Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome: " value="{{ $product->name ?? old('name') }}"> <!--esse old('') vai fazer voltar com os campos preenchidos caso rejeitado-->
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name="price" class="form-control" placeholder="Preço: " value="{{ $product->price ?? old('price') }}">
</div>
<div class="form-group">
    <label>Fornecedor:</label>
    <input type="text" name="profile" class="form-control" placeholder="Fornecedor: " value="{{ $product->profile ?? old('profile') }}">
</div>
<div class="form-group">
    <label>Marca:</label>
    <input type="text" name="brand" class="form-control" placeholder="Marca: " value="{{ $product->brand ?? old('brand') }}">
</div>
<div class="form-group">
    <label>Ano de Vencimento:</label>
    <input type="text" name="validity" class="form-control" placeholder="Ano de Vencimento: " value="{{ $product->validity ?? old('validity') }}">
</div>
<div class="form-group">
    <label>Observação:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição: " value="{{ $product->description ?? old('description') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>