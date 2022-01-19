@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title"> Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
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
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div> 
        
@endsection        
