<?php 

/**
* app/Controllers/Admin/PageController.php
*
* Resourceful controller for Page models.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/19peaches/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Controllers\Admin;

use Empress\Models\Page;
use Empress\Base\Controller;
use Empress\Requests\CreatePageRequest;
use Empress\Requests\UpdatePageRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PageController extends Controller
{
    /**
     * Display a listing of the Page.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Pages');

        $pages = Page::paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created Page in storage.
     *
     * @param  CreatePageRequest $request
     * @return Response
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();

        Page::create($input);

        flash('Page saved successfully.', 'success');

        return redirect(route('admin.pages.index'));
    }

    /**
     * Show the specified Page.
     *
     * @param  eloquent \Empress\Models\Page
     * @return Response
     */
    public function show(Page $page)
    {
        bcs([
            'Pages' => 'admin.pages.index',
            $page->title => null
        ]);

        return view('admin.pages.show')->with(compact('page'));
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param  eloquent \Empress\Models\Page
     * @return Response
     */
    public function edit(Page $page)
    {
        bcs([
            'Pages' => 'admin.pages.index',
            $page->title => null
        ]);
        
        return view('admin.pages.edit')->with(compact('page'));
    }

    /**
     * Update the specified Page in storage.
     *
     * @param eloquent \Empress\Models\Page
     * @param UpdatePageRequest $request
     *
     * @return Response
     */
    public function update(Page $page, UpdatePageRequest $request)
    {
        $page->fill($request->all());

        $page->save();

        flash('Page updated successfully.', 'success');

        return redirect(route('admin.pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @param  eloquent \Empress\Models\Page
     * @return Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        flash('Page deleted successfully.', 'success');

        return redirect(route('admin.pages.index'));
    }

    /**
     * Check if a record exists.
     *
     * @param  int $id
     * @return Eloquent
     */
    private function exist($id)
    {
        try {
            $page = Page::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            flash('Page not found', 'danger');

            return redirect(route('admin.pages.index'));
        }

        return $page;
    }
}
