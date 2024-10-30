<?php return [
    'plugin' => [
        'name' => 'Formulários',
	'description' => 'Crie formulários personalizados que podem ser adicionados às suas páginas através de componentes.',
    ],
    'settings' => [
        'plugin' => [
            'category' => 'Formulários',
            'label' => 'Configurações',
	    'description' => 'Gerencie as configurações de cache, ações de eventos, antispam, privacidade, envio de emails e estilos dos formulários.',
        ],
    ],
    'tabs' => [
        'fields' => 'Campos',
        'privacy' => 'Privacidade',
        'antispam' => 'Antispam',
        'styling' => 'Estilos',
        'emailing' => 'Envio de Emails',
        'caching' => 'Cache',
        'action' => 'Ações',
        'validation' => 'Validação',
        'options' => 'Opções',
        'html_attributes' => 'Atributos HTML',
    ],
    'sections' => [
        'buttons' => [
            'label' => 'Button Styling',
        ],
        'recaptcha' => [
            'label' => 'Google ReCAPTCHA',
        ],
        'ip_restriction' => [
            'label' => 'IP Restrictions',
        ],
        'auto_reply' => [
            'label' => 'Automatic Replies',
        ],
        'styling' => [
            'label' => 'Form Styling',
            'comment' => 'All of the below can be overridden, per form and/or field',
        ],
        'validation' => [
            'label' => 'Validation Styling',
            'comment' => 'All of the below can be overridden, per form'
        ],
        'notifications' => [
            'label' => 'Automatic Notifications',
        ],
    ],
    'forms' => [
        'field' => [
            'title' => 'Título',
            'code' => 'Código',
        ],
    ],
    'mail' => [
        'templates' => [
            'autoreply' => 'ABWebDevelopers Forms - Auto-reply Message',
            'notification' => 'ABWebDevelopers Forms - Notification Message',
        ]
    ],
    'customForm' => [
        'formCode' => [
            'title' => 'Usar Formulário',
            'description' => 'Defina o formulário para uso por este código',
        ],
        'validation' => [
            'recaptchaFailed' => 'You must complete the reCAPTCHA verification',
            'noData' => 'No data supplied',
            'invalidNotificationRecipients' => 'Notification recipients list contains invalid email address',
            'noAutoReplyEmailField' => 'Auto-reply Email field could not be resolved',
            'noAutoReplyNameField' => 'Auto-reply Name field could not be resolved',
        ]
    ],
    'permissions' => [
        'forms' => 'Manage forms',
        'submissions' => 'Manage submissions',
    ],
    'models' => [
        'all' => [
            'created_at' => [
                'label' => 'Criado em',
            ],
            'updated_at' => [
                'label' => 'Atualizado em',
            ],
            'sort_order' => [
                'label' => 'Ordem',
                'up' => 'Acima',
                'down' => 'Abaixo',
                'successful_up' => 'Campo movido acima com sucesso',
                'successful_down' => 'Campo movido abaixo com sucesso',
            ],
            'override' => [
                'label' => 'Sobrescrever valor do sistema',
                'comment' => 'Ativo: Sobrescrever | Inativo: Herdar'
            ],
        ],
	'settings' => [
            'enable_caching' => [
                'label' => 'Enable Caching',
                'comment' => 'Choose whether or not cache the rendered form'
            ],
            'cache_lifetime' => [
                'label' => 'Cache Lifetime',
                'comment' => 'Amount of minutes to cache the rendered form for'
            ],
            'form_class' => [
                'label' => 'Form Class',
                'comment' => 'CSS Class for the Form',
            ],
            'field_class' => [
                'label' => 'Field Class',
                'comment' => 'CSS Class for the Field',
            ],
            'row_class' => [
                'label' => 'Row Class',
                'comment' => 'CSS Class for the Row',
            ],
            'group_class' => [
                'label' => 'Group Class',
                'comment' => 'CSS Class for the Group',
            ],
            'label_class' => [
                'label' => 'Label Class',
                'comment' => 'CSS Class for the Label',
            ],
            'submit_class' => [
                'label' => 'Submit Class',
                'comment' => 'CSS Class of the submit button',
            ],
            'submit_text' => [
                'label' => 'Submit Text',
                'comment' => 'Text to display in the submit button',
            ],
            'enable_cancel' => [
                'label' => 'Enable Cancel',
                'comment' => 'Will go back to referer if clicked',
            ],
            'cancel_class' => [
                'label' => 'Cancel Class',
                'comment' => 'CSS Class of the cancel button (if enabled)',
            ],
            'cancel_text' => [
                'label' => 'Cancel Text',
                'comment' => 'Text to display in the cancel button (if enabled)',
            ],
            'saves_data' => [
                'label' => 'Save Data?',
                'comment' => 'Choose whether or not to save submission data to the database (recommended)',
            ],
            'store_ips' => [
                'label' => 'Store IP Addresses?',
                'comment' => 'Choose whether or not to store IP addresses along with submissions',
            ],
            'enable_recaptcha' => [
                'label' => 'Enable Recpatcha',
                'comment' => 'Should this Form require recpatcha?',
            ],
            'recaptcha_public_key' => [
                'label' => 'ReCAPTCHA Public Key',
                'comment' => 'Google ReCAPTCHA (Public) API Key',
            ],
            'recaptcha_secret_key' => [
                'label' => 'ReCAPTCHA Secret Key',
                'comment' => 'Google ReCAPTCHA (Private) API Key',
            ],
            'enable_ip_restriction' => [
                'label' => 'Enable IP Restriction',
                'comment' => 'Choose to enable an IP restriction for this form',
            ],
            'max_requests_per_day' => [
                'label' => 'Max Requests Per Day',
                'comment' => 'Maximum amount of daily submissions',
            ],
            'throttle_message' => [
                'label' => 'Throttle Message',
                'comment' => 'Choose what to display to a user who has exceeded their daily submissions',
            ],
            'queue_emails' => [
                'label' => 'Queue Emails?',
                'comment' => 'Choose whether or not to add emails to the queue rather than sending synchronously (recommened)'
            ],
            'send_notifications' => [
                'label' => 'Send Notifications',
                'comment' => 'Decide if you would like to receive notifications for each submission. Can be overridden, per form',
            ],
            'notification_template' => [
                'label' => 'Notification Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'notification_recipients' => [
                'label' => 'Notification Recipients',
                'comment' => 'Comma separated email addresses',
            ],
            'auto_reply' => [
                'label' => 'Auto Reply?',
                'comment' => 'Send automated reply to user who submits this form. Fields must be configured, per form',
            ],
            'auto_reply_email_field_id' => [
                'label' => 'Auto Reply Email Field',
                'comment' => 'Select the field to use as the email address to auto reply to',
            ],
            'auto_reply_name_field_id' => [
                'label' => 'Auto Reply Name Field',
                'comment' => 'Select the field to use as the name when auto replying',
            ],
            'notif_replyto' => [
                'label' => 'Add Reply-To Header?',
                'comment' => 'Set the reply-to header in notification emails to point to the user\'s email',
            ],
            'notif_replyto_email_field_id' => [
                'label' => 'Notification Reply-To Email Field',
                'comment' => 'Select the field to use as the email address to auto reply to',
            ],
            'notif_replyto_name_field_id' => [
                'label' => 'Notification Reply-To Name Field',
                'comment' => 'Select the field to use as the name when auto replying',
            ],
            'auto_reply_template' => [
                'label' => 'Auto Reply Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'field_error_class' => [
                'label' => 'Field Error Class',
                'comment' => 'CSS Class to apply to a field on error',
            ],
            'field_success_class' => [
                'label' => 'Field Success Class',
                'comment' => 'CSS Class to apply to a field on success',
            ],
            'label_error_class' => [
                'label' => 'Label Error Class',
                'comment' => 'CSS Class to apply to a label on error',
            ],
            'label_success_class' => [
                'label' => 'Label Success Class',
                'comment' => 'CSS Class to apply to a label on success',
            ],
            'form_error_class' => [
                'label' => 'Form Error Class',
                'comment' => 'CSS Class to apply to a form on error',
            ],
            'form_success_class' => [
                'label' => 'Form Success Class',
                'comment' => 'CSS Class to apply to a form on success',
            ],
            'on_success' => [
                'label' => 'On Success Action',
                'comment' => 'Choose what to do when the form is successfully submitted',
                'options' => [
                    'hide' => 'Hide form',
                    'clear' => 'Clear/reset the form',
                    'redirect' => 'Redirect to URL'
                ],
            ],
            'on_success_message' => [
                'label' => 'On Success Message',
                'comment' => 'Choose what to flash when the form is successfully submitted',
                'placeholder' => 'Message successfully sent'
            ],
            'on_success_redirect' => [
                'label' => 'On Success Redirect',
                'comment' => 'Choose what URL to redirect to when the form is successfully submitted',
                'placeholder' => '/thank-you'
            ]
        ],
        'form' => [
            'title' => [
                'label' => 'Título',
                'comment' => 'O título do formulário (usado em emails, etc)'
            ],
            'code' => [
                'label' => 'Código',
                'comment' => 'O código do formulário (somente snake_case)'
            ],
            'description' => [
                'label' => 'Descrição',
                'comment' => 'Uma pequena descrição a respeito do propósito dos formulários'
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Nome',
                'comment' => 'Used as the label for this field',
            ],
            'code' => [
                'label' => 'Código',
                'comment' => 'Used to identify this field. Must be in snake_case',
            ],
            'type' => [
                'label' => 'Tipo',
                'comment' => 'Choose the type of field',
            ],
            'description' => [
                'label' => 'Descrição',
                'comment' => 'Optional. A description of this field',
            ],
            'placeholder' => [
                'label' => 'Placeholder',
                'comment' => 'Enter the placeholder attribute value here. For select elements, it acts as an option.',
            ],
            'default' => [
                'label' => 'Valor padrão',
                'comment' => 'The default value. For select/radio/checkboxes use the code of the option.',
            ],
            'show_description' => [
                'label' => 'Mostrar Descrição',
                'comment' => 'Show the description in the form under the field\'s label?',
            ],
            'required' => [
                'label' => 'Requerido',
                'comment' => 'Synonymous for adding the "required" validation rule',
            ],
            'validation_rules' => [
                'label' => 'Validation Rules',
                'comment' => 'See documentation for more info: https://octobercms.com/docs/services/validation#available-validation-rules',
            ],
            'validation_message' => [
                'label' => 'Validation Message',
                'comment' => 'What message should be shown on failure',
            ],
            'options' => [
                'label' => 'Options',
                'comment' => 'Add your select, radio or checkbox options here',
                'prompt' => 'Add an option',
                'fields' => [
                    'option_label' => [
                        'label' => 'Option Label',
                        'comment' => 'Used as the label for this option'
                    ],
                    'option_code' => [
                        'label' => 'Option Code',
                        'comment' => 'Used to identify this field. Must be in snake_case'
                    ],
                    'is_optgroup' => [
                        'label' => 'Add sub options?',
                        'comment' => 'Adding sub options will turn this option into a group of options (specifically an `<optgroup>`)'
                    ],
                    'options' => [
                        'label' => 'Sub Options',
                        'comment' => 'Add sub options to this option group',
                        'fields' => [
                            'option_label' => [
                                'label' => 'Option Label',
                                'comment' => 'Used as the label for this option'
                            ],
                            'option_code' => [
                                'label' => 'Option Code',
                                'comment' => 'Used to identify this field. Must be in snake_case'
                            ]
                        ]
                    ],
                ]
            ],
            'html_attributes' => [
                'label' => 'HTML Attributes',
                'comment' => 'Add/override custom attributes for the field (input, select, textarea).',
                'prompt' => 'Add an attribute',
                'fields' => [
                    'attribute_name' => [
                        'label' => 'Attribute Name',
                        'comment' => 'The name of the attribute, e.g. data-id, title, class, etc',
                    ],
                    'attribute_value' => [
                        'label' => 'Attribute Value',
                        'comment' => 'The value of the attribute. For boolean attributes, leave blank.',
                    ],
                ]
            ],
            'show_in_email_autoreply' => [
                'label' => 'Show in autoreply emails',
                'comment' => 'Should this field\'s value show in the autoreply emails',
            ],
            'show_in_email_notification' => [
                'label' => 'Show in notification emails',
                'comment' => 'Should this field\'s value show in notification emails',
            ],
        ]
    ]
];
