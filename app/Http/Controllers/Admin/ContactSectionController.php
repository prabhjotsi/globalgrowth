<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ContactSection;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
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
        $contactsection = ContactSection::findOrFail($id);

        return view('admin.contact-section.edit', compact('contactsection'));
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

        $contactsection = ContactSection::findOrFail($id);
        $contactsection->update($requestData);

        return redirect('admin/contact-section')->with('flash_message', 'Contact Section updated!');
    }


    public function index(Request $request)
    {
      $keyword = $request->get('search');
      $perPage = 10;

      if (!empty($keyword)) {
          $contacts = ContactUs::where('name', 'LIKE', "%$keyword%")
              ->orWhere('email', 'LIKE', "%$keyword%")
              ->orWhere('subject', 'LIKE', "%$keyword%")
              ->orWhere('message', 'LIKE', "%$keyword%")
              ->latest()->paginate($perPage);
      } else {
          $contacts = ContactUs::latest()->paginate($perPage);
      }

      return view('admin.contact-section.index', compact('contacts'));
    }
    /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function store(Request $request)
  {
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|max:255',
        'message' => 'required|max:60000',
      ]);
      $requestData = $request->all();

      ContactUs::create($requestData);

      return redirect()->back();
  }
}
