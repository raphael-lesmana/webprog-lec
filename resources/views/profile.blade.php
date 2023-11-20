<h1>User profile</h1>
<h2>{{ $user->name }}</h2>
<img src="/storage/assets/profiles/{{ $user->picture }}" width="200px">
<ul>
    <li>Phone number: {{ $user->phone_number }}</li>
    <li>Address: {{ $user->address }}</li>
</ul>

<a href="/settings"><button>Edit</button></a>