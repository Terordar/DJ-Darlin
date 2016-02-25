<h1>Demande de devis</h1>
<hr>

<ul>
    <li><strong>Prénom et nom : </strong>{{$data->prenom}} {{$data->nom}}</li>
    <li><strong>Email : </strong>{{$data->email}}</li>
    <li><strong>Téléphone : </strong>{{$data->tel}}</li>
    <li><strong>GSM : </strong>{{$data->gsm}}</li>
    <li><strong>Statut : </strong>{{$data->statut}}</li>
    @if($data->statut == 'independant')</li>
    <li><strong>Numéro de TVA : </strong>{{$data->tva}}</li>
    <li><strong>Dénomination : </strong>{{$data->denomination}}</li>
    @endif
    <li><strong>Adresse : </strong>{{$data->adresse}}</li>
    <li><strong>Ville : </strong>{{$data->ville}}</li>
    <li><strong>Numéro : </strong>{{$data->numero}}</li>
    <li><strong>Code postal : </strong>{{$data->code_postal}}</li>
    <li><strong>Date souhaitée (AAAA-MM-JJ) : </strong>{{$data->date}}</li>
    <li><strong>Heure de début : </strong>{{$data->debut}}</li>
    <li><strong>Heure de fin : </strong>{{$data->fin}}</li>
    <li><strong>Invités : </strong>{{$data->invite}}</li>
    <li><strong>Budget : </strong>{{$data->budget}}</li>
    <li><strong>Déscription : </strong>{{$data->message}}</li>
</ul>