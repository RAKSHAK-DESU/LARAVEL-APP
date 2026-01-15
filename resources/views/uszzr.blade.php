<div>
    <h1>Yo?</h1>
    {{ print_r($data) }}

    <ul>
        <li>
            <span>Name:</span> <span><b>{{ $data->name }}</b></span>
        </li>
        <li>
            <span>UserName:</span> <span><b>{{ $data->username }}</b></span>
        </li>
        <li>
            <span>Email:</span> <span><b>{{ $data->email }}</b></span>
        </li>
        <li>
            <span>Phone:</span> <span><b>{{ $data->phone}}</b></span>
        </li>
        <li>
            <span>Website:</span> <span><b>{{ $data->website }}</b></span>
        </li>
    </ul>
</div>