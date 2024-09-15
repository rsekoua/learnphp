<?php

namespace App\Banque;
/**
 * Objet Compte bancaire
 */
abstract class Compte
{
    /**
     * Titulaire du compte
     * @var string
     */
    private string $titulaire;

    /**
     * @var float|int
     */
    protected int|float $solde;


    /**
     * @param string $titulaire
     * @param float $solde
     */
    public function __construct(string $nom, float $montant = 100)
    {
        $this->titulaire = $nom;
        $this->solde = $montant;
    }

    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }

    /**
     * Getter de Titutlaire
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function setTitulaire(string $nom): void
    {
        $this->titulaire = $nom;
    }


    public function getSolde(): float|int
    {
        return $this->solde;
    }

    public function setSolde(float|int $montant): void
    {
        $this->solde = $montant;
    }


    /**
     * @param float $montant
     * @return void
     */
    public function deposer(float $montant): void
    {
        if ($montant > 0) {
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
     * @param float $montant
     * @return void
     */
    public function retirer(float $montant): void
    {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Le montant invalide ou solde insuffisant";
        }

    }


}