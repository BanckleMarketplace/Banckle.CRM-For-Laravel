<?php 

namespace Banckle\Crm;

use Illuminate\Support\ServiceProvider;

class CrmServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
    * Bootstrap the application events.
    *
    * @return void
    */
    public function boot()
    {
        $this->package('banckle/crm');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['banckle'] = $this->app->share(function($app)
        {
            return new CRM(\Config::get('crm::config'));
        });
        
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('BanckleCRM', 'Banckle\Crm\Facades\CRM');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('banckle');
    }

}
