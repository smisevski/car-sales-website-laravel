<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class SearchController extends Controller
{
    public function index()
    {
    	return view('pages.home');
    }

    public function search(Request $request)
    {

    		if($request->ajax())
    		{
				
				$itemsByManufact = Post::where('manufacturer', '=', $request->manuSelect)->get();
				$output = '';
				foreach ($itemsByManufact as $item) 
				{
					$output.= '	
								<a href="/posts/'.$item->id.'"><div class="card card-block">
									<div class="row">
										<div class="col-md-2">
											<img src="/storage/item_imgs/'.$item->item_img.'" width="210" height="130">
										</div>

										<div class="col-md-10">	
											<h3>'.$item->manufacturer.'</h3>
											<h5>'.$item->model.'</h5>
											<h6>'.$item->yom.'</h6>
											<small>'.$item->updated_at.'</small>
										</div>
									</div>
								</div></a>
							  	' ;
				}

				return Response($output);

		    }
	}

    public function search1(Request $request)
    {

    		if($request->ajax())
    		{
				
				$itemsByModel = Post::where('model', '=', $request->modelSelect)->get();
				$output = '';
				foreach ($itemsByModel as $item) 
				{
					$output.= '	
								<a href="/posts/'.$item->id.'"><div class="card card-block">
									<div class="row">
										<div class="col-md-2">
											<img src="/storage/item_imgs/'.$item->item_img.'" width="210" height="130">
										</div>

										<div class="col-md-10">	
											<h3>'.$item->manufacturer.'</h3>
											<h5>'.$item->model.'</h5>
											<h6>'.$item->yom.'</h6>
											<small>'.$item->updated_at.'</small>
										</div>
									</div>
								</div></a>
							  	' ;
				}

				return Response($output);

		    }
	}

    public function search2(Request $request)
    {

    		if($request->ajax())
    		{
				
				$itemsByYOM = Post::where(['yom', '=', $request->yomSelect] AND ['model', '=', $request->modelSelect])->get();

				return response()->json($itemsByYOM);

		    }
	}		
}
