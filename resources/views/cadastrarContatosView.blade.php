@extends('templates.template')
@section('content')

<section>
    <div class="form">
        <h2> Cadastrar contato </h2>

        <form action="{{url('/cadastrar-contato/inserir')}}" id="form" method="post">
            @csrf
            <div>
                <input type="text" placeholder="Nome" name="txNome" id="txNome" required />
            </div>

            <div>
                <input type="email" placeholder="E-mail" name="txEmail" id="txEmail" required />
            </div>

            <div>
                <input type="text" placeholder="Assunto" name="txAssunto" id="txAssunto" required />
            </div>

            <div>
                <textarea placeholder="Mensagem" cols="30" rows="10" name="txMensagem" id="txMensagem" required></textarea>
            </div>

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>

    </div>
</section>

@endsection
