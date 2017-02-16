<?php 

namespace Empress\Controllers;

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
        $pages = Page::paginate(10);

        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created Page in storage.
     *
     * @param CreatePageRequest $request
     *
     * @return Response
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();

        Page::create($input);

        flash('Page saved successfully.', 'success');

        return redirect(route('pages.index'));
    }

    /**
     * Show the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $page = $this->exist($id);

        return view('pages.show')->with(compact('page'));
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $page = $this->exist($id);

        return view('pages.edit')->with(compact('page'));
    }

    /**
     * Update the specified Page in storage.
     *
     * @param int $id
     * @param UpdatePageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePageRequest $request)
    {
        $page = $this->exist($id);

        $page->fill($request->all());

        $page->save();

        flash('Page updated successfully.', 'success');

        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $page = $this->exist($id);

        $page->delete();

        flash('Page deleted successfully.', 'success');

        return redirect(route('pages.index'));
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

            return redirect(route('pages.index'));
        }

        return $page;
    }
}
