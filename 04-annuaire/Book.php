<?php

class Book
{
    private $contacts = [];

    public function count()
    {
        return count($this->contacts);
    }

    public function addContact($contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    public function display()
    {
        $output = '<ul class="list-disc">';

        foreach ($this->contacts as $contact) {
            // $contact est un objet et on l'affiche comme une chaine (voir __toString() dans la classe Contact)
            $output .= "<li>$contact</li>";
        }

        $output .= '</ul>';

        return $output;
        // return implode(', <br />', $this->contacts);
    }
}
