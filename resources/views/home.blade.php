@extends('layouts.app')

@section('content')
<style>
  .font-weight-bold{
    font-weight: bold;
  }
  .cliquable{
    cursor: pointer;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-auto">
            <a href="" class="btn btn-primary">+Creer une tache</a>
          </div>
          <div class="col-auto">
            <a href="{{route('index')}}"  class="btn btn-secondary">Toutes les Taches</a>
          </div>
          <div class="col-auto">
            <a href=""  class="btn btn-warning">En cours</a>
          </div>
          <div class="col-auto">
            <a href="" class="btn btn-dark">Terminées</a>
          </div>
        </div>
      </div>
      @isset($todos)
        @foreach ($todos as $todo)
        <div class="alert alert-{{ $todo->is_do ? 'dark' : 'warning' }} m-4 cliquable" data-url="{{ route('todos.show', $todo)}}">
          <h5 class="font-weight-bold">{{$todo->title}}</h5>
          <p>{{Str::limit($todo->description, 30)}}</p>
          <p>Crée le: {{$todo->created_at->diffForHumans()}}</p>
        </div>
        @endforeach
      @else
        <p class="m-4 text-center">
          Aucune tache crée pour le moment.....<br>
          Veillez en creer une.
        </p>
      @endisset
      
      
   
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Détecter le clic sur une ligne du tableau
            $('.cliquable').click(function() {
                // Récupérer l'URL à partir de l'attribut data-url de la ligne cliquée
                var url = $(this).data('url');
                // Rediriger l'utilisateur vers l'URL
                if (url) {
                  window.location.href = url;
                }
            });
        });
    </script>
@endsection
