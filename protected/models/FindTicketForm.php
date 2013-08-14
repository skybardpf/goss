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
//        var_dump($this->ticket_number);
//        var_dump($this->mobile);
//        die;
		$ticket = Ticket::model()->find(
            'number=:number AND consumers.mobile=:mobile',
            array(
                ':number' => $this->ticket_number,
                ':mobile' => $this->mobile,
            )
        );
        var_dump($ticket);die;
        return $ticket;
	}
}
