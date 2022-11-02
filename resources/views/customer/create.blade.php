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
    <h1 align="center">Criar Cliente</h1>
    <div class="container">
        <form action="/api/customers/store" method="post" class="col-md-6 offset-md-3" required>
            @csrf
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>
    
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
    
            <div class="form-group">
                <label>Telefone</label>
                <input type="tel" class="form-control" name="telephone" id="phone" placeholder="00-00000-0000" required>
            </div>
    
            <div class="form-group">
                <label>Aniversário</label>
                <input type="date" class="form-control" name="birth" placeholder="Aniversário" required>
            </div>

            <div class="form-group">
                <label>CEP</label>
                <input id="cep" name="zipcode" class="form-control" placeholder="CEP" pattern= "\d{5}-?\d{3}" required>
            </div>
    
            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" class="form-control" id="publicPlace" name="publicPlace" placeholder="Logradouro" required>
            </div>


            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Cidade" required>
            </div>
    
            <div class="form-group">
                <label>UF</label>
                <input type="text" name="uf" id="uf" class="form-control" placeholder="UF" required>
            </div>
    
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" name="district" id="district" class="form-control" placeholder="Bairro" required>
            </div>
    
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" name="complement" id="complement" class="form-control" placeholder="Complemento" required>
            </div>
    
            <button type="submit" class="btn btn-primary float-right" >Enviar</button>
          </form>
    </div>
    
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/auth/create.js') }}"></script>
</body>
</html>