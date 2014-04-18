<?php

class Application_Form_CastleUpdate extends Zend_Form
{
	public function __construct($spec = null, $options = null)
	{
		$this->setAction('')
		->setAttrib('enctype', 'multipart/form-data')
		->setMethod('post');
	
		parent::__construct($spec, $options);
	}
	
	public function init()
	{
		parent::init();
	
		$defaultDecorator = array( 'ViewHelper' );
	
		$name = new Zend_Form_Element_Select('sex');
		$sex->setRequired(true)
		->setMultiOptions(
				array(
						'man' => 'Herr',
						'woman' => 'Frau'
				)
		)
		->setLabel('Anrede:')
		->setDecorators($defaultDecorator);
	
		$firstname = new Zend_Form_Element_Text('firstname');
		$firstname->setRequired(true)
		->setLabel('Vorname*:')
		->setDecorators($defaultDecorator);
	
		$lastname = new Zend_Form_Element_Text('lastname');
		$lastname->setRequired(true)
		->setLabel('Nachname*:')
		->setDecorators($defaultDecorator);
	
		$street = new Zend_Form_Element_Text('street');
		$street
		//   ->setRequired(true)
		->setLabel('StraÌÙe:')
		->setDecorators(
				array(
						'ViewHelper'
				)
		);
		;
	
		$nr = new Zend_Form_Element_Text('nr');
		$nr
		// ->setRequired(true)
		->setLabel('Hausnummer:')
		->setDecorators(
				array(
						'ViewHelper'
				)
		);
	
		$zip = new Zend_Form_Element_Text('zip');
		$zip
		//  ->setRequired(true)
		->setLabel('PLZ:')
		->setDecorators(
				array(
						'ViewHelper'
				)
		);
	
		$city = new Zend_Form_Element_Text('city');
		$city
		//->setRequired(true)
		->setLabel('Ort:')
		->setDecorators(
				array(
						'ViewHelper'
				)
		);
	
		$telephone = new Zend_Form_Element_Text('telephone');
		$telephone->setRequired(true)
		->setLabel('Telefon*:')
		->setDecorators($defaultDecorator);
	
		$mobile = new Zend_Form_Element_Text('mobile');
		$mobile->setLabel('Mobil:')
		->setDecorators($defaultDecorator);
	
		$validatorEmail = new Zend_Validate_EmailAddress();
	
		$email = new Zend_Form_Element_Text('email');
		$email->setLabel('E-Mail*:')
		->addValidator($validatorEmail)
		->setDecorators($defaultDecorator)
		->setRequired(true);
	
		$kfzLabel = new Zend_Form_Element_Text('kfzLabel');
		$kfzLabel->setLabel('Kennzeichen*:')
		->setDecorators($defaultDecorator)
		->setRequired(true);
	
	
		$fin = new Zend_Form_Element_Text('fin');
		$fin->setLabel('FIN*:')
		->setDecorators($defaultDecorator)
		->setRequired(true);
	
		$date = new ZendX_JQuery_Form_Element_DatePicker('date');
		$date->setLabel('<span>Datum*:</span><br/><span>(frŸhster wŠhlbarer Termin: heute +3 Tage)</span>')
		->setAttrib('id', 'desiredDate')
		->setAttrib('autocomplete', 'off')
		->setAttrib('readonly', 'readonly')
		->setErrorMessages(array(''))
		->setRequired(true)
		->addDecorator('Label', array('tag' => 'dt', 'class' => 'dateLabel'))
		->getDecorator('label')->setOption('escape', false);
	
		$time = new Zend_Form_Element_Select('time');
		$time->addMultiOptions(array(
				'' => '',
				'morgens' => 'morgens',
				'mittags' => 'mittags',
				'abends' => 'abends'))
				->setRequired(true)
				->setLabel('Uhrzeit*:')
				->setDecorators($defaultDecorator);
	
		$responseCanal = new Zend_Form_Element_MultiCheckbox('responseCanal');
		$responseCanal->setLabel('Was ist Ihr bevorzugter Kommunikationskanal?')
		->addMultiOptions(
				array(
						'email' => 'E-Mail',
						'post' => 'Post',
						'telephone' => 'Telefon',
				)
		)
		->setSeparator('</li><li>')
		->setDecorators(
				array(
						'ViewHelper',
						array(
								'HtmlTag',
								array(
										'tag' => 'li'
								)
						),
						array(
								array(
										'data' => 'HtmlTag'
								),
								array(
										'tag' => 'ul',
										'class' => 'channel'
								)
						),
						array(
								'Label',
								array(
										'placement' => 'PREPEND',
										'tag' => 'h3'
								)
						),
				)
		);
	
		$validatorTerms = new Zend_Validate_Identical('1');
	
		$terms = new Zend_Form_Element_Checkbox('terms');
		$terms->setLabel('Rechtlicher Hinweis')
		->setDecorators(
				array(
						'ViewHelper'
				))
				->setRequired(true)
				->addValidator($validatorTerms);
	
		$this->addElements(
				array(
						$sex,
						$firstname,
						$lastname,
						$street,
						$nr,
						$zip,
						$city,
						$telephone,
						$mobile,
						$region,
						$email,
						$kfzLabel,
						$fin,
						$date,
						$time,
						$responseCanal,
						$terms
				)
		);
	
		return $this;
	}
}

