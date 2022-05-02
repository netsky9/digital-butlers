<?php

namespace App\Http\Controllers\Authors\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authors\Admin\AuthorCreateRequest;
use App\Http\Requests\Authors\Admin\AuthorUpdateRequest;
use App\Models\Author;
use App\Repositories\Authors\AuthorsRepository;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
	private $authorRepository;

	public function __construct(){
		$this->authorRepository = new AuthorsRepository();
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$authors = $this->authorRepository->GetAllWithPagination();

        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.authors.create');
    }

	/**
	 * @param AuthorCreateRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(AuthorCreateRequest $request)
    {
		$data = $request->input();

		$result = (new Author())->create($data);

		if($result){
			return redirect()
				->route('admin.authors.edit', [$result->id])
				->with(['success'=>'The author was added!']);
		}else{
			return back()
				->withErrors(['msg'=>'The author was not added! Please try again!'])
				->withInput();
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$author = $this->authorRepository->GetEdit($id);

		return view('admin.authors.edit', compact('author'));
    }

	/**
	 * @param AuthorUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(AuthorUpdateRequest $request, $id)
    {
		$request->validate([
			'slug' => 'sometimes|max:200|unique:authors,slug,'.$id,
		]);

		$data = $request->all();

		$item = $this->authorRepository->GetEdit($id);
		if(empty($item)){
			return back()
				->withErrors(['msg'=>"The author is not found!"]);
		}

		$result = $item
			->fill($data)
			->save();

		if($result){
			return back()
				->with(['success'=>"The author was changed successful!"]);
		}else{
			return back()
				->withErrors(['msg'=>"The author wasn't changed! Please try again!"]);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$item = $this->authorRepository->GetEdit($id);
		if(empty($item)){
			return back()
				->withErrors(['msg'=>"The author is not found!"]);
		}

		$result = Author::destroy($id);

		if($result){
			return redirect()
				->route('admin.authors.index')
				->with(['success'=>"The author was deleted successful!"]);
		}else{
			return back()
				->withErrors(['msg'=>"The author was not deleted!"]);
		}
    }
}
