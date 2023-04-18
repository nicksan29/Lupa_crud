@include("parts.header")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{route("cadastro.index")}}">Voltar</a>
<form action="{{route("cadastro.update")}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input value="{{$registro->id}}" type="hidden" name="id">
    <input value="{{$registro->name}}" type="text" name="name" placeholder="nome">
    <input value="{{$registro->email}}" type="text" name="email" placeholder="email">
    <input value="{{$registro->age}}" type="text" name="age" placeholder="Idade">
    <input value="{{$registro->cpf}}" type="text" name="cpf" placeholder="Cpf">
    <input value="{{$registro->telefone}}" type="number" name="telefone" placeholder="Telefone">

    <Button type="submit">enviar</Button>
</form>
@include("parts.footer")