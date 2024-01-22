<h1>About us</h1>
<p>Some content</p>

<h2>My contacts</h2>
<ul>
@foreach($users as $user)
    <li>{{$user->name}} : {{$user->email}}</li>
@endforeach


</ul>