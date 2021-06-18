@extends('templates.template')
@section('content')

<section>
    <div class="form">
        <h2> Editar contato - {{$contatos->Nome}} </h2>

        <form action="{{url('alterar-contato/'.$contatos->idContato)}}" id="form" method="post">
            {{@csrf_field()}} <!-- Recupera e guarda o ID na memória pra modificar-->
            <div>
                <input type="text" placeholder="Nome" name="txNome" id="txNome" value="{{$contatos->Nome}}" required />
            </div>

            <div>
                <input type="email" placeholder="E-mail" name="txEmail" id="txEmail" value="{{$contatos->email}}" required />
            </div>

            <div>
                <input type="text" placeholder="Assunto" name="txAssunto" id="txAssunto" value="{{$contatos->assunto}}" required />
            </div>

            <div>
                <textarea placeholder="Mensagem" cols="30" rows="10" name="txMensagem" id="txMensagem" required>{{$contatos->mensagem}}</textarea>
            </div>

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>

    </div>
</section>

@endsection
