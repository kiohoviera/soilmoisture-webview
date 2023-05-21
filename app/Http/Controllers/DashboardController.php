<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $fetch = \Http::get('https://api.thingspeak.com/channels/2061897/fields/1.json?api_key=2WJYSFAYEKJ6XPRV&results=1');
        $res = $fetch->json();

        $data['channel'] = $res['channel'];
        return view('welcome', $data);
    }

    public function sendData(Request $request)
    {

        try {
            $fileName = time().'.'.$request->file('identified')->extension();

            $filePath = $request->file('identified')->storeAs('uploads', $fileName, 'public');



            $remarks = "";
            $height = (int) $request->post('measurement');
            print($height);

            if ($request->post('stage') === 'Stage_1'){
                if ($height >= 0 && $height < 20){
                    $remarks = "Not Normal";
                } else {
                    $remarks = "Normal";
                }
            }

            if ($request->post('stage') === 'Stage_2'){
                if ($height >= 20 && $height < 40){
                    $remarks = "Not Normal";
                } else {
                    $remarks = "Normal";
                }
            }

            if ($request->post('stage') === 'Stage_3'){
                if ($height >= 40 && $height < 100){
                    $remarks = "Not Normal";
                } else {
                    $remarks = "Normal";
                }
            }

            $file = "data:image/png;base64,".base64_encode(file_get_contents($request->file('identified')));

            $request->merge([
                'upload_file' => $file,
                'remarks' => $remarks
            ]);

            $detection = Detection::create($request->except('identified'));

            return $detection->id;
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function getData()
    {


        $detect = Detection::latest()->first();

        return response()->json($detect);
    }

    public function logs()
    {
        $detection = Detection::latest()->get();

        return view('logs', compact('detection'));
    }
}
