<?php 


class Antimat
{ 
  /*
     маркировка слова
   */
    
  private $search=['Вале','хули','фиг'];
  
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
       $tmp=$subject;
       foreach($this->search as $find)
       $tmp=str_replace($find, 
                           $this->wordmark($find), 
                           $tmp);
       return $tmp;
   }
    

   public function blocked( $subject)
   {
       $tmp=$subject;
       foreach($this->search as $find)
       $tmp=str_replace($find, 
                           'sensored@', 
                           $tmp);
       return $tmp;
   }
     

}
