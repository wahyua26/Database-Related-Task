@extends('template')

@section('container')
    <h1>Authors</h1>
   
    <hr/>
    @foreach($authors as $author)
        <article class="mb-5">
            <ul>
                <li>
                    <h3>
                        <a href="/authors/{{ $author->username }}">
                        {{ $author->name }}
                        </a>                    
                    </h3>
                </li>
            </ul>
        </article>
    @endforeach
@endsection
