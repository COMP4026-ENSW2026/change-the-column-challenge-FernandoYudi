<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
  <div class="row">
  <h1 class="title">Adicionar novo pet:</h1>
    <form action="/pets" method="post">
    {{csrf_field ()}}
    <label for="name">Nome</label>
    <input class="form-control" id="name" name="name" type="text" /> <br/>
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    <label for="color">Cor</label>
    <input class="form-control" id="color" name="color" type="text" /> <br/>

    <label for="size">Especie</label>
    <select class="form-select" name="size" id="size">
    <option selected>Open this select menu</option>
        <option value="AVES">AVES</option>
        <option value="GATO">GATO</option>
        <option value="CACHORRO">CACHORRO</option>
        <option value="ZEBRA">ZEBRA</option>
        <option value="DRAGÃO DE KOMODO">DRAGÃO DE KOMODO</option>
        <option value="CAVALO">CAVALO</option>
        <option value="CAMELO">CAMELO</option>
        <option value="CAMALEÃO">CAMALEÃO</option>
        <option value="COBRA">COBRA</option>
        <option value="POKEMON">POKEMON</option>
    </select>

    <label for="size">Size</label>
    <select class="form-select" name="size" id="size">
    <option selected>Open this select menu</option>
        <option value="xs">XS</option>
        <option value="sm">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
    </select>

    <br/>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-success" type="submit">
        Cadastrar
    </button>
    </div>
    </form>
  </div>
</div>

<a class="" href="/pets">Voltar</a>
