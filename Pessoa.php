<?php 
    include("Cep.php");

    class Pessoa{
        private string $nome;
        private string $idade;
        private string $cep;
        private string $rua;
        private string $bairro;
        private string $cidade;

        /*
        public function __construct(string $nome, string $idade, string $cep)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cep = $cep;

            
        }
        */
        public function __construct(){}

        private function EndAuto(){
            $array = Cep::ConsultarCep($this->cep);
            //print_r($array);
            $this->rua = $array['logradouro'];
            $this->bairro = $array['bairro'];
            $this->cidade = $array['localidade'];
            
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }
        
        public function setIdade(string $idade){
            $this->idade = $idade;
        }

        public function getIdade(){
            return $this->idade;
        }

        
        public function setCep(string $cep){
            $this->cep = $cep;
            $this->EndAuto();
        }

        public function getCep(){
            return $this->cep;
        }

        public function setRua(string $rua){
            $this->rua = $rua;
        }

        public function getRua(){
            return $this->rua;
        }

        public function setBairro(string $bairro){
            $this->bairro = $bairro;
        }

        public function getBairro(){
            return $this->bairro;
        }

        public function setCidade(string $cidade){
            $this->cidade = $cidade;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function __toString()
        {
            $str = "<br>Nome: " . $this->nome . "<br>Idade: " . $this->idade 
            . "<br>CEP: " . $this->cep . "<br>Rua: " . $this->rua 
            . "<br>Bairro: " . $this->bairro . "<br>Cidade: " . $this->cidade;
            return $str;
        }

    }