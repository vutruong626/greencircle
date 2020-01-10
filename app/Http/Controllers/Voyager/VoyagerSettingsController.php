<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerSettingsController as BaseVoyagerSettingsController;

class VoyagerSettingsController extends BaseVoyagerSettingsController
{
    public function clearCacheImage()
    {
		$path_cache = storage_path('app/public/cache');

		try {
			\File::cleanDirectory($path_cache);	
		}
		catch(\Exception $e) {

		}

    	return redirect('/admin')->with([
                'message'    => 'Clear cache successful!',
                'alert-type' => 'success',
            ]);
    }
}
