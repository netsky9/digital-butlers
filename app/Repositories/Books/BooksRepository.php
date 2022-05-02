<?php

namespace App\Repositories\Books;

use App\Models\Book as Model;
use App\Repositories\CoreRepository;

class BooksRepository extends CoreRepository {

	/**
	 * Send model to make model
	 * @return mixed|string
	 */
	protected function getModel()
	{
		return Model::class;
	}

	/**
	 * Get to edit
	 * @param $id
	 * @return mixed
	 */
	public function GetEdit($id){
		return $this->instanceModel()->find($id);
	}

	/**
	 * Get items with paginate
	 * @param int $count
	 * @return mixed
	 */
	public function GetAllWithPagination($count = 8){
		return $this->instanceModel()->paginate($count);
	}
}