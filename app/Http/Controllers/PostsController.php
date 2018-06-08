<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Gallery;
use App\Contact;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventory()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6);
        $items = Post::all();
        return view('pages.inventory')->with('posts', $posts)->with('items', $items);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'manufacturer' => 'required',
            'model'        => 'required',
            'yom'          => 'required',
            'desc'         => 'required',
            'item_img'     => 'image|max:1999'
        ]);

        if($request->hasFile('item_img'))
        {
            $filenameWithExt = $request->file('item_img')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('item_img')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('item_img')->storeAs('public/item_imgs', $filenameToStore);
        }
        

        $post = new Post;
        $post->manufacturer = $request->input('manufacturer');
        $post->model = $request->input('model');
        $post->yom = $request->input('yom');
        $post->desc = $request->input('desc');
        $post->item_img = $filenameToStore;
        $post->specoff = 0;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/create')->with('success', 'Item added to Inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
       $gallery = Gallery::where('post_id', '=', $id)->get();
       return view('posts.show')->with('post', $post)->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'manufacturer' => 'required',
            'model'        => 'required',
            'yom'          => 'required',
            'item_img'     => 'image|max:1999'
        ]);

        if($request->hasFile('item_img'))
        {
            $filenameWithExt = $request->file('item_img')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('item_img')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('item_img')->storeAs('public/item_imgs', $filenameToStore);
        }
        else
        {
            $filenameToStore = 'noimg.jpg' ;
        }
        

        $post = Post::find($id);
        $post->manufacturer = $request->input('manufacturer');
        $post->model = $request->input('model');
        $post->yom = $request->input('yom');
        $post->item_img = $filenameToStore;
        $post->save();

        return redirect('/inventory')->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/inventory')->with('success', 'Item Removed');
    }

    public function imgupload(Request $request, $id)
    {
       

        if($request->hasFile('item_gal'))
        {
            foreach ($request->file('item_gal') as $file) 
            {
            
            $filenameWithExt = $file->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $file->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $file->storeAs('public/item_imgs', $filenameToStore);

            $file = new Gallery;

            $file->name = $filenameToStore;

            $file->post_id = $id;

            $file->save();

        }
            return redirect('/inventory');
        }
    }

  //  public function galdisplay($id)
  //  {
    //    $gallery = Gallery::where('post_id' , '=', $id)->get();
      //  return view('posts.show')->with('gallery', $gallery);
  //  }



    public function applyonline(Request $request)
    {
        return redirect('/applyonline')->with('success', 'Your application has been submited.');
    }

    public function contactUs(Request $request)
    {
        $this->validate($request, [
            'fullname'  =>  'required',
            'email'     =>  'required',
            'message'   =>  'required'
        ]);

        $contact = new Contact;
        $contact->fullname = $request->input('fullname');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect('/contact');
    }
}

