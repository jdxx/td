<?php

class Form_CastleTypeUpdate extends Zend_Form
{

	public function __construct($locations, $spec = null, $options = null)
	{
		$this->setAction('')
		->setAttrib('enctype', 'multipart/form-data')
		->setMethod('post');

		parent::__construct($spec, $options);
	}
	
    public function init()
    {
        parent::init();

        $markeList['null'] = 'Marken wÃ¤hlen';
        
        $defaultDecorator = array('ViewHelper');
        foreach ($this->manufactures as $manufacture) {
			$markeList[$manufacture->name] = $manufacture->name;
        }
                            
        $marke = new Zend_Form_Element_Select('marke');
        $marke->setRequired(true)
              ->addValidator('inArray', true, $markeList)
              ->setAttrib('id', 'select-choice-1')
        	  ->addMultiOptions($markeList)
        	  ->setDecorators($defaultDecorator);
                
        $modellList['null'] = 'Modell wÃ¤hlen';
        foreach ($this->types as $type) {
			$modellList[$type->name] = $type->name;
        }
                          
        $model = new Zend_Form_Element_Select('modell');
        $model->setRequired(true)
              ->addValidator('inArray', true, $modellList)
              ->setAttrib('id', 'select-choice-2')
        	  ->addMultiOptions($modellList)
        	  ->setDecorators($defaultDecorator);        
         
        $locationsList['null'] = 'Probefahrt starten in:';
        
        foreach($this->locations as $location) {
            $locationsList[$location->name] = $location->name;
        };

        $serviceCenter = new Zend_Form_Element_Select('serviceCenter');
        $serviceCenter->setRequired(true)
                      ->addValidator('inArray', true, $locationsList)
                      ->setAttrib('id', 'select-choice-3')
                      ->addMultiOptions($locationsList)
                      ->setDecorators($defaultDecorator);
        
        $dayList['null'] = 'Tag';
        
        for ($i = 1; $i < 32; $i++ ) {
            $dayList[sprintf('%02d',$i)] = $i;
        }

        $day = new Zend_Form_Element_Select('day');
        $day->setRequired(true)
            ->setAttrib('id', 'select-choice-4')
        	->addMultiOptions($dayList)
        	->setDecorators($defaultDecorator);
        
        $dayAlt = new Zend_Form_Element_Select('dayAlt');
        $dayAlt->setAttrib('id', 'select-choice-a')
               ->addMultiOptions($dayList)
               ->setDecorators($defaultDecorator);
        
        $month = date("n", time());
        $year  = date("Y", time());
        
        $monthyearList['null'] = 'Monat/Jahr';
        
        for ($i = 1; $i < 7; $i++ ) {
            $monthyearList[sprintf('%02d',$month) . '.' . $year] = $month . ' / ' . $year;
            $month++;
            if($month > 12) {
                $month = 1;
                $year++;
            }
        }

        $monthyear = new Zend_Form_Element_Select('monthyear');
        $monthyear->setRequired(true)
                  ->setAttrib('id', 'select-choice-51')
                  ->addMultiOptions($monthyearList)
                  ->setDecorators($defaultDecorator);
        
        $monthyearAlt = new Zend_Form_Element_Select('monthyearAlt');
        $monthyearAlt->setAttrib('id', 'select-choice-b')
                    ->addMultiOptions($monthyearList)
                    ->setDecorators($defaultDecorator);
        
        // Uhrzeit nur bis 19:59 erlaubt
        $time = new Zend_Form_Element_Text('time');
        $time->setRequired(true)
             ->addValidator('regex', true, array('/^([01]?\d):([0-5]?\d)$/') )
             ->setAttrib('id', 'textinput')
             ->setDecorators($defaultDecorator);
        
        $timeAlt = new Zend_Form_Element_Text('timeAlt');
        $timeAlt->setAttrib('id', 'textinput')
                ->setDecorators($defaultDecorator);

        $sex = new Zend_Form_Element_Select('sex');
        $sex->setRequired(true)
            ->addValidator('inArray', true, array('Herr' => 'Herr', 'Frau' => 'Frau'))
            ->setMultiOptions(
                array(
                    'null' => 'bitte wÃ¤hlen',
                    'Herr' => 'Herr',
                    'Frau' => 'Frau'
                )
              )
            ->setDecorators($defaultDecorator);
        
        $lastname = new Zend_Form_Element_Text('lastname');
        $lastname->setRequired(true)
                 ->setAttrib('id', 'textinput-1')
                 ->setDecorators($defaultDecorator);
        
        $firstname = new Zend_Form_Element_Text('firstname');
        $firstname->setRequired(true)
                  ->setAttrib('id', 'textinput-2')
                  ->setDecorators($defaultDecorator);

        $validatorEmail = new Zend_Validate_EmailAddress();
        
        $email = new Zend_Form_Element_Text('email');
        $email->addValidator($validatorEmail)
                ->setAttrib('id', 'textinput-3')
                ->setDecorators($defaultDecorator)
                ->setRequired(true);
        
        $telephone = new Zend_Form_Element_Text('telephone');
        $telephone->setRequired(true)
                  ->setAttrib('id', 'textinput-4')
                  ->setDecorators($defaultDecorator);
        
        
        $street = new Zend_Form_Element_Text('street');
        $street->setDecorators($defaultDecorator);

        $nr = new Zend_Form_Element_Text('nr');
        $nr->setDecorators($defaultDecorator);             

        $zip = new Zend_Form_Element_Text('zip');
        $zip->setDecorators($defaultDecorator);

        $city = new Zend_Form_Element_Text('city');
        $city->setDecorators($defaultDecorator);

        $responseCanal = new Zend_Form_Element_Radio('responseCanal');
        $responseCanal->addMultiOptions(
                            array(
                                'telephone' => 'Telefon',
                                'email' => 'E-Mail',
                                'post' => 'Post',
                            )
                        )
                        ->setSeparator('')
                        ->setDecorators($defaultDecorator);

        $validatorTerms = new Zend_Validate_Identical('1');

        $terms = new Zend_Form_Element_Checkbox('terms');
        $terms->setLabel('Rechtlicher Hinweis')
                ->setDecorators(
                    array(
                        'ViewHelper'
                    )
                )
                ->setRequired(true)
                ->addValidator($validatorTerms);
        
        $this->addElements(
            array(
            	$marke,
            	$model,
                $serviceCenter,
                $day,
                $monthyear,
            	$time,
                $dayAlt,
                $monthyearAlt,
                $timeAlt,
                $sex,
                $firstname,
                $lastname,
                $street,
                $nr,
                $zip,
                $city,
                $telephone,
                $email,
            	$time,
            	$responseCanal,
            	$terms
            )
        );
        
        if(isset($this->manufactureDefault))
        {
            $this->setDefaults(array('marke'  => $this->manufactureDefault));
        }
        
        if(isset($this->typeDefault))
        {
            $this->setDefaults(array('modell' => $this->typeDefault));
        }
        
        if(isset($this->manufactureDefault) || isset($this->typeDefault))
        {
            $this->setDefaults(array('responseCanal' => 'email'));
        }
        
        return $this;
    }
    
    public function isValid($postData)
    {
    	// parent::isValid muss vor allen weiteren Prüfungen kommen. Resettet ansonsten die Errors.
    	$parentValid = parent::isValid($postData);
    
    	$day = $postData['day'];
    	$monthyear = $postData['monthyear'];
    
    	$validator = new Zend_Validate_Date(array('locale' => 'de'));
    	$isValid = $validator->isValid($day . '.' . $monthyear);
    
    	if (!$isValid) {
    		$this->day->addError('Zu viele Tage für den Monat.');
    	}
    
    	if(time() > strtotime($day . '.' . $monthyear)) {
    		$this->day->addError('Tag liegt nicht in der Zukunft.');
    	}
    
    	return $parentValid && $isValid;
    }
}