<?php

namespace App\Repositories\Authors;

use App\Models\Author as Model;
use App\Repositories\CoreRepository;

class AuthorsRepository extends CoreRepository {

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
	public function GetAllWithPagination($count = 20){
		return $this->instanceModel()->withCount('books')->paginate($count);
	}

	/**
	 * Get category for select
	 * @return mixed
	 */
	public function GetForSelect(){
		$columns = ['id', 'name', 'last_name'];

		$result = $this
			->instanceModel()
			->select($columns)
			->toBase()
			->get();

		return $result;
	}

}