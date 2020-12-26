<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

use App\Models\Twitter\Timeline;

class TwitterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // test gettine timeline
	public function getTimeline(Request $request)
	{
		$model = new Timeline();
		$result = $model->getTimeline();

		dd($result);
	}
}
