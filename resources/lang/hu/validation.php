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
        'numeric' => 'Az :attribute értéknek nagyobbnak kell lennie, mint :value.',
        'file' => 'Az :attribute értéknek nagyobbnak kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute nagyobbnak kell lennie, mint :value karakter.',
        'array' => 'Az :attribute több mint :value elemet kell tartalmaznia.',
    ],
    'gte' => [
        'numeric' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'string' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute legalább :value elemekkel kell rendelkeznie.',
    ],
    'image' => 'Az :attribute képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'Az :attribute mező nem létezik az :otherben.',
    'integer' => 'Az :attribute egész számnak kell lennie.',
    'ip' => 'Az :attribute értéknek érvényes IP-címnek kell lennie.',
    'ipv4' => 'Az :attribute értéknek érvényes IPv4-címnek kell lennie.',
    'ipv6' => 'Az :attribute értéknek érvényes IPv6-címnek kell lennie.',
    'json' => 'Az :attribute értéknek érvényes JSON-karakterláncnak kell lennie.',
    'lt' => [
        'numeric' => 'Az :attribute kisebbnek kell lennie, mint :value.',
        'file' => 'Az :attribute kisebbnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute kisebbnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute elemnek kevesebbnek kell lennie, mint :value.',
    ],
    'lte' => [
        'numeric' => 'Az :attribute értéknek kisebbnek vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'Az :attribútumnak kisebbnek vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute kisebb vagy egyenlő lehet, mint :value karakter.',
        'array' => 'Az :attribute nem tartalmazhat több mint :value elemet.',
    ],
    'mac_address' => 'Az :attribute értéknek érvényes MAC-címnek kell lennie.',
    'max' => [
        'numeric' => 'Az :attribute nem lehet nagyobb, mint :max.',
        'file' => 'Az :attribute nem lehet nagyobb, mint :max kilobájt.',
        'string' => 'Az :attribute nem lehet nagyobb, mint :max karakter.',
        'array' => 'Az :attribute nem tartalmazhat több mint :max elemet.',
    ],
    'mimes' => 'Az :attribute fájlnak a következő típusúnak kell lennie: :values.',
    'mimetypes' => 'Az :attribute fájlnak a következő típusúnak kell lennie: :values.',
    'min' => [
        'numeric' => 'Az :attribute értéke legalább :min.',
        'file' => 'Az :attribute legalább :min kilobájtnak kell lennie.',
        'string' => 'Az :attribute legalább :min karakterből álljon.',
        'array' => 'Az :attribute-nek legalább :min elemet kell tartalmaznia.',
    ],
    'multiple_of' => 'Az :attribute értéknek a :value többszörösének kell lennie.',
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'Az :attribute formátum érvénytelen.',
    'numeric' => 'Az :attribute számnak kell lennie.',
    'password' => 'A jelszó helytelen.',
    'present' => 'Az :attribute mezőnek jelen kell lennie.',
    'prohibited' => 'Az :attribute mező tilos.',
    'prohibited_if' => 'Az :attribute mező tiltott, ha az :other értéke :value.',
    'prohibited_unless' => 'Az :attribute mező tilos, kivéve, ha az :other az :values mezőben szerepel.',
    'prohibits' => 'Az :attribute mező megtiltja, hogy az :other jelen legyen.',
    'regex' => 'Az :attribute formátum érvénytelen.',
    'required' => 'Az :attribute mező kitöltése kötelező.',
    'required_array_keys' => 'Az :attribute mezőnek tartalmaznia kell a következő bejegyzéseket: :values.',
    'required_if' => 'Az :attribute mező kitöltése kötelező, ha az :other értéke :value.',
    'required_unless' => 'Az :attribute mező kitöltése kötelező, kivéve, ha az :other szerepel a :values mezőben.',
    'required_with' => 'Az :attribute mező kitöltése kötelező, ha a :values jelen van.',
    'required_with_all' => 'Az :attribute mező kitöltése kötelező, ha a :values jelen van.',
    'required_without' => 'Az :attribute mező kitöltése kötelező, ha a :values nincs jelen.',
    'required_without_all' => 'Az :attribute mező kitöltése kötelező, ha a :értékek közül egyik sem szerepel.',
    'same' => 'Az :attribute és az :other egyeznie kell.',
    'size' => [
        'numeric' => 'Az :attribute :size legyen.',
        'file' => 'Az :attribútumnak :size kilobájtnak kell lennie.',
        'string' => 'Az :attribute :size karakterekből kell állnia.',
        'array' => 'Az :attribute tartalmaznia kell a :size elemeket.',
    ],
    'starts_with' => 'Az :attribute a következők valamelyikével kell kezdődnie: :values.',
    'string' => 'Az :attribute karakterláncnak kell lennie.',
    'timezone' => 'Az :attribute értéknek érvényes időzónának kell lennie.',
    'unique' => 'Az :attribute már foglalt.',
    'uploaded' => 'A :attribute feltöltése nem sikerült.',
    'url' => 'Az :attribute érvényes URL-nek kell lennie.',
    'uuid' => 'Az :attribute értéknek érvényes UUID-nek kell lennie.',

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
            'rule-name' => 'egyéni üzenet',
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
