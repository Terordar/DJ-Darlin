@extends('Frontend.app')

@section('title', 'Devis')

@section('content')
    <section id="contact-page" style="padding-top: 60px;">
        <div class="container">
                @include('errors.send')
            <div class="center">
                <h2>Demander un devis</h2>
                <p class="lead">Les devis seront faits sur mesure sur base des renseignements fournis.</p>
            </div>

            <div class="row contact-wrap">
                {!! Form::open(['url' => 'devis']) !!}
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        {!! Form::label('nom', 'Nom *') !!}
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                    </div>
                    <div class="form-group" style = "padding-bottom: 8px;">
                        {!! Form::label('statut', 'Statut *') !!}
                        <br>
                        {!! Form::radio('statut', 'independant', false, ['style' => 'margin-left: 60px;', 'onClick' => 'affich()']) !!}
                        {!! Form::label('independant', 'Indépendant/société') !!}
                        {!! Form::radio('statut', 'particulier', false, ['style' => 'margin-left: 60px;', 'onClick' => 'masque()']) !!}
                        {!! Form::label('independant', 'Particulier') !!}
                    </div>
                    <div class="form-group" id="optionnel" style="display: none;">
                        {!! Form::label('tva', 'Numéro de TVA') !!}
                        {!! Form::text('tva', null, ['class' => 'form-control', 'placeholder' => 'Votre numéro de TVA']) !!}
                        {!! Form::label('denomination', 'Dénomination') !!}<br>
                        {!! Form::select('denomination', [
                            'comite' => 'Comité de fête',
                            'entreprise' => 'Entreprise',
                            'independant' => 'Indépendant',
                            'societe' => 'Société',
                            'autre' => 'Autre'
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail *') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre adresse mail']) !!}
                    </div>

                    <h2>Lieu de l'animation :</h2>

                    <div class="form-group">
                        {!! Form::label('adresse', 'Adresse *') !!}
                        {!! Form::text('adresse', null, ['class' => 'form-control', 'placeholder' => 'Votre adresse']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('numero', 'Numéro *') !!}
                        {!! Form::text('numero', null, ['class' => 'form-control', 'style' => 'width: 70px; display: inline;']) !!}
                        {!! Form::label('code_postal', 'Code postal *', ['style' => 'margin-left: 80px;']) !!}
                        {!! Form::text('code_postal', null, ['class' => 'form-control', 'style' => 'width: 80px; display: inline;']) !!}
                    </div>
                        <div class="form-group">
                            {!! Form::label('ville', 'Ville *') !!}
                            {!! Form::text('ville', null, ['class' => 'form-control', 'placeholder' => 'Votre ville']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('date', 'Date souhaitée *') !!}
                            {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(null, 'Heure') !!}<br>
                            {!! Form::label('debut', 'Debut *') !!}
                            {!! Form::selectRange('debut', 00, 23, ['style' => 'width: 50px; display: inline;']) !!}
                            h

                            {!! Form::label('fin', 'Fin *', ['style' => 'margin-left: 80px;']) !!}
                            {!! Form::selectRange('fin', 00, 23, ['style' => 'width: 50px; display: inline;']) !!}
                            h
                        </div>
                        <div class="form-group">
                            {!! Form::label('invite', 'Nombres d\'invités') !!}
                            {!! Form::number('invite', null, ['class' => 'form-control', 'style' => 'width: 80px; display: inline;']) !!}
                            {!! Form::label('budget', 'Budget', ['style' => 'margin-left: 80px;']) !!}
                            {!! Form::number('budget', null, ['class' => 'form-control', 'style' => 'width: 80px; display: inline;']) !!}
                        </div>
                        {!! Recaptcha::render([ 'lang' => 'fr' ])  !!}
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        {!! Form::label('prenom', 'Prénom *') !!}
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Téléphone') !!}
                        {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('gsm', 'GSM') !!}
                        {!! Form::text('gsm', null, ['class' => 'form-control', 'placeholder' => 'Votre GSM']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('message', 'Décrivez votre projet') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Une petite description de votre projet ...', 'rows' => '19']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary btn-lg']) !!}
                    </div>
                </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

    <SCRIPT language="javascript">
        function affich() {
            var targetElement;
            targetElement = document.getElementById('optionnel') ;

            targetElement.style.display = "" ;
        }

        function masque() {
            var targetElement;
            targetElement = document.getElementById('optionnel') ;

            targetElement.style.display = "none" ;
        }
    </SCRIPT>
    <script src='https://www.google.com/recaptcha/api.js'></script>

@endsection