<?php 


class Antimat
{ 
  /*
     маркировка слова
   */
    
  private $search='Вале';
  
  public function setContent($search)
  {
      $this->search=search;
  }
    
   public function wordmark($word)
   {
       
      return '<mark>'.$word.'</mark>';
      
   }
    
   public function marked($subject) 
   {
       return str_replace($this->search, 
                           $this->wordmark($this->search), 
                           $subject);
   }
    

   public function blocked( $subject)
   {
       return str_replace($this->search, 
                           'sencored', 
                           $subject); 
   }
     

}
