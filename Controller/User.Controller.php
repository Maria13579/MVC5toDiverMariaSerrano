<?php
    Class User
    {
        public function login()
        {
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];
            $estado=false;
             $cont=0;   

            foreach($user as $u)
            {
                if($u['nombre']==$usuario && $u['pass']==$pass)   
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