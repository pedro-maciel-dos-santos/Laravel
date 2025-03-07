@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="idimage" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="idtitle" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="iddate" name="date">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="idcity" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="idprivate" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="iddescription" class="form-control" placeholder="O que acontecerá no evento?"></textarea>
            <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="iditems" value="Cadeiras"> Cadeiras
            </div>   
                <div><input type="checkbox" name="items[]" id="iditems" value="Palco"> Palco
            </div>
            <div>
                <input type="checkbox" name="items[]" id="iditems" value="Cerveja grátis"> Cerveja grátis</div>
                
            <div>
                <input type="checkbox" name="items[]" id="iditems" value="Open food"> Open food
            </div>
                
            <div>
                <input type="checkbox" name="items[]" id="iditems" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection