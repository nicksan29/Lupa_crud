@include("parts.header")

<a href="{{route('cadastro.index')}}">Voltar</a>
<form action="{{ route('cadastro.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="age" placeholder="Age">
    <input type="text" name="cpf" placeholder="Cpf">
    <input type="number" name="telefone" placeholder="Telefon
    ">

    <button type="submit">Enviar</button>
</form>
@include("parts.footer")