<?php 
class Funcionario
{
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private  $salarioFinal;

    //gets e sets

    //gets e sets Nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //gets e sets Cidade
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    //gets e sets SalHora
    public function getSalHora()
    {
        return $this->salHora;
    }

    public function setSalHora($salHora)
    {
        $this->salHora = $salHora;
    }

    //gets e sets HorasTrab
    public function getHorasTrab()
    {
        return $this->horasTrab;
    }

    public function setHorasTrab($horasTrab)
    {
        $this->horasTrab = $horasTrab;
    }

    //gets e sets SalarioFinal
    public function getSalarioFinal()
    {
        return $this->salarioFinal;
    }

    public function setSalarioFinal($salarioFinal)
    {
        $this->salarioFinal = $salarioFinal;
    }

    //demais metodos

    public function calcularSalario()
    {
        return $this->horasTrab * $this->salHora * 30;
    }

    public function mostrarDados()
    {
        return "Nome: <span id='dados'>$this->nome</span> | Cidade: <span id='dados'>$this->cidade</span> | Salário por hora: <span id='dados'>$this->salHora</span> | Horas trabalhadas: <span id='dados'>$this->horasTrab</span> | Salário: <span id='dados'>R$ $this->salarioFinal</span>";
    }

    public function darAumento($aumento)
    {
        return $this->salarioFinal = $this->salarioFinal + $aumento;
    }
    
    

    
}

?>