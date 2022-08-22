<?php

class Text
{
    private $text;

    /**
     * Permet de définir le texte à formatter.
     */
    public function set($text)
    {
        $this->text = '<p>'.$text.'</p>';

        return $this;
    }

    /**
     * Permet de mettre le texte en gras.
     */
    public function bold()
    {
        $this->text = '<strong>'.$this->text.'</strong>';

        return $this;
    }

    /**
     * Permet de mettre le texte en italique.
     */
    public function italic()
    {
        $this->text = '<em>'.$this->text.'</em>';

        return $this;
    }

    /**
     * Permet de barrer le texte.
     */
    public function strike()
    {
        $this->text = '<del>'.$this->text.'</del>';

        return $this;
    }

    /**
     * Permet de mettre le texte en couleur.
     */
    public function color($color)
    {
        $this->text = '<span style="color: '.$color.'">'.$this->text.'</span>';

        return $this;
    }

    /**
     * Permet d'afficher le texte.
     */
    public function print()
    {
        echo $this->text;
    }

    /**
     * Permet d'afficher l'objet en chaine.
     */
    public function __toString()
    {
        return $this->text;
    }
}
