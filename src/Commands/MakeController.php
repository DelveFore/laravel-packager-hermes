<?php

namespace DelveFore\PackagerHermes\Commands;

use Illuminate\Support\Str;
use Illuminate\Routing\Console\ControllerMakeCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeController extends ControllerMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:packager:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new controller class within a Jeroen-G/laravel-packager package';

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);
        $name = str_replace('\\', '/', $name);
        $basePath = str_replace('\\', '/', $this->laravel->basePath());
        $namespace = str_replace('\\', '/', $this->rootNamespace());
        $path = $basePath.'/'.'packages/'.$namespace.'/src/App'.$name.'.php';
        return $path;
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNamespaceInput()
    {
        return str_replace('/', '\\', trim($this->argument('namespace')));
    }


    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return $this->getNamespaceInput();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['namespace', InputArgument::REQUIRED, 'The namespace of the package for the controller'],
            ['name', InputArgument::REQUIRED, 'The name of the controller'],
        ];
    }
}
