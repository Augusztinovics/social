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

    'accepted' => 'Az :attribute el kell fogadni.',
    'accepted_if' => 'Az :attribute el kell fogadni, ha az :other a :value.',
    'active_url' => 'Az :attribute nem érvényes URL.',
    'after' => 'Az :attribute értéknek a :date utáni dátumnak kell lennie.',
    'after_or_equal' => 'Az :attribute dátumnak a :date után vagy azzal egyenlőnek kell lennie.',
    'alpha' => 'Az :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'Az :attribute csak betűket, számokat, kötőjeleket és aláhúzásjeleket tartalmazhat.',
    'alpha_num' => 'Az :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'Az :attribute egy tömbnek kell lennie.',
    'before' => 'Az :attribute értéknek a :date előtti dátumnak kell lennie.',
    'before_or_equal' => 'Az :attribute dátumnak a :date előtt vagy azzal egyenlőnek kell lennie.',
    'between' => [
        'numeric' => 'Az :attribute értéknek :min és :max között kell lennie.',
        'file' => 'Az :attribute értéknek :min és :max kilobájt között kell lennie.',
        'string' => 'Az :attribute karakternek :min és :max karakterek között kell lennie.',
        'array' => 'Az :attribute elemnek :min és :max között kell lennie.',
    ],
    'boolean' => 'Az :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed' => 'Az :attribute megerősítés nem egyezik.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'Az :attribute nem érvényes dátum.',
    'date_equals' => 'Az :attribute dátumnak egyenlőnek kell lennie a :date értékkel.',
    'date_format' => 'Az :attribute nem egyezik a :format formátummal.',
    'declined' => 'Az :attribute-t el kell utasítani.',
    'declined_if' => 'Az :attribute el kell utasítani, ha az :other értéke :value.',
    'different' => 'Az :attribute és az :other eltérőnek kell lennie.',
    'digits' => 'Az :attribute :digits számjegynek kell lennie.',
    'digits_between' => 'Az :attribute értéknek :min és :max számjegyek között kell lennie.',
    'dimensions' => 'A :attribute képméretei érvénytelenek.',
    'distinct' => 'Az :attribute mezőnek ismétlődő értéke van.',
    'email' => 'Az :attribute értéknek érvényes e-mail címnek kell lennie.',
    'ends_with' => 'Az :attribute a következők egyikére kell, hogy végződjön: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'file' => 'Az :attribute fájlnak kell lennie.',
    'filled' => 'Az :attribute mezőnek értékkel kell rendelkeznie.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
