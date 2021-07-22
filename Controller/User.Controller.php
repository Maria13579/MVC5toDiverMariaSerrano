<?php
    Class User
    {
        public function login()
        {
            $user=$_POST['nombre'];
            $password=$_POST['pass'];

            $smarty = new Smarty();
            $vec=array();
            $vec=[
                ['usuario'=>'Eva','pass'=>'123'],
                ['usuario'=> 'Natalia', 'pass'=>'456'],
                ['usuario'=> 'Maria', 'pass'=>'789'],
                ['usuario'=> 'Javier', 'pass'=>'321'],
                ['usuario'=> 'Jesus', 'pass'=>'654'],
                ['usuario'=> 'Jose', 'pass'=>'987']
            ];
            $smarty->assign('datos', $vec);
            $smarty->assign('nombre','Login');
               
            $estado=false;
             $cont=0;   

            foreach($vec as $u)
            {
                if($u['usuario']==$user && $u['pass']==$password)   
                {
                    $estado=true;
                    $cont++;    
                } 
            }
            if($estado)
            {
                echo "Bienvenido";
            }
            else
            {
                echo "Usuario No existente";
            }
           
        }
    }
?>