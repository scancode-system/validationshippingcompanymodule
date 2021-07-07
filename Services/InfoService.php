<?php

namespace Modules\ValidationShippingCompany\Services; 


use Modules\Portal\Rules\NotInCustomRule;
use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{

	public function rule($data, $index, $columns){
		return  [
			'id' => ['nullable', 'integer', 'min:1', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'id', 0, $index-2), 'Duplicado')],
			'name' => ['filled', 'string', 'max:191', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'name', 0, $index-2), 'Duplicado')]
		];
	}

	public function modifiers($data)
	{
		return [];
	}

	public function columnsFormat($header)
	{
		return [];
	}

}
