<?php
class Creneau 
{

        public $debut;
        public $fin;

        public function __construct(int $debut,int $fin)
        {
            $this->debut=$debut;
            $this->fin=$fin;
        }
         
        public function toHtml()
        {
           return "<strong>{$this->debut}h</strong> a <strong>{$this->fin}h</strong";
        }

        public function inclusHeure( int $heure)
        {
            return $heure>=$this->debut && $heure<=$this-> fin;
        }

        public function intersect(Creneau $creneau)
        {
           return $this->inclusHeure($creneau->debut) || $this->inclusHeure($creneau->fin)
           || ($this->debut > $creneau->debut && $this->fin < $creneau ->fin);
        }
}











?>