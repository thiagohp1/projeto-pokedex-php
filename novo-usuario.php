<h1>Novo usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 form-floating">
        <input id="nome-login" class="form-control" type="text" name="nome" placeholder="Nome">
        <label for="nome-login">Nome</label>
    </div>
    <div class="mb-3 form-floating">
        <input id="email-login" class="form-control" type="text" name="email" placeholder="Email">
        <label for="email-login">Email</label>
    </div>
    <div class="mb-3 form-floating">
         <input id="password-login" class="form-control" type="password" name="senha" placeholder="Senha">
         <label for="password-login">Senha</label>
    </div>
    <div class="mb-3 form-floating">
         <input id="con_senha-login" class="form-control" type="password" name="con_senha" placeholder="Confirmar senha">
         <label for="con_senha-login">Confirmar senha</label>
    </div>
    <div class="mb-3">
        <button type="subimit" class="btn btn-primary">Enviar</button>
        <a href="?page=login" class="btn btn-primary">Cancelar</a>
    </div>    

        
    
</form>    