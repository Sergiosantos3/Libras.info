<?php
require_once('banco_class.php');

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha_hash;
    public $data_nascimento;
    public $nivel_libras;
    public $pontos_xp;
    public $data_cadastro;
    public $ultimo_login;
    public $ativo;


    public function Cadastrar(){
        $sql = "INSERT INTO usuarios (nome, email, senha_hash, nivel_libras)
        VALUES (?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->nome,
            $this->email,
            hash('sha256', $this->senha_hash),
            $this->nivel_libras
        ]);
        Banco::desconectar();
        return $comando->rowCount();
        
    }

    public function Logar(){
        $sql = "SELECT * FROM USUARIOS WHERE email = ? and senha_hash = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->email,
            hash('sha256', $this->senha_hash)
        ]);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }

    public function TrocarSenha(){
        $sql = "UPDATE usuarios SET senha_hash = ? WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            hash('sha256', $this->senha_hash),
            $this->id
        ]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Atualizar(){
        $sql = "UPDATE usuarios SET nome = ?, email = ?, nivel_libras = ? WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $resultado = $comando->execute([
            $this->nome,
            $this->email,
            $this->nivel_libras,
            $this->id
        ]);
        Banco::desconectar();
    return $resultado ? 1 : 0; // retorna 1 se executou
   }

}