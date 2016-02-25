@extends('Frontend.app')

@section('title', 'Nous contacter')

@section('content')

    <section id="contact-info">
        @include('errors.send')
        <div class="center">
            <h2>Comment nous contacter ?</h2>
            <p class="lead">Un commentaire, des critiques ou des suggestions, nous sommes là pour vous répondre.</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2530.21198375932!2d5.5404538!3d50.6417541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa31dd93511f%3A0x5059e1eae927ac7c!2sRue+de+Montegn%C3%A9e+54%2C+4000+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1412355620148"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5 style="font-size: 175%;">Sononorisation DJ DARLIN’ Music &amp; Lights</h5>
                                    <p style="font-size: 175%;">Rue de Montegnée, 54<br>
                                        B-4000 LIÈGE<br></p>
                                    <p style="font-size: 175%;"><i class="fa fa-phone"> </i> Tel: +32 (0)4 341 48 27<br>
                                        <i class="glyphicon glyphicon-phone"></i> GSM: +32 (0)496 53 76 85<br>
                                        <i class="fa fa-print"></i> Fax :+32 (0)4 341 48 28 <br>
                                        <i class="fa fa-envelope"></i> E-mail: <a href="#ancre_formulaire">Contacter la direction</a><br>

                                    <p style="font-size: 175%;">TVA : BE 0896.755.397 (Activité : 11729)</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 id="ancre_formulaire">Envoyez-nous un message</h2>
                <p class="lead">Une question ? Contactez-nous. Nous vous répondrons dès que possible.</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                {!! Form::open(['url' => 'contactez-nous']) !!}
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        {!! Form::label('nom', 'Nom *') !!}
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail *') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre adresse mail']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Téléphone') !!}
                        {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('denomination', 'Dénomination') !!}<br>
                    {!! Form::select('denomination', [
                        'comite' => 'Comité de fête',
                        'entreprise' => 'Entreprise',
                        'independant' => 'Indépendant',
                        'societe' => 'Société',
                        'autre' => 'Autre'
                    ]) !!}
                    </div>
                    {!! Recaptcha::render([ 'lang' => 'fr' ])  !!}
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        {!! Form::label('prenom', 'Prénom *') !!}
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sujet', 'Sujet *') !!}
                        {!! Form::text('sujet', null, ['class' => 'form-control', 'placeholder' => 'Sujet du message']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('message', 'Message *') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Contenu de votre message ...', 'rows' => '8']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary btn-lg']) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


@endsection