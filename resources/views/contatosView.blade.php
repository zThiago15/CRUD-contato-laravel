@extends('templates.template')
@section('content')

<section class="contatos">
    <div>
        <h2> Contatos existentes </h2>
    </div>

    <table id="contacts">
        <tr>
            <th> Id </th>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Assunto </th>
            <th> Mensagem </th>
            <th> Rotina </th>
            <th> Rotina </th>
        </tr>

        @foreach($contatos as $c)
        <tr>
            <td> {{$c->idContato}} </td>

            <td> {{$c->Nome}} </td>

            <td> {{$c->email}} </td>

            <td> {{$c->assunto}} </td>

            <td> {{$c->mensagem}} </td>

            <td>
                <a href="/excluir-contato/{{$c->idContato}}">
                    Excluir
                </a>
            </td>

            <td>
                <a href="/editar-contato/{{$c->idContato}}">
                    Editar
                </a>
            </td>

        </tr>
        @endforeach
    </table>
</section>

@endsection
