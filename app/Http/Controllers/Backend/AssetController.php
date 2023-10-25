<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssetType;
use App\Models\BusinessContext;

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
}
