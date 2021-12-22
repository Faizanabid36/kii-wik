<?php

namespace App\Providers;

use Chatify\Http\Models\Message;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(['layouts.navbar'], function ($view) {
            if (auth()->user()) {
                $messages = [];
                $fromMe = Message::whereFromId(auth()->user()->id)->distinct('to_id')->pluck('to_id')->first();
                $usersList[] = $fromMe;
                $toMe = Message::whereToId(auth()->user()->id)->distinct('from_id')->pluck('from_id')->first();
                $usersList[] = $toMe;
                foreach ($usersList as $u) {
                    if (!is_null($u))
                        $messages[] = Message::latest()
                            ->whereFromId(auth()->user()->id)->whereToId($u)
                            ->orWhere('from_id', $u)->whereToId(auth()->user()->id)
                            ->first();
                }
                $messages = collect($messages)->filter(function ($value, $key) {
                    return $value != null;
                })->values();
                $view->with(['messages' => $messages]);
            }
        });

        Schema::defaultStringLength(191);
    }
}
