<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Customers</title>
</head>
<body>
    <div class="container">
      <br><br>
        <a href="/api/customers/create" class="bg-secondary text-white">Novo Cliente</a>
        <br><br>
  
      <table class="table">
        <thead <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Endereço</th>
            <th scope="col">CEP</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address->publicPlace }}</td>
                <td>{{ $customer->address->zipcode }}</td>
                <td>{{ $customer->address->uf }}</td>
               
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>