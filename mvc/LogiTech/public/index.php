<?php
declare(strict_types=1);



if(isset($_GET['url'])){
    $url = $_GET['url'];
} else{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ?? '/');
    $url = trim($uri, '/');
    if ($url === ''){
        $url = 'chamado/index';
    }
}

//Encontrar o nome do Controller
$controllerNome = ucfirst($segmentos[0]) . 'Controller';

//Encontra o método
$metodo = $segmentos[1] ?? 'index';

//Encontra os parâmetros
$parametros = array_slice($segmentos, 2);

//Encontra o arquivo do controller
$caminhoArquivo = __DIR__ . "/../app/Controllers/{$controllerNome}.php";

//Validações Controller, Classe e Metodo
if(file_exists($caminhoArquivo)){
    require_once $caminhoArquivo;
    if(class_exists($controllerNome)){
        $controller = new $controllerNome();
        if(method_exists($controller, $metodo)){
            //Chama o método passando os parâmetros da URL dinamicamente
            call_user_func_array([$controller, $metodo], $parametros);
        } else {
            http_response_code(404);
            echo "<h1>Erro 404</h1><p>Ação {$metodo} não encontrado no controller</p>";
        }
    } else {
        http_response_code(500);
        echo "<h1>Erro 500</h1><p>Classe {$controllerNome} mal configurado</p>";
    }
} else {
    http_response_code(404);
    echo "<h1>Erro 404</h1><p>Página ou recurso {$segmentos[0]} não existe.</p>";
}
?>



