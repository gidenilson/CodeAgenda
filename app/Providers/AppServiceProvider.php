<?php

namespace App\Providers;
use App\Entities\Pessoa;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot() {
        view()->share(['letras'=>$this->getLetras()]);
        
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
     private function getLetras() {
         $pessoas = Pessoa::select('apelido')->orderBy('apelido')->get();
         $letras = [];

         foreach ($pessoas as $pessoa) {
             $letras[] = strtoupper(substr($pessoa->apelido, 0, 1));
         }
         return array_count_values($letras);
       
     }    
}
