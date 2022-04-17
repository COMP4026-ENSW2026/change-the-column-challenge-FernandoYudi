<h1>{{ $pet->name }}</h1>

<ul>
    <li>{{ $pet->color }}</li>
    <li>{{ $pet->specie }}</li>
    <li>{{ $pet->size }}</li>
    <a href="/pets/edit" >Editar</a>
</ul>

<a href="/pets" >Voltar</a>
