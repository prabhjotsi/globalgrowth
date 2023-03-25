<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\QuestionSection;
use Illuminate\Http\Request;

class QuestionSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $questionsection = QuestionSection::findOrFail($id);

        return view('admin.question-section.edit', compact('questionsection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required|max:255',
          'sub_title' => 'required|max:255',
    			'description' => 'required|max:60000',
          'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $questionsection = QuestionSection::findOrFail($id);
        $questionsection->update($requestData);

        return redirect()->back()->with('flash_message', 'Question Section updated!');
    }

}
