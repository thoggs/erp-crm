<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ERP-CRM</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="pt-lg-5">
  <table class="table table-bordered border-primary">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Estado</th>
      <th scope="col">Data/Hora</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($crm_contatos as $key => $data)
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
        <td>
          @if($data->mail == '*.com')
            {{ $data->mail }}
          @else
            Invalido!
          @endif
        </td>
        <td>{{ $data->estado }}</td>
        <td>{{ $data->data }}</td>
        <td>
          @if($data->status)
            {{ $data->status }}
          @else
            Desativado
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<div class="pt-lg-5">
  <table class="table table-bordered border-primary">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Estado</th>
      <th scope="col">Data/Hora</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($erp_contatos as $key => $data)
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
        <td>
          @if($data->mail == '*.com')
            {{ $data->mail }}
          @else
            Invalido!
          @endif
        </td>
        <td>{{ $data->estado }}</td>
        <td>{{ $data->data }}</td>
        <td>
          @if($data->status)
            {{ $data->status }}
          @else
            Desativado
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
