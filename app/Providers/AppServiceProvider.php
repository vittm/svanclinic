<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use App;
use Request;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $script= DB::table('scriptcodes')->first();
        if(Request::segment(1) == 'en') {
            $menuhome= DB::table('menuhomes')->join('menuhome_trans', 'menuhomes.id', '=', 'menuhome_trans.trans_id')->where('menuhome_trans.lang_code', 'en')->select('menuhomes.*', 'menuhome_trans.name', 'menuhome_trans.slug')->get();   
        }else {
            $menuhome= DB::table('menuhomes')->join('menuhome_trans', 'menuhomes.id', '=', 'menuhome_trans.trans_id')->where('menuhome_trans.lang_code', 'vi')->select('menuhomes.*', 'menuhome_trans.name', 'menuhome_trans.slug')->get();
        }
        view()->share(['script'=>$script,'menuhome' => $menuhome]);
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
}
