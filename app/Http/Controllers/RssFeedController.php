<?php

namespace App\Http\Controllers;

use App\Models\RssFeed;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RssFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // grab current user id from auth shortcut
        $current_user_id = auth()->user()->id;

        return Inertia::render('RssFeeds/Index', [
            'rssfeeds' => RssFeed::where('user_id', $current_user_id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'rsslink' => 'required|string|max:255',
        ]);
 
        $request->user()->rssFeeds()->create($validated);
 
        // TODO: change to redirect to reader if link is good
        return redirect(route('rss-feeds.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(RssFeed $rssFeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RssFeed $rssFeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RssFeed $rssFeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RssFeed $rssFeed)
    {
        //
    }
}
