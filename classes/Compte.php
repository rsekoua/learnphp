<?php

/**
 * Objet Compte bancaire
 */
class Compte
{
    /**
     * Titulaire du compte
     * @var string
     */
    private string $titulaire;

    /**
     * @var float|int
     */
    private float|int $solde;

    /**
     * @param string $titulaire
     * @param float $solde
     */
    public function __construct(string $titulaire, float $solde = 100)
    {
      $this->titulaire = $titulaire;
      $this->solde = $solde;
    }

    /**
     * Getter de Titutlaire
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function setTitulaire(string $titulaire): void
    {
        $this->titulaire = $titulaire;
    }

    /**
     * @param float $montant
     * @return void
     */
    public function deposer(float $montant) : void
    {
        if($montant > 0){
            $this->solde += $montant;
        }

    }

    /**
     * @return string
     */
    public function voirSolde(): string
    {
        return "Le solde du compte est de $this->solde $.";
    }

    /**
     * @param $montant
     * @return void
     */
    public function retirer($montant): void
    {
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else {
            echo "Le montant invalide ou solde insuffisant";
        }
    }

}