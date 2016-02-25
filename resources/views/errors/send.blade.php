@if ( $errors->count() > 0 )
    <div class="row">
        <div class="alert alert-danger">
            <h4>Erreurs lors de l'envoie de votre message</h4>

            <ul>
                @foreach( $errors->all() as $message )
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@elseif(session('status'))
    <div class="row">
        <div class="alert alert-success">
            {!! session('status') !!}
        </div>
    </div>
@endif