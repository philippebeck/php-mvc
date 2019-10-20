<?php

namespace App\Controller;

use App\Controller\Extension\PhpMvcExtension;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

/**
 * Class MainController
 * Manages the Main Features
 * @package App\Controller
 */
abstract class MainController
{
    /**
     * @var Environment|null
     */
    protected $twig = null;

    /**
     * MainController constructor
     * Creates the Template Engine & adds its Extensions
     */
    public function __construct()
    {
        $this->twig = new Environment(new FilesystemLoader('../src/View'), array(
            'cache' => false,
            'debug' => true
        ));
        $this->twig->addExtension(new DebugExtension());
        $this->twig->addExtension(new PhpMvcExtension());
    }

    /**
     * Returns the Page URL
     * @param string $page
     * @param array $params
     * @return string
     */
    public function url(string $page, array $params = [])
    {
        $params['access'] = $page;

        return 'index.php?' . http_build_query($params);
    }

    /**
     * Redirects to another URL
     * @param string $page
     * @param array $params
     */
    public function redirect(string $page, array $params = [])
    {
        header('Location: ' . $this->url($page, $params));

        exit;
    }

    /**
     * Renders the Views
     * @param string $view
     * @param array $params
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function render(string $view, array $params = [])
    {
        return $this->twig->render($view, $params);
    }
}
