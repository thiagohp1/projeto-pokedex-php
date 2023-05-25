<h1>Novo usuários</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Confirme a senha</label>
        <input type="password" name="con_senha" class="form-control">
    </div>
    <div class="mb-3">
        <button type="subimit" class="btn btn-primary">Enviar</button>
        <a href="?page=login" class="btn btn-primary">Cancelar</a>
    </div>    

        
    
</form>    