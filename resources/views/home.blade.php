
@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing
 elit. Esse tempore possimus culpa labore, explicabo distinctio eligendi sapiente,
 pariatur consequatur ab officia deserunt quam iure voluptatem, facilis eveniet saepe dolores reiciendis?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nostrum commodi a libero dignissimos dicta odio eaque eveniet debitis culpa exercitationem unde expedita tenetur beatae, repellat quibusdam blanditiis maiores repellendus!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection