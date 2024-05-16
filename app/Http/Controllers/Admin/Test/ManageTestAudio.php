<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageTest\{
    ManageTest,
    ManageTestSection,
    TestAudio,
};
use App\Models\Module;
use File;
class ManageTestAudio extends Controller
{
    public function addAudio($test_id, $section_id)
    {
        return view('admin.pages.test.audio.add-audio', compact('test_id', 'section_id'));
    }
    public function manageAudio()
    {
        $data = TestAudio::with('manageTest', 'manageTestSection')->get();
        return view('admin.pages.test.audio.manage-audio', compact('data'));
    }
    public function storeAudio(Request $request)
    {
        $this->validate($request, [
            'listening_track' => 'required',
        ]);

        $data = $request->all();

        $file = $request->file('listening_track');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move('admin/files/uploads/test-audio/', $fileName);

        
        $test_id = $data['test_id'];
        $section_id = $data['section_id'];
       
        
        if($data['audio_title']){
            $audio_title =$data['audio_title'];
        }else{
            $audio_title = NULL;
        }

        TestAudio::create([
            'test_id'       => $test_id,
            'section_id'    => $section_id,
            'audio'       => $fileName,
            'title'         => $audio_title,
        ]);
        return redirect()->route('admin.manage.section.test')->with('success', 'Track Uploaded Successfully');
    }
    public function editAudio($id)
    {
        $find_data = TestAudio::find($id);
        $allTest = ManageTest::all();
        $allSection = ManageTestSection::all();
        return view('admin.pages.test.audio.edit-audio', compact('find_data', 'allTest', 'allSection'));
    }
    public function updateAudio(Request $request, $id)
    {
        $data = $request->all();
       
        $test_id = $data['test_id'];
        $section_id = $data['section_id'];
       
        
        if($data['audio_title']){
            $audio_title =$data['audio_title'];
        }else{
            $audio_title = NULL;
        }

        $find_id = TestAudio::find($id);
        if($request->listening_title){
            $listening_title = $request->listening_title;
        }else{
            $listening_title = NULL;
        }
        $file = $request->file('listening_track');
        if($file){
            if (File::exists('admin/files/uploads/test-audio/'.$find_id->listening_track)) {
                File::delete('admin/files/uploads/test-audio/'.$find_id->listening_track);
            }
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('admin/files/uploads/test-audio/', $fileName);
        }
        
        TestAudio::updateOrCreate(
        [
                'id'=>$id,
        ],
        [
            'test_id'       => $test_id,
            'section_id'    => $section_id,
            'audio'       => $fileName,
            'title'         => $audio_title,
        ]);
        return redirect()->route('admin.manage.passage.test')->with('success', 'Track Updated Successfully');
    }
    public function deleteAudio($id)
    {
        $find_id = TestAudio::find($id);
        if (File::exists('admin/files/uploads/test-audio/'.$find_id->listening_track)) {
            File::delete('admin/files/uploads/test-audio/'.$find_id->listening_track);
        }
        $data->delete();
        return redirect()->route('admin.manage.passage.test')->with('success', 'Track deleted Successfully');
    }
}
