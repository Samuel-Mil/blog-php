<?php

namespace App\Core;

class View
{
    public string $styleSheet = '';
    public string $subTitle = '';

    public function render($view, $params = [])
    {
        $viewContent = $this->renderOnlyView($view, $params);
        $layoutContent = $this->layoutContent();

        echo str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$app->layout;
        if(Application::$app->controller){
            $layout = Application::$app->controller->layout;
        }
        ob_start();
        include_once ROOT_DIR."/src/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView(string $path, array $vars = [])
    {
        foreach ($vars as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once ROOT_DIR."/src/views/$path.php";
        return ob_get_clean();
    }

    public function getStyleSheet()
    {
        return $_ENV['APP_URL'].'css/'.$this->styleSheet.'.css';
    }

    public function setStyleSheet(string $styleSheet)
    {
        return $this->styleSheet = $styleSheet;
    }
}
