<?php

//phpinfo();
//die();

require_once 'app.php'; //arquivo geral da aplicacao

$uri = explode("/", $_SERVER["REQUEST_URI"]); //explore a URL

$controllerName = $uri[1]; //coloca como padrao: nomeProjeto/controlador/acao/parametros

if(!$controllerName && CONTROLADOR_PADRAO) {
    $controllerName = CONTROLADOR_PADRAO;
}
if($controllerName=="?XDEBUG_SESSION_START=netbeans-xdebug")  {
    $controllerName = CONTROLADOR_PADRAO;
}

$controllerFileName = "controlador/" . $controllerName . "Controlador.php";

if (!file_exists($controllerFileName)) 
    die("Não foi encontrado o arquivo: '$controllerFileName' para enviar a solicitação!"); 

require_once $controllerFileName;

$action = (isset($uri[2]) and ! empty($uri[2])) ?  $action = $uri[2] : 'index'; //pega a acao
$params = (count($uri) > 3) ? array_slice($uri, 3) : array(); //pega os parametros, se existir

try {
    if(is_callable($action)){ //a funcao existe?

        if(defined('AUTENTICADOR')) {

            $role = getRoleOfControllerAction($action);
            $roles = explode(",", $role);


            $userRole = authGetUserRole();

            foreach ($roles as $role) {
                
                $released = true;
                $role = trim($role);

                if(!empty($role) && $role !== $userRole) {
                       // echo "role=$role  userrole=$userRole <BR><BR>";
                        //regra nao eh igual a encontrada na action do controlador
                        $released = false;
                        $authMsg = "Não tem permissão para acessar essa funcionalidade";

                }

                if(empty($role) && !authIsLoggedIn()) {
                        $released = false;
                        $authMsg = "<br>Você precisa autenticar-se para acessar!";
                }

                if(!empty($role) && $role == "anon") {
                        //acesso anonimo
                        $released = true;
                }

                if($released) { 
                    break;
                }
            }

        }

        if($released) {
                //echo "acesso permitido";
                call_user_func_array($action, $params); //chama a funcao passando parametros   
        } else {
                //echo "acesso negado";
                alert($authMsg, "warning");
                redirecionar("login"); die();
        }


    } else {
        die('Não foi encontrado a função correspondente a ação "' . $action . '" do controlador "' . $controllerFileName . '"');
    }
} catch (ArgumentCountError $e) {
    echo "chama 404!";
}

function getRoleOfControllerAction($action) {
    $rc = new ReflectionFunction($action);
    $role = $rc->getDocComment();
    $role = trim(substr($role, 3, -2));
    return $role;
}