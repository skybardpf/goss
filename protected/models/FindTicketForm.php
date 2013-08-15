<?php

/**
 * FindTicketForm class.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class FindTicketForm extends CFormModel
{
	public $ticket_number;
	public $mobile;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('ticket_number, mobile', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'ticket_number' => 'Номер тикета',
			'mobile' => 'Номер телефона',
		);
	}

    /**
	 * @return Ticket
	 */
	public function findTicket()
	{
        $crt = new CDbCriteria;
        $crt->with = array(
            'consumer' => array(
                'condition' => 'consumer.mobile = :mobile',
                'params' => array(
                    ':mobile' => $this->mobile,
                )
            ),
        );
        $crt->condition = 'number = :number';
        $crt->params = array(
            ':number' => $this->ticket_number,
        );
		$ticket = Ticket::model()->find($crt);
        return $ticket;
	}
}
