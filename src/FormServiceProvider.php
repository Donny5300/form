<?php

    namespace Donny5300\Form;

    use Illuminate\Support\ServiceProvider;

    class FormServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap the application services.
         *
         * @return void
         */
        public function boot()
        {
            require __DIR__ . '/../../../autoload.php';
        }

        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app['command.form.generate'] = $this->app->share(
                function ($app) {
                    return new FormCommand($app['config'], $app['files'], $app['view']);
                }
            );

            $this->commands('command.form.generate');
        }

        /**
         * @return array
         */
        public function provides()
        {
            return array('command.form.generate');
        }
    }
