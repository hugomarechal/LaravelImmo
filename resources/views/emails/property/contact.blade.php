<x-mail::message>
# Demande de contact

Nouvelle demande pour ce bien : <a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}">{{$property->title}}</a>

Info client :
- Prénom : {{$data['firstname']}}
- Nom : {{$data['lastname']}}
- Tel : {{$data['tel']}}
- Email : {{$data['email']}}
- Message : {{$data['message']}}

</x-mail::message>
