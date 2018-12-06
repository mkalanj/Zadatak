<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <?php
        class Krug{
            
            private $polumjer=5;
            
            public function pol(){
                return $this->polumjer . "<br>";
             
            }
            public function izracun(){
               $result = $this->polumjer*2*3.14 . "<br>";
              return $result;
            }
        }
        
        class Trokut{
            
            private $a=5,  $b=5,  $c=7,  $v=3;
            
            
            public function constructor($a, $b, $c, $v){
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
              $this->v = $v;
            }
           
            public function izracunOT(){
               
              return $this->a + $this->b + $this->c;
            }
            
             public function izracunPT(){
               
              return ($this->a * $this->v)/$this->c;
            }
     
        }
      
        $krug = new Krug;
        
        echo 'Polumjer kruga je: ';
       echo $krug->pol();
         echo 'Povrsina kruga je: ' ;
       echo $krug->izracun(). "<br>";
       
       
       
       $trokut = new Trokut;
      
       echo 'Opseg trokuta je: ';
       echo $trokut->izracunOT(). "<br>";
       
       echo 'Povrsina trokuta je: ';
       echo $trokut->izracunPT();
       
  
