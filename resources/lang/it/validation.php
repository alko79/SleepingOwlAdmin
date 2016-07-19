<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'                => ' :attribute deve essere accettato.',
    'active_url'              => ':attribute URL non valida.',
    'after'                   => ':attribute deve essere posteriore a :date.',
    'alpha'                   => ':attribute dovrebbe contenere solo lettere.',
    'alpha_dash'              => ':attribute dovrebbe contenere, numeri, e segni.',
    'alpha_num'               => ':attribute dovrebbe contenere solo lettere e numeri.',
    'array'                   => ':attribute deve essere un array.',
    'before'                  => ':attribute deve essere antecedente a :date.',
    'between'                 => [
        'numeric' => ':attribute deve essere tra :min e :max.',
        'file'    => ':attribute deve essere tra :min e :max kilobytes.',
        'string'  => ':attribute deve essere tra :min e :max caratteri.',
        'array'   => ':attribute deve essere tra :min e :max elementi.',
    ],
    'confirmed'               => ':attribute conferma non possibile .',
    'date'                    => ':attribute non data valida.',
    'date_format'             => ':attribute non corrisponde al formato :format.',
    'different'               => ':attribute  :other devono essere differenti.',
    'digits'                  => ':attribute deve essere :digits caratteri.',
    'digits_between'          => ':attribute deve essere tra :min e :max caratteri.',
    'email'                   => ':attribute deve essere un indirizzo email valido.',
    'exists'                  => ':attribute selezionato non valido.',
    'image'                   => ':attribute deve essere una immagine.',
    'in'                      => ':attribute selezionato non valido.',
    'integer'                 => ':attribute deve essere un intero.',
    'ip'                      => ':attribute deve essere un indirizzo IP valido.',
    'max'                     => [
        'numeric' => ':attribute potrebbe essere maggiore di :max.',
        'file'    => ':attribute potrebbe essere maggiore di :max kilobytes.',
        'string'  => ':attribute potrebbe essere maggiore di :max characters.',
        'array'   => ':attribute potrebbe avere più di :max elementi.',
    ],
    'mimes'                   => ':attribute deve essere un file del tipo: :values.',
    'min'                     => [
        'numeric' => ':attribute deve essere al meno :min.',
        'file'    => ':attribute deve essere al meno :min kilobytes.',
        'string'  => ':attribute deve essere al meno :min caratteri.',
        'array'   => ':attribute deve essere al meno :min elementi.',
    ],
    'not_in'                  => ':attribute selezionato non valido.',
    'not_php'                 => 'Tipo di file non corretto.',
    'numeric'                 => ':attribute deve essere un numero.',
    'regex'                   => ':attribute formato non valido.',
    'required'                => ':attribute campo richiesto.',
    'required_only_on_create' => ':attribute campo richiesto.',
    'required_if'             => ':attribute campo richiesto quando :other è :value.',
    'required_with'           => ':attribute campo richiesto quando :values presente.',
    'required_with_all'       => ':attribute campo richiesto quando :values presente.',
    'required_without'        => ':attribute campo richiesto quando :values non presente.',
    'required_without_all'    => ':attribute campo richiesto quando nessuno di :values sono presenti.',
    'same'                    => ':attribute e :other devono coincidere.',
    'size'                    => [
        'numeric' => ':attribute deve essere :size.',
        'file'    => ':attribute deve essere :size kilobytes.',
        'string'  => ':attribute deve essere :size characters.',
        'array'   => ':attribute deve contenere :size elementi.',
    ],
    'unique'                  => ':attribute non unico, scegliere altro.',
    'url'                     => ':attribute formato non valido.',
    'url_stub'                => ':attribute formato non valido.',
    'url_stub_full'           => ':attribute formato non valido.',
    'not_image'               => 'File ma non immagine',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
