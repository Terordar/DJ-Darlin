<h1>Message d'un de vos clients</h1>
<hr>

<ul>
    <li><strong>Prénom et nom : </strong>{{$data->prenom}} {{$data->nom}}</li>
    <li><strong>Email : </strong>{{$data->email}}</li>
    <li><strong>Téléphone : </strong>{{$data->tel}}</li>
    <li><strong>Dénomination : </strong>{{$data->denomination}}</li>

    <br>

    <strong>Sujet : </strong>{{$data->sujet}}<br>
    <strong>Message : </strong>{{$data->message}}
</ul>