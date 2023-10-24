<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssetType;

class AssetController extends Controller
{
    public function AllAsset(){

        $assets = AssetType::latest()->get();
        return view('backend.type.all_asset', compact('assets'));
    }

    public function AddAsset(){

        
        return view('backend.type.add_asset');
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
}
