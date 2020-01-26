<?php

namespace Modules\ValidationShippingCompany\Services;


class ValidationShippingCompanyService {
	
	public function fields(){
		return config('validationshippingcompany.fields');
	}

	public function sample(){
		return config('validationshippingcompany.sample');
	}

}
