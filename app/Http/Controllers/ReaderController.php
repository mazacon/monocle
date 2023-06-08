<?php

namespace App\Http\Controllers;

use App\Models\RssFeed;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Feed;

class ReaderController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Feed::$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36";
        $feed = RssFeed::findOrFail($id);
        $url = $feed->rsslink;
        
        try {
            $rss = Feed::loadRss($url)->toArray();
        } catch (FeedException $fe) {
            $rss = array($fe);
            return Inertia::render('Dashboard');
        }

        return Inertia::render('Reader', [
            'rssfeed' => $rss,
        ]);
    }
}
