<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Channel;
class ChannelsController extends Controller
{
	public function index()
	{
		$channels = Channel::latest()->get();
		return view('admin.channel',compact('channels'));
	}
	public function create()
	{
		return view('admin.channel.create');
	}
    // url -> admin/channel/store
	public function store()
	{
		$channel = request()->validate([
			'title' => 'required',
			'image' => 'required',
			'description' => 'required',
		]);
		Channel::create([
			'title' => request('title'),
			'image' => request()->file('image')->store('channel', 'public'),
			'description' => request('description'),
		]);

		return redirect('/admin/channel');
	}
	public function edit(Channel $channel)
	{
		return view('admin.channel.edit',compact('channel'));
	}

	public function update(Channel $channel)
	{
		$channel->update([
			'title' => request('title'),
			'image' => request()->file('image')->store('channel', 'public'),
			'description' => request('description'),
		]);
		return redirect('/admin/channel');
	}
	public function delete(Channel $channel)
	{
		$channel->delete();
		return redirect('/admin/channel');
	}
}
