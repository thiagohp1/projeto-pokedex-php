<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"] ? $_POST["nome"] : false;
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $con_senha = md5($_POST["con_senha"]);

            if ($senha === $con_senha){
                $senha = md5($_POST["senha"]);
            }
            else {
                print"<script>alert('As senhas não conferem');</script>";
                print "<script>location.href='?page=novo';</script>";
            break;
            }

            if ($nome && $email && $senha){
                $valida_usuario = "SELECT * FROM usuarios WHERE email = '{$email}'";

                $res_valida = $conn->query($valida_usuario);

                $fetch_valida = $res_valida->fetch_object();

                if($fetch_valida){
                    print "<script>alert('E-mail já existente');</script>";
                    print "<script>location.href='?page=novo';</script>";
                    break;
                }
                
                $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}','{$email}','{$senha}')";

                $res = $conn->query($sql);
                
                if($res==true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=login';</script>";
                }else{
                    print"<script>alert('Não foi possível cadastrar');</script>";
                    print"<script>location.href='?page=login';</script>";
                }
            }else{
                print"<script>alert('Você precisa preencher todos os campos');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;

            case 'editar':
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]);
            
                $sql = "UPDATE usuarios SET
                            nome = '{$nome}',
                            email = '{$email}',
                            senha = '{$senha}',
                        WHERE 
                            id=".$_REQUEST["id"];              
    
                $res = $conn->query($sql);
                
                if($res==true){
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não foi possível editar');</script>";
                    print"<script>location.href='?page=listar';</script>";
                }
                break;

                case 'excluir':

                    $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
                    
                    $res = $conn->query($sql);
                    
                    if($res==true){
                        print "<script>alert('Excluído com sucesso');</script>";
                        print "<script>location.href='?page=listar';</script>";
                    }else{
                        print "<script>alert('Não foi possível excluir');</script>";
                        print"<script>location.href='?page=listar';</script>";
                    }
                    break;
    }