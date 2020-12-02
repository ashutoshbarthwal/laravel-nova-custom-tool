<?php

namespace Acme\ExchangeRateTracker;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Illuminate\Support\Facades\Http;
class ExchangeRateTracker extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('exchange-rate-tracker', __DIR__.'/../dist/js/tool.js');
        Nova::style('exchange-rate-tracker', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('exchange-rate-tracker::navigation');
    }
}
