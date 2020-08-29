    <h1>Les utilisateurs</h1>

    <ul>
        @foreach($utilisateurs as $utilisateurs)
            <li>{{ $utilisateurs->email }}</li>
        @endforeach
    </ul>
