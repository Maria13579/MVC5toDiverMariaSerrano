<?php
/* Smarty version 3.1.39, created on 2021-07-22 16:06:25
  from 'C:\adobeTemp\htdocs\MVC5toDiverMariaSerrano\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f97b61e9cf47_62444173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9c3bb0178d011e504ff4e8d80b3ba749ed29ed' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\MVC5toDiverMariaSerrano\\templates\\Home.tpl',
      1 => 1626962783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60f97b61e9cf47_62444173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container pink accent-3" >
     
            
                <div class="card-panel teal lighten-2 ">
                        <h1 class=" center-align  blue-text">REGISTRO</h1>
                </div>   
           
      
                
        <form method="post" action="?class=User&method=login">
            <div class="row">
                <div class="input-field col s8">
                    <input  name="nombre" id="first_name2" type="text" class="validate"/>
                    <label class="active" for="first_name2">Nombre</label>
                </div>
            
                <div class="input-field col s8">
                    <input  name="pass" id="first_name3" type="password" class="validate"/>
                    <label class="active" for="first_name3">Password</label>
                </div>
          </div>
          
          <div class="row">
              <div class="input-field col s4">
               
            
                <button class="btn waves-effect waves-light" type="submit" value="Ingresar">Ingresar<i class="material-icons right">send</i>
              </button>
              </div> 
          </div>   
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
