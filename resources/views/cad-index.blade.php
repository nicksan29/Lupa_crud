@include("parts.header")
<section class="container-fluid" id="Cont1">

        <div class="container">
            <div class="row">
                <a href="{{route("cadastro.create")}}">criar</a>
                            {{-- <tr> --}}
                                {{-- <th>Nome</th> --}}
                                {{--<th>Cpf</th> --}}
                                {{--<th>Editar</th>
                                <th>Deletar</th>
                                 --}}
                            {{-- </tr> --}}
                            @foreach($registros as $s)
                                <div class="col-4 mx-auto">
                                    <div class="card">
                                        <h2>{{ $s->name }}</h2>
                                        {{-- <td>{{$s->cpf}}</td> --}}
                                        <td><a href="{{route("cadastro.edit" , $s->id)}}">Editar</a></td>
                                        <td><form action="{{route("cadastro.delete", $s->id)}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="submit">Deletar</button>
                                        </form></td>
                                </div>
                                </div>
                            @endforeach
            </div>
        </div>
</section>
@include("parts.footer")