@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image"> Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title"> Nome do Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="date"> Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title"> Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title"> Evento privado:</label>
            <select class="form-control" id="private" name="private" >
                <option value="0">Não</option>
                <option value="1">Sim</option>
        </div>
        <div class="form-group">
            <label for="title"> Descrição:</label>
            <textarea  class="form-control" id="description" name="description" placeholder="Descrição do Evento"></textarea>
        </div>
        <div class="form-group">
            <label for="title"> Adicione itens de Infraestrutura:</label>
            <div class="fomr-group">
                <input type="checkbox" name="items[]" id="items" value="Cadeiras">Cadeiras
            </div>
            <div class="fomr-group">
                <input type="checkbox" name="items[]" id="items" value="Palco">Palco
            </div>
            <div class="fomr-group">
                <input type="checkbox" name="items[]" id="items" value="Cerveja grátis">Cerveja grátis
            </div>
            <div class="fomr-group">
                <input type="checkbox" name="items[]" id="items" value="Open food">Open food
            </div>
            <div class="fomr-group">
                <input type="checkbox" name="items[]" id="items" value="Brindes">Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div> 
        
@endsection        
