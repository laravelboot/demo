<?php
namespace Module\Demo;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Events\Dispatcher;
use LaravelBoot\Foundation\Module\Abstracts\Module;
use LaravelBoot\Foundation\Module\Abstracts\ModuleInterface;

class ModuleServiceProvider extends Module implements ModuleInterface
{
	public function __construct(Application $app)
    {
        parent::__construct($app);
    }
	
	public function boot()
    {
	}
	
	/**
     * Description of module
     *
     * @return string
     */
    public static function description()
    {
        return '示例模块';
    }

    /**
     * Install module.
     *
     * @return bool
     */
    public static function install()
    {
        return true;
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public static function name()
    {
        return '示例';
    }

    /**
     * Uninstall module.
     *
     * @return mixed
     */
    public static function uninstall()
    {
        return true;
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public static function version()
    {
        return '1.0.0';
    }
}