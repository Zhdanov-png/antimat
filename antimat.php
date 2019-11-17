<?php 


class Antimat
{ 
  /*
     маркировка слова
   */
   public function wordmark($word)
   {
       
      return '<mark>'.$word.'</mark>';
      
   }
    
   public function repmark($search, $subject) 
   {
       return str_replace($search, 
                           $this->wordmark($search), 
                           $subject);
   }
    

   public function blocker($search, $subject)
   {
       return str_replace($search, 
                           'sencored', 
                           $subject); 
   }
     

}
