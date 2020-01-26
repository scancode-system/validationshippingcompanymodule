<?php 

namespace Modules\ValidationShippingCompany\Validator;

use Modules\Portal\Imports\ValidatorImport;
use Modules\Portal\Rules\NotInCustomRule;

class ShippingCompaniesValidator extends ValidatorImport
{	

	protected $required = ['id', 'name'];

	public function rule($data){
		return  [
			'id' => ['integer', 'min:1', new NotInCustomRule($this->chunkColumn('id', 0, $this->row_index-2), 'Duplicado')],
			'name' => ['filled', 'string', 'max:255', new NotInCustomRule($this->chunkColumn('name', 0, $this->row_index-2), 'Duplicado')]
		];
	}

	public function messages(){
		return  [];
	}

}
