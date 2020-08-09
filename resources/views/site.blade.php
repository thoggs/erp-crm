<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERP-CRM</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Style import -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

<!-- Tabela CRM -->
<div class="pt-3">
  <h1 id="titlePresentation" class="font-weight-bold name-color text-center pt-5">Tabela CRM</h1>
  <table class="table table-bordered border-primary">
    <thead>
    <tr>
      <th class="text-center text-white bg-secondary" scope="col">ID</th>
      <th class="text-center text-white bg-secondary" scope="col">Nome</th>
      <th class="text-center text-white bg-secondary" scope="col">E-Mail</th>
      <th class="text-center text-white bg-secondary" scope="col">Estado</th>
      <th class="text-center text-white bg-secondary" scope="col">Data/Hora</th>
      <th class="text-center text-white bg-secondary" scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $crm_contatos as $key => $data )
      <tr>
        <th class="text-center" scope="row">{{ $data->id }}</th>
        <td class="text-center">{{ $data->name }}</td>
        <td class="text-center">
          @if( filter_var('thiago', FILTER_VALIDATE_EMAIL) )
            {{ $data->mail }}
          @else
            Inválido!
          @endif
        </td>
        <td class="text-center">{{ $data->estado }}</td>
        <td class="text-center">{{ $data->data }}</td>
        <td class="text-center">
          @if($data->status)
            <span class="text-success">Ativo</span>
          @else
            <span class="text-danger">Desativado</span>
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<!-- Tabela ERP -->
<div class="pt-3 pb-5">
  <h1 id="titlePresentation" class="font-weight-bold name-color text-center pt-5">Tabela ERP</h1>
  <table class="table table-bordered border-primary">
    <thead>
    <tr>
      <th class="text-center text-white bg-secondary" scope="col">ID</th>
      <th class="text-center text-white bg-secondary" scope="col">Nome</th>
      <th class="text-center text-white bg-secondary" scope="col">E-Mail</th>
      <th class="text-center text-white bg-secondary" scope="col">Estado</th>
      <th class="text-center text-white bg-secondary" scope="col">Data/Hora</th>
      <th class="text-center text-white bg-secondary" scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($erp_contatos as $key => $data)
      <tr>
        <th class="text-center" scope="row">{{ $data->id }}</th>
        <td class="text-center">{{ $data->name }}</td>
        <td class="text-center">
          @if( filter_var($data->mail, FILTER_VALIDATE_EMAIL) )
            {{ $data->mail }}
          @else
            Inválido!
          @endif
        </td>
        <td class="text-center">{{ $data->estado }}</td>
        <td class="text-center">{{ $data->data }}</td>
        <td class="text-center">
          @if($data->status)
            <span class="text-success">Ativo</span>
          @else
            <span class="text-danger">Desativado</span>
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<!-- Scripts import -->
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
