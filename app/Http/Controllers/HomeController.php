<?php

namespace App\Http\Controllers;

use App\Repositories\Authors\AuthorsRepository;
use App\Repositories\Books\BooksRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $bookRepository;
	private $authorRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->bookRepository = new BooksRepository();
		$this->authorRepository = new AuthorsRepository();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$books = $this->bookRepository->GetAllWithPagination();
		$authors = $this->authorRepository->GetAllWithPagination();

        return view('home', compact('books', 'authors'));
    }
}
