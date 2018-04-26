<?php

function pending_user_notifications_settings($form, &$form_state)
{
	$form['pun_show_empty_block'] = array
	(
		'#type' => 'checkbox',
		'#title' => t('Show block even when no users are pending'),
		'#default_value' => variable_get('pun_show_empty_block', 0),
	);

	return system_settings_form($form);
}

function pending_user_notification_approve_user($form, &$form_state, $account)
{
	if($account->status)
	{
		$form['user_already_approved'] = array
		(
			'#markup' => t('This user has already been approved'),
		);
	}
	else
	{
		$form['#account'] = $account;
		$form['header'] = array
		(
			'#prefix' => '<p>',
			'#suffix' => '</p>',
			'#markup' => t("Are you sure you want to active %username's acount?", array('%username' => $account->name)),
		);

		$form['actions'] = array
		(
			'#type' => 'actions',
		);

		$form['actions']['activate'] = array
		(
			'#type' => 'submit',
			'#value' => t('Activate account'),
		);

		$form['actions']['cancel'] = array
		(
			'#type' => 'submit',
			'#value' => t('Cancel'),
		);
	}

	return $form;
}

function pending_user_notification_approve_user_submit($form, &$form_state)
{
	if($form_state['values']['op'] == $form_state['values']['activate'])
	{
		$account = $form['#account'];
		$account->status = 1;
		if(user_save($account))
		{
			drupal_set_message(t("%username's account has been activated", array('%username' => $account->name)));
		}
		else
		{
			drupal_set_message(t('Sorry, an unknown error occurred'));
		}
	}
}
