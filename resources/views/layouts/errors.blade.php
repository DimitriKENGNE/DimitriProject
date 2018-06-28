@if (count($errors)) <!-- Cette section ne s'affiche que s'il y a des erreurs -->
<div class="form-group">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>     <!-- Ce sont des erreurs de validation -->
            @endforeach
        </ul>
    </div>
</div>
@endif