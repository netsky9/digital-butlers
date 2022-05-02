<?php

namespace App\Http\Controllers\Books\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Books\Admin\BookCreateRequest;
use App\Http\Requests\Books\Admin\BookUpdateRequest;
use App\Models\Book;
use App\Repositories\Authors\AuthorsRepository;
use App\Repositories\Books\BooksRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
	private $bookRepository;
	private $authorRepository;

	public function __construct(){
		$this->bookRepository = new BooksRepository();
		$this->authorRepository = new AuthorsRepository();
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$books = $this->bookRepository->GetAllWithPagination();

		return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$authors = $this->authorRepository->GetForSelect();

		return view('admin.books.create', compact('authors'));
    }

	/**
	 * @param BookCreateRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(BookCreateRequest $request)
    {
		$data = $request->input();

		$result = (new Book())->create($data);

		if($result){
			return redirect()
				->route('admin.books.edit', [$result->id])
				->with(['success'=>'The book was added!']);
		}else{
			return back()
				->withErrors(['msg'=>'The book was not added! Please try again!'])
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
		$book = $this->bookRepository->GetEdit($id);
		$authors = $this->authorRepository->GetForSelect();

		return view('admin.books.edit', compact('book', 'authors'));
    }

	/**
	 * @param BookUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(BookUpdateRequest $request, $id)
    {
		$request->validate([
			'slug' => 'sometimes|max:200|unique:books,slug,'.$id,
		]);

		$data = $request->all();

		$item = $this->bookRepository->GetEdit($id);
		if(empty($item)){
			return back()
				->withErrors(['msg'=>"The book is not found!"]);
		}

		$result = $item
			->fill($data)
			->save();

		if($result){
			return back()
				->with(['success'=>"The book was changed successful!"]);
		}else{
			return back()
				->withErrors(['msg'=>"The book wasn't changed! Please try again!"]);
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
		$item = $this->bookRepository->GetEdit($id);
		if(empty($item)){
			return back()
				->withErrors(['msg'=>"The book is not found!"]);
		}

		$result = Book::destroy($id);

		if($result){
			return redirect()
				->route('admin.books.index')
				->with(['success'=>"The book was deleted successful!"]);
		}else{
			return back()
				->withErrors(['msg'=>"The book was not deleted!"]);
		}
    }
}
