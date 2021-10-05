<?php 

    class createModel{ 

        public function getUser($cpf,$login){

            $conn = Connection::getConn();

            $sql = "SELECT c.id 
                    FROM cadastro c 
                    INNER JOIN usuario u ON u.cpf = c.cpf
                    WHERE c.cpf = :cpf or c.login = :login 
                    ORDER BY c.id DESC LIMIT 1";

            $sql = $conn->prepare($sql);
            $sql->bindValue(':login',$login, PDO::PARAM_STR);
            $sql->bindValue(':cpf',$cpf, PDO::PARAM_STR);
            $sql->execute();

            $result = $sql->fetch(PDO::FETCH_ASSOC);
            
            return $result;
        }

        public function setUser(array $dados){

            $conn = Connection::getConn();
            
            if(!empty($dados)){

                /*INSERINDO NA TABELA CADASTRO*/
                
                $sql = "INSERT INTO cadastro (cpf, nome, email, telefone, dataNascimento) 
                        VALUES (:cpf, :nome, :email, :telefone, :dataNascimento)";
                
                $sql = $conn->prepare($sql);

                $sql->bindValue(':cpf',$dados['cpf']);
                $sql->bindValue(':nome',$dados['nome']);
                $sql->bindValue(':email',$dados['email']);
                $sql->bindValue(':telefone',$dados['telefone']);
                $sql->bindValue(':dataNascimento',$dados['dataNascimento']);

                $sql->execute();

                /*INSERINDO NA TABELA USUÁRIO*/

                $sql_II = "INSERT INTO usuario (login, senha, cpf)
                           VALUES(:login,:senha,:cpf)";

                $sql_II = $conn->prepare($sql_II);

                $sql_II->bindValue(':login',$dados['login']);
                $sql_II->bindValue(':senha',$dados['senha']);
                $sql_II->bindValue(':cpf',$dados['cpf']);

                $sql_II->execute();

                try {

                    $sql_verify = "SELECT c.id 
                                   FROM cadastro c 
                                   INNER JOIN usuario u ON u.cpf = c.cpf 
                                   WHERE c.cpf = :cpf 
                                   ORDER BY c.id 
                                   DESC LIMIT 1";

                    $sql_verify = $conn->prepare($sql_verify);
                    $sql_verify->bindValue(':cpf',$dados['cpf']);
                    $sql_verify->execute();

                    echo "Usuário criado com sucesso!";


                } catch (\Exception $th) {
                    
                    throw new Exception('Erro ao criar conta, favor entrar em contato com o suporte!');
                    die('Erro: 1' . $th->getMessage());
                }

            
            }
        }
    }

?>