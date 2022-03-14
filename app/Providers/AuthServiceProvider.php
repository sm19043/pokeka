<?php

namespace App\Providers;


use App\Deckrecipe;
use App\Policies\DeckrecipePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションのポリシーマッピング
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Deckrecipe::class => DeckrecipePolicy::class,
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * 全アプリケーション認証/認可サービス登録
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
