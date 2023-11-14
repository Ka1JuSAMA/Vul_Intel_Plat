<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssetType;
use App\Models\BusinessContext;
use App\Models\Post;
use App\Models\Photo;

class AssetController extends Controller
{
    public function AllAsset(){

        $assets = AssetType::latest()->get();
        return view('backend.asset.all_asset', compact('assets'));
    }

    public function AddAsset(){

        
        return view('backend.asset.add_asset');
    }

    public function StoreAsset(Request $request){

        $request->validate([
            'asset_name' => 'required',
            'asset_type' => 'required',
            'asset_brand' => 'required',
            'asset_status' => 'required'
        ]);

        AssetType::insert([

            'asset_name' => $request->asset_name,
            'asset_type' => $request->asset_type,
            'asset_brand' => $request->asset_brand,
            'asset_status' => $request->asset_status,

        ]);

        $notification = array(
            'message' => 'New Asset Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.asset')->with($notification);

    }

    public function EditAsset($id){

        $assets = AssetType::findOrFail($id);
        return view('backend.asset.edit_asset', compact('assets'));

    }

    public function UpdateAsset(Request $request){

        $pid = $request->id;

        AssetType::findOrFail($pid)->update([

            'asset_name' => $request->asset_name,
            'asset_type' => $request->asset_type,
            'asset_brand' => $request->asset_brand,
            'asset_status' => $request->asset_status,

        ]);

        $notification = array(
            'message' => 'Asset Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.asset')->with($notification);

    }


    public function DeleteAsset($id){

        AssetType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Asset Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    /////////////////////// methods for context ///////////////////////////

    public function AllContext(){

        $contexts = BusinessContext::latest()->get();
        return view('backend.context.all_context', compact('contexts'));
    }

    public function AddContext(){

        
        return view('backend.context.add_context');
    }

    public function StoreContext(Request $request){

        $request->validate([
            'context_name' => 'required',
            'context_type' => 'required',
           
        ]);

        BusinessContext::insert([

            'context_name' => $request->context_name,
            'context_type' => $request->context_type,

        ]);

        $notification = array(
            'message' => 'New Asset Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.context')->with($notification);

    }

    public function EditContext($id){

        $contexts = BusinessContext::findOrFail($id);
        return view('backend.context.edit_context', compact('contexts'));

    }

    public function UpdateContext(Request $request){

        $pid = $request->id;

        BusinessContext::findOrFail($pid)->update([

            'context_name' => $request->context_name,
            'context_type' => $request->context_type,

        ]);

        $notification = array(
            'message' => 'Context Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.context')->with($notification);

    }


    public function DeleteContext($id){

        BusinessContext::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Context Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    /////////////////////// methods for post ///////////////////////////

    public function AllPost(){

        $posts = Post::latest()->get();
        $posts = Post::paginate(5); // 5 is the number of items per page

        return view('backend.blog.all_post', compact('posts'));
    }

    public function AddPost(){

        
        return view('backend.blog.add_post');
    }

    public function StorePost(Request $request){

        $request->validate([
            'post_name' => 'required',
            'post_type' => 'required',
           
        ]);


        if ($request->file('photo')){
            $filename = date('YmdHi').'_'.$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('upload/post_images'), $filename);

            $photo = new Photo();
            $photo->image_path = $filename;
            
            Post::insert([
                'post_name' => $request->post_name,
                'post_type' => $request->post_type,
                'photo' => $filename,
            
            ]);
        } else {
            Post::insert([

                'post_name' => $request->post_name,
                'post_type' => $request->post_type,
                // 'photo' => $filename,
                'created_at' => now()
    
            ]);
        }


        $notification = array(
            'message' => 'New Post Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }

    public function EditPost($id){

        $posts = Post::findOrFail($id);
        return view('backend.blog.edit_post', compact('posts'));

    }

    public function UpdatePost(Request $request){

        $pid = $request->id;

        Post::findOrFail($pid)->update([

            'post_name' => $request->post_name,
            'post_type' => $request->post_type,
            'photo' => $request->photo,

        ]);

        $notification = array(
            'message' => 'Post Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }


    public function DeletePost($id){

        Post::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Post Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
