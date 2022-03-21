@extends('template')

@section('container')
    <h1>Categories</h1>
   
    <hr/>
    @foreach($categories as $category)
        <article class="mb-5">
            <ul>
                <li>
                    <h3>
                        <a href="/categories/{{ $category->slug }}">
                        {{ $category->name }}
                        </a>                    
                    </h3>
                </li>
            </ul>
        </article>
    @endforeach
@endsection
