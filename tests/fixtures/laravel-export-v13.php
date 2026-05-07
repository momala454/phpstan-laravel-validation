<?php /* laravel commit e7db333a0 */ return [
    'Xc5P3dMLf9F8hd3Bc5y4HQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationArrayRuleTest::testArrayValidation:71',
        'data' => [
            'foo' => [
                'bar'
            ]
        ],
        'validated' => [
            'foo' => [
                'bar'
            ]
        ],
        'rules' => [
            'foo' => 'array'
        ],
        'expandedRules' => [
            'foo' => [
                'array'
            ]
        ]
    ],
    'tpogQDUt44uLaDXXyfP8mg' => [
        'location' => 'unknown',
        'data' => [
            'date' => '2024-02-01'
        ],
        'validated' => [
            'date' => '2024-02-01'
        ],
        'rules' => [
            'date' => 'date|after:2024-01-01|before:2025-01-01'
        ],
        'expandedRules' => [
            'date' => [
                'date',
                'after:2024-01-01',
                'before:2025-01-01'
            ]
        ]
    ],
    '9LfmhV24Ovjby3P_yYVBjg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationExceptionTest::testExceptionSummarizesZeroErrors:15',
        'data' => [],
        'validated' => [],
        'rules' => [],
        'expandedRules' => []
    ],
    'PmbYbbWWDh6bm34LJmB3fQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationExceptionTest::testExceptionErrorZeroErrors:115',
        'data' => [],
        'validated' => [],
        'rules' => [],
        'expandedRules' => []
    ],
    'RjI9jfCzygK_wIxs2b9UqQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationExcludeIfTest::testExcludeIfRuleValidation:79',
        'data' => [
            'bar' => 'BAR'
        ],
        'validated' => [
            'bar' => 'BAR'
        ],
        'rules' => [
            'foo' => 'exclude',
            'bar' => 'nullable'
        ],
        'expandedRules' => [
            'bar' => [
                'nullable'
            ]
        ]
    ],
    'fVoGNQ6Zo4tjaRv4wrjTow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationFactoryTest::testValidateMethodCanBeCalledPublicly:103',
        'data' => [
            'bar' => [
                'baz'
            ]
        ],
        'validated' => [
            'bar' => [
                'baz'
            ]
        ],
        'rules' => [
            'bar' => 'foo'
        ],
        'expandedRules' => [
            'bar' => [
                'foo'
            ]
        ]
    ],
    '5QuZi2gq3grjPkD84Ke6Cg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationInArrayKeysTest::testInArrayKeysValidation:18',
        'data' => [
            'foo' => [
                'first_key' => 'bar',
                'second_key' => 'baz'
            ]
        ],
        'validated' => [
            'foo' => [
                'first_key' => 'bar',
                'second_key' => 'baz'
            ]
        ],
        'rules' => [
            'foo' => 'in_array_keys:first_key,third_key'
        ],
        'expandedRules' => [
            'foo' => [
                'in_array_keys:first_key,third_key'
            ]
        ]
    ],
    'N6ilrqCAbyggVJnGzuk1sA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationInArrayKeysTest::testInArrayKeysValidation:22',
        'data' => [
            'foo' => [
                'first_key' => 'bar',
                'second_key' => 'baz'
            ]
        ],
        'validated' => [
            'foo' => [
                'first_key' => 'bar',
                'second_key' => 'baz'
            ]
        ],
        'rules' => [
            'foo' => 'in_array_keys:first_key,second_key'
        ],
        'expandedRules' => [
            'foo' => [
                'in_array_keys:first_key,second_key'
            ]
        ]
    ],
    'urh8elJaJmNA-hTtbZavBw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationInArrayKeysTest::testInArrayKeysValidationWithNestedArrays:48',
        'data' => [
            'foo' => [
                'first_key' => [
                    'nested' => 'value'
                ],
                'second_key' => 'baz'
            ]
        ],
        'validated' => [
            'foo' => [
                'first_key' => [
                    'nested' => 'value'
                ],
                'second_key' => 'baz'
            ]
        ],
        'rules' => [
            'foo' => 'in_array_keys:first_key,third_key'
        ],
        'expandedRules' => [
            'foo' => [
                'in_array_keys:first_key,third_key'
            ]
        ]
    ],
    'RGEQ0Ws6cUxSsQCzCfy7kw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationInArrayKeysTest::testInArrayKeysValidationWithNestedArrays:58',
        'data' => [
            'foo' => [
                'first' => [
                    'nested_key' => 'value'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                'first' => [
                    'nested_key' => 'value'
                ]
            ]
        ],
        'rules' => [
            'foo.first' => 'in_array_keys:nested_key'
        ],
        'expandedRules' => [
            'foo.first' => [
                'in_array_keys:nested_key'
            ]
        ]
    ],
    'K95oZ-axECGiu4A2DN4rWg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationInRuleTest::testInRuleValidation:84',
        'data' => [
            'x' => 'foo'
        ],
        'validated' => [
            'x' => 'foo'
        ],
        'rules' => [
            'x' => 'in:"foo","bar"'
        ],
        'expandedRules' => [
            'x' => [
                'in:"foo","bar"'
            ]
        ]
    ],
    'd-H3ubMMwk541NWSbSTpQQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNotInRuleTest::testNotInRuleValidation:80',
        'data' => [
            'x' => 'foo'
        ],
        'validated' => [
            'x' => 'foo'
        ],
        'rules' => [
            'x' => 'not_in:"bar","baz"'
        ],
        'expandedRules' => [
            'x' => [
                'not_in:"bar","baz"'
            ]
        ]
    ],
    '3At3EwLdZKBVoVmwCFW1Xg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:193',
        'data' => [
            'numeric' => '50'
        ],
        'validated' => [
            'numeric' => '50'
        ],
        'rules' => [
            'numeric' => 'numeric|between:10,100'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'between:10,100'
            ]
        ]
    ],
    '3hEeyZvHZzkn2AwzDMZo3Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:203',
        'data' => [
            'numeric' => '50',
            'some_field' => '100'
        ],
        'validated' => [
            'numeric' => '50'
        ],
        'rules' => [
            'numeric' => 'numeric|different:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'different:some_field'
            ]
        ]
    ],
    'EeK5n2czwv3VS8cKm05vHQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:213',
        'data' => [
            'numeric' => '10'
        ],
        'validated' => [
            'numeric' => '10'
        ],
        'rules' => [
            'numeric' => 'numeric|integer|digits:2'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'integer',
                'digits:2'
            ]
        ]
    ],
    'ukkINVhuRmtvlPDZ6dEE-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:223',
        'data' => [
            'numeric' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|integer|digits_between:2,4'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'integer',
                'digits_between:2,4'
            ]
        ]
    ],
    'WJb4EM5IZ1Jv4Gvo66a_8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:233',
        'data' => [
            'numeric' => '100',
            'some_field' => '10'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|gt:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'gt:some_field'
            ]
        ]
    ],
    'oA138kV9DL-CDjXe4xkPmg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:243',
        'data' => [
            'numeric' => '100',
            'some_field' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|gte:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'gte:some_field'
            ]
        ]
    ],
    'GXH7jRLKKPF9EXd4VGz_1w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:253',
        'data' => [
            'numeric' => '10'
        ],
        'validated' => [
            'numeric' => '10'
        ],
        'rules' => [
            'numeric' => 'numeric|integer'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'integer'
            ]
        ]
    ],
    '1RmEWX-vdU28RA9hgVL1bQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:263',
        'data' => [
            'numeric' => '100',
            'some_field' => '150'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|lt:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'lt:some_field'
            ]
        ]
    ],
    '-p3hb3UqpCab5VgNLeUA8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:273',
        'data' => [
            'numeric' => '100',
            'some_field' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|lte:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'lte:some_field'
            ]
        ]
    ],
    '2d2cRMwytUJF_PK4ZfB3bg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:283',
        'data' => [
            'numeric' => '200'
        ],
        'validated' => [
            'numeric' => '200'
        ],
        'rules' => [
            'numeric' => 'numeric|max:200'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'max:200'
            ]
        ]
    ],
    'a00d8OLELIJbj9BlXElxRw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:293',
        'data' => [
            'numeric' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|max_digits:3'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'max_digits:3'
            ]
        ]
    ],
    '17GuTzAKlmyH_YC6IJdNfQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:303',
        'data' => [
            'numeric' => '10'
        ],
        'validated' => [
            'numeric' => '10'
        ],
        'rules' => [
            'numeric' => 'numeric|min:2'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'min:2'
            ]
        ]
    ],
    '7WL7A9iSy2mvC4PDiFnR1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:313',
        'data' => [
            'numeric' => '10'
        ],
        'validated' => [
            'numeric' => '10'
        ],
        'rules' => [
            'numeric' => 'numeric|min_digits:2'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'min_digits:2'
            ]
        ]
    ],
    '20mWC_25MZlOGh1KTkwTaw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:323',
        'data' => [
            'numeric' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|multiple_of:10'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'multiple_of:10'
            ]
        ]
    ],
    '_WzTe4EB0d_OxuqWYlc2IA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:333',
        'data' => [
            'numeric' => '100',
            'some_field' => '100'
        ],
        'validated' => [
            'numeric' => '100'
        ],
        'rules' => [
            'numeric' => 'numeric|same:some_field'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'same:some_field'
            ]
        ]
    ],
    'DUDRn357QVzXwehWYaxYnQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationNumericRuleTest::testNumericValidation:343',
        'data' => [
            'numeric' => '10'
        ],
        'validated' => [
            'numeric' => '10'
        ],
        'rules' => [
            'numeric' => 'numeric|integer|size:10'
        ],
        'expandedRules' => [
            'numeric' => [
                'numeric',
                'integer',
                'size:10'
            ]
        ]
    ],
    '2T-CG341Ps0eluLixuE25Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationProhibitedIfTest::testProhibitedIfRuleValidation:74',
        'data' => [
            'y' => 'foo'
        ],
        'validated' => [],
        'rules' => [
            'x' => 'prohibited'
        ],
        'expandedRules' => [
            'x' => [
                'prohibited'
            ]
        ]
    ],
    'xr6RP7UaJ6HmgXBCixaDow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationRuleDoesntContainTest::testDoesntContainValidation:75',
        'data' => [
            'roles' => [
                'admin',
                'user'
            ]
        ],
        'validated' => [
            'roles' => [
                'admin',
                'user'
            ]
        ],
        'rules' => [
            'roles' => 'doesnt_contain:editor'
        ],
        'expandedRules' => [
            'roles' => [
                'doesnt_contain:editor'
            ]
        ]
    ],
    '1U6eEYdKjHLDJdTVBFV0Kg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testSometimesWorksOnNestedArrays:138',
        'data' => [
            'foo' => [
                'bar' => [
                    'baz' => 'nonEmpty'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                'bar' => [
                    'baz' => 'nonEmpty'
                ]
            ]
        ],
        'rules' => [
            'foo.bar.baz' => 'sometimes|required'
        ],
        'expandedRules' => [
            'foo.bar.baz' => [
                'sometimes',
                'required'
            ]
        ]
    ],
    'qDsTGCPOCaLdjH0TjsNXug' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testSometimesWorksOnArrays:169',
        'data' => [
            'foo' => [
                'bar',
                'baz',
                'moo',
                'pew',
                'boom'
            ]
        ],
        'validated' => [
            'foo' => [
                'bar',
                'baz',
                'moo',
                'pew',
                'boom'
            ]
        ],
        'rules' => [
            'foo' => 'sometimes|required|between:5,10'
        ],
        'expandedRules' => [
            'foo' => [
                'sometimes',
                'required',
                'between:5,10'
            ]
        ]
    ],
    '9Dt_VrPEFNt3gcJBqtL8cg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDoesntThrowOnPass:187',
        'data' => [
            'foo' => 'bar'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'required'
        ],
        'expandedRules' => [
            'foo' => [
                'required'
            ]
        ]
    ],
    'xe5K7X6x-juvylZv0e2zcw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatedDoesntThrowOnPass:216',
        'data' => [
            'foo' => 'bar'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'required'
        ],
        'expandedRules' => [
            'foo' => [
                'required'
            ]
        ]
    ],
    '99bo8W9Qlz1om8BEoOac-w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatedDoesntThrowOnPass:219',
        'data' => [],
        'validated' => [],
        'rules' => [],
        'expandedRules' => []
    ],
    'iB_MUikuQzLxxUm9SgvY8Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatedDoesntThrowOnPass:222',
        'data' => [
            'foo' => 'bar',
            'baz' => 'qux'
        ],
        'validated' => [
            'foo' => 'bar',
            'baz' => 'qux'
        ],
        'rules' => [
            'foo' => 'required',
            'baz' => 'required'
        ],
        'expandedRules' => [
            'foo' => [
                'required'
            ],
            'baz' => [
                'required'
            ]
        ]
    ],
    'KcHbWcb-0XXFZ7TWibia4w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testHasFailedValidationRules:233',
        'data' => [
            'foo' => 'bar',
            'baz' => 'bar'
        ],
        'validated' => [
            'foo' => 'bar',
            'baz' => 'bar'
        ],
        'rules' => [
            'foo' => 'Same:baz',
            'baz' => 'Required'
        ],
        'expandedRules' => [
            'foo' => [
                'Same:baz'
            ],
            'baz' => [
                'Required'
            ]
        ]
    ],
    '3ujrQCNKJkLTKVEBDCYm9g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testHasNotFailedValidationRules:250',
        'data' => [
            'foo' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'name' => 'Confirmed'
        ],
        'expandedRules' => [
            'name' => [
                'Confirmed'
            ]
        ]
    ],
    'TTrXW_XdNn0lb_ehlqCDkA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testSometimesCanSkipRequiredRules:259',
        'data' => [],
        'validated' => [],
        'rules' => [
            'name' => 'sometimes|required'
        ],
        'expandedRules' => [
            'name' => [
                'sometimes',
                'required'
            ]
        ]
    ],
    'mlnLFbvCz2lvPyNpmih9tQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testInValidatableRulesReturnsValid:268',
        'data' => [
            'foo' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'name' => 'Confirmed'
        ],
        'expandedRules' => [
            'name' => [
                'Confirmed'
            ]
        ]
    ],
    'sT5nw0ueSLsxj7GQih2jbw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUsingNestedValidationRulesPasses:288',
        'data' => [
            'items' => [
                [
                    '|name' => '|ABC123'
                ]
            ]
        ],
        'validated' => [
            'items' => [
                [
                    '|name' => '|ABC123'
                ]
            ]
        ],
        'rules' => [
            'items' => [
                'array'
            ],
            'items.*' => [
                'array',
                [
                    'required_array_keys',
                    '|name'
                ]
            ],
            'items.*.|name' => [
                [
                    'in',
                    '|ABC123'
                ]
            ]
        ],
        'expandedRules' => [
            'items' => [
                'array'
            ],
            'items.0' => [
                'array',
                [
                    'required_array_keys',
                    '|name'
                ]
            ],
            'items.0.|name' => [
                [
                    'in',
                    '|ABC123'
                ]
            ]
        ]
    ],
    'M5KQwv-rYtX5wk8MKh-X3w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmptyStringsAlwaysPasses:307',
        'data' => [
            'x' => ''
        ],
        'validated' => [
            'x' => ''
        ],
        'rules' => [
            'x' => 'size:10|array|integer|min:5'
        ],
        'expandedRules' => [
            'x' => [
                'size:10',
                'array',
                'integer',
                'min:5'
            ]
        ]
    ],
    'xYU7yBjv4u6t5zOOctaqSA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmptyStringsAlwaysPasses:310',
        'data' => [
            'x' => ''
        ],
        'validated' => [
            'x' => ''
        ],
        'rules' => [
            'x' => 'array'
        ],
        'expandedRules' => [
            'x' => [
                'array'
            ]
        ]
    ],
    'j7pIPqfuoUvwnZ5MVE7RTw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmptyStringsAlwaysPasses:313',
        'data' => [
            'x' => ''
        ],
        'validated' => [
            'x' => ''
        ],
        'rules' => [
            'x' => 'integer'
        ],
        'expandedRules' => [
            'x' => [
                'integer'
            ]
        ]
    ],
    'JVjagtGSPq4LzPx5t36YuQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmptyStringsAlwaysPasses:316',
        'data' => [
            'x' => ''
        ],
        'validated' => [
            'x' => ''
        ],
        'rules' => [
            'x' => 'min:5'
        ],
        'expandedRules' => [
            'x' => [
                'min:5'
            ]
        ]
    ],
    'Q8xkZ6AAhivYpTSKV-KscA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testEmptyExistingAttributesAreValidated:324',
        'data' => [
            'x' => ''
        ],
        'validated' => [
            'x' => ''
        ],
        'rules' => [
            'x' => 'array'
        ],
        'expandedRules' => [
            'x' => [
                'array'
            ]
        ]
    ],
    '4q8bURTLtMFNhIUXSwtO7w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testEmptyExistingAttributesAreValidated:339',
        'data' => [],
        'validated' => [],
        'rules' => [
            'x' => 'string',
            'y' => 'numeric',
            'z' => 'integer',
            'a' => 'boolean',
            'b' => 'array'
        ],
        'expandedRules' => [
            'x' => [
                'string'
            ],
            'y' => [
                'numeric'
            ],
            'z' => [
                'integer'
            ],
            'a' => [
                'boolean'
            ],
            'b' => [
                'array'
            ]
        ]
    ],
    'WH_Kc2t013_EKUMw4Gx8ag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testNullable:351',
        'data' => [
            'x' => null,
            'y' => null,
            'z' => null,
            'a' => null,
            'b' => null
        ],
        'validated' => [
            'x' => null,
            'y' => null,
            'z' => null,
            'a' => null,
            'b' => null
        ],
        'rules' => [
            'x' => 'string|nullable',
            'y' => 'integer|nullable',
            'z' => 'numeric|nullable',
            'a' => 'array|nullable',
            'b' => 'bool|nullable'
        ],
        'expandedRules' => [
            'x' => [
                'string',
                'nullable'
            ],
            'y' => [
                'integer',
                'nullable'
            ],
            'z' => [
                'numeric',
                'nullable'
            ],
            'a' => [
                'array',
                'nullable'
            ],
            'b' => [
                'bool',
                'nullable'
            ]
        ]
    ],
    'SpJlTedsg_WsdE8C6u3J0Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testArrayNullableWithUnvalidatedArrayKeys:376',
        'data' => [
            'x' => null
        ],
        'validated' => [
            'x' => null
        ],
        'rules' => [
            'x' => 'array|nullable',
            'x.key' => 'string'
        ],
        'expandedRules' => [
            'x' => [
                'array',
                'nullable'
            ],
            'x.key' => [
                'string'
            ]
        ]
    ],
    'tM7L2L-ViTechTDI6WbcYA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testNullableMakesNoDifferenceIfImplicitRuleExists:398',
        'data' => [
            'x' => null,
            'y' => null
        ],
        'validated' => [
            'x' => null,
            'y' => null
        ],
        'rules' => [
            'x' => 'nullable|required_with:y|integer',
            'y' => 'nullable|required_with:x|integer'
        ],
        'expandedRules' => [
            'x' => [
                'nullable',
                'required_with:y',
                'integer'
            ],
            'y' => [
                'nullable',
                'required_with:x',
                'integer'
            ]
        ]
    ],
    'jg1BE5EdOg9wdGvlDhi1ng' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testIndexValuesAreReplaced:988',
        'data' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'validated' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'rules' => [
            'input.*.name' => 'required'
        ],
        'expandedRules' => [
            'input.0.name' => [
                'required'
            ],
            'input.1.name' => [
                'required'
            ]
        ]
    ],
    '87IMB_jGsxrIu6QCiYKzLA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testPositionValuesAreReplaced:1020',
        'data' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'validated' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'rules' => [
            'input.*.name' => 'required'
        ],
        'expandedRules' => [
            'input.0.name' => [
                'required'
            ],
            'input.1.name' => [
                'required'
            ]
        ]
    ],
    '06Xilm-sQe968EN_PbbWmQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testOrdinalPositionValuesAreReplaced:1049',
        'data' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'validated' => [
            'input' => [
                [
                    'name' => 'Bob'
                ],
                [
                    'name' => 'Jane'
                ]
            ]
        ],
        'rules' => [
            'input.*.name' => 'required'
        ],
        'expandedRules' => [
            'input.0.name' => [
                'required'
            ],
            'input.1.name' => [
                'required'
            ]
        ]
    ],
    'EiU7m0uE3hj5p5wcWL27Xg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateArray:1275',
        'data' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'foo' => 'Array'
        ],
        'expandedRules' => [
            'foo' => [
                'Array'
            ]
        ]
    ],
    '0-gxFnm-e9LdEYaU4vFkYw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateList:1286',
        'data' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'foo' => 'list'
        ],
        'expandedRules' => [
            'foo' => [
                'list'
            ]
        ]
    ],
    'kJ2QkId1EiDFXl2u0wptfw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateArrayKeys:1304',
        'data' => [
            'user' => [
                'name' => 'Duilio',
                'username' => 'duilio'
            ]
        ],
        'validated' => [
            'user' => [
                'name' => 'Duilio',
                'username' => 'duilio'
            ]
        ],
        'rules' => [
            'user' => 'array:name,username'
        ],
        'expandedRules' => [
            'user' => [
                'array:name,username'
            ]
        ]
    ],
    'a_TQLgVRtq63LMzrV6dKFg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateArrayKeys:1308',
        'data' => [
            'user' => [
                'name' => 'Duilio'
            ]
        ],
        'validated' => [
            'user' => [
                'name' => 'Duilio'
            ]
        ],
        'rules' => [
            'user' => 'array:name,username'
        ],
        'expandedRules' => [
            'user' => [
                'array:name,username'
            ]
        ]
    ],
    'VCqMpnmDns_-2hUOLjwnbQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateCurrentPassword:1382',
        'data' => [
            'password' => 'foo'
        ],
        'validated' => [
            'password' => 'foo'
        ],
        'rules' => [
            'password' => 'current_password'
        ],
        'expandedRules' => [
            'password' => [
                'current_password'
            ]
        ]
    ],
    'EqIznAl7-ahNOeTaeeaRyA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateCurrentPassword:1406',
        'data' => [
            'password' => 'foo'
        ],
        'validated' => [
            'password' => 'foo'
        ],
        'rules' => [
            'password' => 'current_password:custom'
        ],
        'expandedRules' => [
            'password' => [
                'current_password:custom'
            ]
        ]
    ],
    'a3hKAobcbLkP6vyAdDh4-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateFilled:1413',
        'data' => [],
        'validated' => [],
        'rules' => [
            'name' => 'filled'
        ],
        'expandedRules' => [
            'name' => [
                'filled'
            ]
        ]
    ],
    'X_LooLTBHJxGW9vQqFEUWQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateFilled:1419',
        'data' => [
            'foo' => [
                [
                    'id' => 1
                ],
                []
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => 1
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'filled'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'filled'
            ],
            'foo.1.id' => [
                'filled'
            ]
        ]
    ],
    'fxN8hUYvWyBz-VOeSbov1Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresent:1459',
        'data' => [
            'name' => null
        ],
        'validated' => [
            'name' => null
        ],
        'rules' => [
            'name' => 'present|nullable'
        ],
        'expandedRules' => [
            'name' => [
                'present',
                'nullable'
            ]
        ]
    ],
    'hl5xPy4c18otMpZ0WjzqUw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresent:1462',
        'data' => [
            'name' => ''
        ],
        'validated' => [
            'name' => ''
        ],
        'rules' => [
            'name' => 'present'
        ],
        'expandedRules' => [
            'name' => [
                'present'
            ]
        ]
    ],
    'lOrxmJkXe2z7Nx5OMW0cag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresent:1471',
        'data' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => ''
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => ''
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present'
            ],
            'foo.1.id' => [
                'present'
            ]
        ]
    ],
    'UnCzGYcO5i-NzUrW918bQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresent:1474',
        'data' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => null
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present'
            ],
            'foo.1.id' => [
                'present'
            ]
        ]
    ],
    'uJwYohcNsQZxbaljKEVvgQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1487',
        'data' => [
            'bar' => 1,
            'foo' => null
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'present_if:bar,2'
        ],
        'expandedRules' => [
            'foo' => [
                'present_if:bar,2'
            ]
        ]
    ],
    'YPw7eO_ZiO7R_KLwOnICpA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1490',
        'data' => [
            'bar' => 1,
            'foo' => ''
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'present_if:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_if:bar,1'
            ]
        ]
    ],
    'GPHKZwwP0H8NEu85S43wcQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1497',
        'data' => [
            'bar' => 1,
            'foo' => [
                [
                    'id' => '',
                    'name' => 'a'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_if:bar,1'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_if:bar,1'
            ]
        ]
    ],
    'jsz0G79ZuvsE2fa99aZneQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1500',
        'data' => [
            'bar' => 1,
            'foo' => [
                [
                    'id' => null,
                    'name' => 'a'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_if:bar,1'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_if:bar,1'
            ]
        ]
    ],
    'SbkhxghxcLulsjuQjdKGvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1503',
        'data' => [
            'bar' => 1,
            'foo' => '2'
        ],
        'validated' => [
            'foo' => '2'
        ],
        'rules' => [
            'foo' => 'present_if:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_if:bar,1'
            ]
        ]
    ],
    'wu8B5VUrbV00GYZBNoYE7A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentIf:1506',
        'data' => [
            'bar' => 2
        ],
        'validated' => [],
        'rules' => [
            'foo' => 'present_if:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_if:bar,1'
            ]
        ]
    ],
    'KUibiXZDzmfEvVOoZF4vMQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1519',
        'data' => [
            'bar' => 2,
            'foo' => null
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    '9sCgkWtpGQ67x3pj1yfZAw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1522',
        'data' => [
            'bar' => 2,
            'foo' => ''
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    'wdvOxZ_tipju1DPGuFJpHQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1529',
        'data' => [
            'bar' => 2,
            'foo' => [
                [
                    'id' => '',
                    'name' => 'a'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    'q320rgSS8b90beldyKagQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1532',
        'data' => [
            'bar' => 2,
            'foo' => [
                [
                    'id' => null,
                    'name' => 'a'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    'JztkdtbaoQuu8FB2M_KLHA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1535',
        'data' => [
            'bar' => 2,
            'foo' => '2'
        ],
        'validated' => [
            'foo' => '2'
        ],
        'rules' => [
            'foo' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    'XFJTAl5kBokESPrXIroUGw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentUnless:1538',
        'data' => [
            'bar' => 1
        ],
        'validated' => [],
        'rules' => [
            'foo' => 'present_unless:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'present_unless:bar,1'
            ]
        ]
    ],
    'DEULN_IjT0KKE1KM7uFx7A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1547',
        'data' => [
            'foo' => 1,
            'bar' => 2
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with:bar'
            ]
        ]
    ],
    'hsmfbzf8XDJvBgkuwEPFFA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1550',
        'data' => [
            'foo' => null,
            'bar' => 2
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with:bar'
            ]
        ]
    ],
    'GaB6fwaKWfIM6FkOiArayA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1553',
        'data' => [
            'foo' => '',
            'bar' => 2
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with:bar'
            ]
        ]
    ],
    'NwomnEs4GJa0XELWRJq82Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1560',
        'data' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ],
            'bar' => 2
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_with:bar'
            ]
        ]
    ],
    'FpWjsuzdN2slBpQV_Wi10w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1563',
        'data' => [
            'foo' => [
                [
                    'id' => null
                ]
            ],
            'bar' => 2
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_with:bar'
            ]
        ]
    ],
    'f7_zVHIrRTW7Q8eUST-2IA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWith:1566',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'present_with:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with:bar'
            ]
        ]
    ],
    '-h_ZkWvOrqkxyntejkwHSQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1579',
        'data' => [
            'foo' => 1,
            'bar' => 2,
            'baz' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'k2P6GjmpN-ZuqtGQlI-swA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1582',
        'data' => [
            'foo' => null,
            'bar' => 2,
            'baz' => 1
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'v8GKwjX-g6Gdh93cqGHOSg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1585',
        'data' => [
            'foo' => '',
            'bar' => 2,
            'baz' => 1
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'j3V9q-bTkpIn85uPukIm2A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1592',
        'data' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ],
            'bar' => 2,
            'baz' => 1
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => ''
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'q1vAyx0IYyn4uWRoFkowaw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1595',
        'data' => [
            'foo' => [
                [
                    'id' => null
                ]
            ],
            'bar' => 2,
            'baz' => 1
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'AAOJThpP3JXYwwZCYPDWoQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidatePresentWithAll:1598',
        'data' => [
            'foo' => 1,
            'bar' => 2
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'present_with_all:bar,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'present_with_all:bar,baz'
            ]
        ]
    ],
    'IwnzZZwJTItCnqLmSw7PzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequired:1615',
        'data' => [
            'name' => 'foo'
        ],
        'validated' => [
            'name' => 'foo'
        ],
        'rules' => [
            'name' => 'Required'
        ],
        'expandedRules' => [
            'name' => [
                'Required'
            ]
        ]
    ],
    '5m-5ZettJ4JLASJBX7xRkg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequired:1623',
        'data' => [
            'name' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'name' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'name' => 'Required'
        ],
        'expandedRules' => [
            'name' => [
                'Required'
            ]
        ]
    ],
    '5-uAhxu6lBZnB_03dZI33g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequired:1628',
        'data' => [
            'files' => [
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })(),
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })()
            ]
        ],
        'validated' => [
            'files' => [
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })(),
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })()
            ]
        ],
        'rules' => [
            'files.0' => 'Required',
            'files.1' => 'Required'
        ],
        'expandedRules' => [
            'files.0' => [
                'Required'
            ],
            'files.1' => [
                'Required'
            ]
        ]
    ],
    'wfF0OXtv_CaDRISMwF2NMA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequired:1631',
        'data' => [
            'files' => [
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })(),
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })()
            ]
        ],
        'validated' => [
            'files' => [
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })(),
                (static function() {
                    $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                    $object = $class->newInstanceWithoutConstructor();

                    return $object;
                })()
            ]
        ],
        'rules' => [
            'files' => 'Required'
        ],
        'expandedRules' => [
            'files' => [
                'Required'
            ]
        ]
    ],
    'liJg7kMX-nvzRyZy4YJrPg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWith:1644',
        'data' => [
            'first' => ''
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_with:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_with:first'
            ]
        ]
    ],
    'nXcot-nhZbjWmx0pXz_EvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWith:1647',
        'data' => [],
        'validated' => [],
        'rules' => [
            'last' => 'required_with:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_with:first'
            ]
        ]
    ],
    '-DsHAS7qYna1oniRq0MRxw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWith:1650',
        'data' => [
            'first' => 'Taylor',
            'last' => 'Otwell'
        ],
        'validated' => [
            'last' => 'Otwell'
        ],
        'rules' => [
            'last' => 'required_with:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_with:first'
            ]
        ]
    ],
    '_yF4UTalcH5AfdDBgOiOeg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWith:1654',
        'data' => [
            'file' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })(),
            'foo' => ''
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'required_with:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_with:file'
            ]
        ]
    ],
    'iwiDZgCyT6fiEGH2-w-qiA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWith:1659',
        'data' => [
            'file' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })(),
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'foo' => 'required_with:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_with:file'
            ]
        ]
    ],
    'ELSiYe7jZnS20B5hB80U5w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithAll:1671',
        'data' => [
            'first' => 'foo'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_with_all:first,foo'
        ],
        'expandedRules' => [
            'last' => [
                'required_with_all:first,foo'
            ]
        ]
    ],
    'nxMbMF2clJSEYi2447x19w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1681',
        'data' => [
            'first' => 'Taylor'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_without:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_without:first'
            ]
        ]
    ],
    'Ce2k2qEBLIXmyP8qwsTYtA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1684',
        'data' => [
            'first' => 'Taylor',
            'last' => ''
        ],
        'validated' => [
            'last' => ''
        ],
        'rules' => [
            'last' => 'required_without:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_without:first'
            ]
        ]
    ],
    'TN1S7MQksP4WaGVEu_2hTA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1693',
        'data' => [
            'first' => 'Taylor',
            'last' => 'Otwell'
        ],
        'validated' => [
            'last' => 'Otwell'
        ],
        'rules' => [
            'last' => 'required_without:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_without:first'
            ]
        ]
    ],
    'ZuqoX9LOW7uG_8BsKcS2Bg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1696',
        'data' => [
            'last' => 'Otwell'
        ],
        'validated' => [
            'last' => 'Otwell'
        ],
        'rules' => [
            'last' => 'required_without:first'
        ],
        'expandedRules' => [
            'last' => [
                'required_without:first'
            ]
        ]
    ],
    'cz0A9KMTSiEeE1tdtaYEtA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1708',
        'data' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'foo' => 'required_without:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without:file'
            ]
        ]
    ],
    'wMP1D4PwRNzdowsATWpGgw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1713',
        'data' => [
            'file' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })(),
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'foo' => 'required_without:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without:file'
            ]
        ]
    ],
    'vjrCSHIDzSlmWL7SBRwXMg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1718',
        'data' => [
            'file' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })(),
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'foo' => 'required_without:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without:file'
            ]
        ]
    ],
    'cTkeg8zBp7OcI8qpJmp7Ig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredWithout:1723',
        'data' => [
            'file' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })(),
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'foo' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'foo' => 'required_without:file'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without:file'
            ]
        ]
    ],
    'J1FjVOufdT5KmLKDx1yGgw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutMultiple:1754',
        'data' => [
            'f1' => 'foo',
            'f2' => 'bar'
        ],
        'validated' => [
            'f1' => 'foo',
            'f2' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without:f2,f3',
            'f2' => 'required_without:f1,f3',
            'f3' => 'required_without:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without:f2,f3'
            ],
            'f2' => [
                'required_without:f1,f3'
            ],
            'f3' => [
                'required_without:f1,f2'
            ]
        ]
    ],
    'TlpQatUxE_Ai3pNl0KEKzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutMultiple:1757',
        'data' => [
            'f1' => 'foo',
            'f3' => 'bar'
        ],
        'validated' => [
            'f1' => 'foo',
            'f3' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without:f2,f3',
            'f2' => 'required_without:f1,f3',
            'f3' => 'required_without:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without:f2,f3'
            ],
            'f2' => [
                'required_without:f1,f3'
            ],
            'f3' => [
                'required_without:f1,f2'
            ]
        ]
    ],
    'JBi11F5VYQ68Aad7KHtWFA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutMultiple:1760',
        'data' => [
            'f2' => 'foo',
            'f3' => 'bar'
        ],
        'validated' => [
            'f2' => 'foo',
            'f3' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without:f2,f3',
            'f2' => 'required_without:f1,f3',
            'f3' => 'required_without:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without:f2,f3'
            ],
            'f2' => [
                'required_without:f1,f3'
            ],
            'f3' => [
                'required_without:f1,f2'
            ]
        ]
    ],
    'mFkoXzr-A7iUZb66T0j7cg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutMultiple:1763',
        'data' => [
            'f1' => 'foo',
            'f2' => 'bar',
            'f3' => 'baz'
        ],
        'validated' => [
            'f1' => 'foo',
            'f2' => 'bar',
            'f3' => 'baz'
        ],
        'rules' => [
            'f1' => 'required_without:f2,f3',
            'f2' => 'required_without:f1,f3',
            'f3' => 'required_without:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without:f2,f3'
            ],
            'f2' => [
                'required_without:f1,f3'
            ],
            'f3' => [
                'required_without:f1,f2'
            ]
        ]
    ],
    'yg8kydWiLM7gDNKdw5ylrg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1780',
        'data' => [
            'f1' => 'foo'
        ],
        'validated' => [
            'f1' => 'foo'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'ASnYfvH0AIIhl0cDXJVDWA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1783',
        'data' => [
            'f2' => 'foo'
        ],
        'validated' => [
            'f2' => 'foo'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'utWlm7jpk1BFniVfHJ0c5g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1786',
        'data' => [
            'f3' => 'foo'
        ],
        'validated' => [
            'f3' => 'foo'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'v5Hk4S9wBz4N_Y33a2yXcg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1789',
        'data' => [
            'f1' => 'foo',
            'f2' => 'bar'
        ],
        'validated' => [
            'f1' => 'foo',
            'f2' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'bd7OMhRYsG-CjPQ8AE2RQA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1792',
        'data' => [
            'f1' => 'foo',
            'f3' => 'bar'
        ],
        'validated' => [
            'f1' => 'foo',
            'f3' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'jl8dKi9QyWzJLOAGAB-zyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1795',
        'data' => [
            'f2' => 'foo',
            'f3' => 'bar'
        ],
        'validated' => [
            'f2' => 'foo',
            'f3' => 'bar'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'WmHQ4cF8b_l_FhhP8SX74g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredWithoutAll:1798',
        'data' => [
            'f1' => 'foo',
            'f2' => 'bar',
            'f3' => 'baz'
        ],
        'validated' => [
            'f1' => 'foo',
            'f2' => 'bar',
            'f3' => 'baz'
        ],
        'rules' => [
            'f1' => 'required_without_all:f2,f3',
            'f2' => 'required_without_all:f1,f3',
            'f3' => 'required_without_all:f1,f2'
        ],
        'expandedRules' => [
            'f1' => [
                'required_without_all:f2,f3'
            ],
            'f2' => [
                'required_without_all:f1,f3'
            ],
            'f3' => [
                'required_without_all:f1,f2'
            ]
        ]
    ],
    'UvvEd5JepTuysTI6DbgSsw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1809',
        'data' => [
            'first' => 'taylor',
            'last' => 'otwell'
        ],
        'validated' => [
            'last' => 'otwell'
        ],
        'rules' => [
            'last' => 'required_if:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'required_if:first,taylor'
            ]
        ]
    ],
    '8KH6QCpaUudGYnsk5e9Nnw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1813',
        'data' => [
            'first' => 'taylor',
            'last' => 'otwell'
        ],
        'validated' => [
            'last' => 'otwell'
        ],
        'rules' => [
            'last' => 'required_if:first,taylor,dayle'
        ],
        'expandedRules' => [
            'last' => [
                'required_if:first,taylor,dayle'
            ]
        ]
    ],
    'LZJK1led5-sRL_wWRIYtUw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1817',
        'data' => [
            'first' => 'dayle',
            'last' => 'rees'
        ],
        'validated' => [
            'last' => 'rees'
        ],
        'rules' => [
            'last' => 'required_if:first,taylor,dayle'
        ],
        'expandedRules' => [
            'last' => [
                'required_if:first,taylor,dayle'
            ]
        ]
    ],
    '4GHhVR6JGFDMc_xP_VF0ew' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1821',
        'data' => [
            'foo' => true
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_if:foo,false'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if:foo,false'
            ]
        ]
    ],
    '5eSXSKeg0P2PUvzOciy_kQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1825',
        'data' => [
            'foo' => true
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_if:foo,null'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if:foo,null'
            ]
        ]
    ],
    '9lWEEy4yjj1QKzZpxYWRmA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1874',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'nullable|boolean',
            'baz' => 'nullable|required_if:foo,false'
        ],
        'expandedRules' => [
            'foo' => [
                'nullable',
                'boolean'
            ],
            'baz' => [
                'nullable',
                'required_if:foo,false'
            ]
        ]
    ],
    '_d8Uttb315LosW6iZjfmIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1881',
        'data' => [
            'foo' => null
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'nullable|boolean',
            'baz' => 'nullable|required_if:foo,false'
        ],
        'expandedRules' => [
            'foo' => [
                'nullable',
                'boolean'
            ],
            'baz' => [
                'nullable',
                'required_if:foo,false'
            ]
        ]
    ],
    'G7hsniGI7Tk_wYxLpf11Ow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1888',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'nullable|boolean',
            'baz' => 'nullable|required_if:foo,null'
        ],
        'expandedRules' => [
            'foo' => [
                'nullable',
                'boolean'
            ],
            'baz' => [
                'nullable',
                'required_if:foo,null'
            ]
        ]
    ],
    'zsjf12zL5YrIXZOI_L7ymg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredIf:1906',
        'data' => [
            'foo' => 'bar',
            'customfield' => [
                1 => 'taylor'
            ]
        ],
        'validated' => [
            'customfield' => [
                1 => 'taylor'
            ],
            'foo' => 'bar'
        ],
        'rules' => [
            'customfield' => [
                'nullable',
                'array'
            ],
            'foo' => 'required_if:customfield.1,taylor'
        ],
        'expandedRules' => [
            'customfield' => [
                'nullable',
                'array'
            ],
            'foo' => [
                'required_if:customfield.1,taylor'
            ]
        ]
    ],
    'ebszQ_sO3cfIfG2ENZpUvg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1940',
        'data' => [
            'first' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_unless:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'required_unless:first,taylor'
            ]
        ]
    ],
    'QIL26k7Ixi5UpNbkJql2Dg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1944',
        'data' => [
            'first' => 'sven',
            'last' => 'wittevrongel'
        ],
        'validated' => [
            'last' => 'wittevrongel'
        ],
        'rules' => [
            'last' => 'required_unless:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'required_unless:first,taylor'
            ]
        ]
    ],
    'PdaD9Nr1a5aTlhRhDR8snw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1948',
        'data' => [
            'first' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_unless:first,taylor,sven'
        ],
        'expandedRules' => [
            'last' => [
                'required_unless:first,taylor,sven'
            ]
        ]
    ],
    '6cqg5sFS_JETTn9FpH9XBA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1952',
        'data' => [
            'first' => 'sven'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'required_unless:first,taylor,sven'
        ],
        'expandedRules' => [
            'last' => [
                'required_unless:first,taylor,sven'
            ]
        ]
    ],
    'V6PTvPpWjo-YW7Fz8v3aHA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1956',
        'data' => [
            'foo' => false
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,false'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,false'
            ]
        ]
    ],
    'zGzguXZ5ceK1JQM1fk8SSQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1964',
        'data' => [
            'bar' => '1'
        ],
        'validated' => [
            'bar' => '1'
        ],
        'rules' => [
            'bar' => 'required_unless:foo,true'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,true'
            ]
        ]
    ],
    '0pF9e-oaLsnUV3zZU6zLng' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1972',
        'data' => [],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,null'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,null'
            ]
        ]
    ],
    'TrHdcJmnJdATH3JlgZZ9Wg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1980',
        'data' => [
            'foo' => '0'
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,0'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,0'
            ]
        ]
    ],
    '_fjl2AzvCZVqzPEeu2z5Bw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1984',
        'data' => [
            'foo' => 0
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,0'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,0'
            ]
        ]
    ],
    'UEZrZxzmkj9VFmmtQJ5J-w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1988',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,1'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,1'
            ]
        ]
    ],
    'cF7r8vvQU7KIjKqb9LKW0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testRequiredUnless:1992',
        'data' => [
            'foo' => 1
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'required_unless:foo,1'
        ],
        'expandedRules' => [
            'bar' => [
                'required_unless:foo,1'
            ]
        ]
    ],
    'kaEg8lVNgt-AL0yQuW-kyA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibited:2007',
        'data' => [],
        'validated' => [],
        'rules' => [
            'name' => 'prohibited'
        ],
        'expandedRules' => [
            'name' => [
                'prohibited'
            ]
        ]
    ],
    'OsV2wrektn0DQtvq1Fikrw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibited:2010',
        'data' => [
            'last' => 'bar'
        ],
        'validated' => [],
        'rules' => [
            'name' => 'prohibited'
        ],
        'expandedRules' => [
            'name' => [
                'prohibited'
            ]
        ]
    ],
    'VrvVeUPkILj8S2MmJP-QMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibited:2017',
        'data' => [
            'name' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'name' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'name' => 'prohibited'
        ],
        'expandedRules' => [
            'name' => [
                'prohibited'
            ]
        ]
    ],
    'Obc95DG45_khIDm012K7MQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedIf:2040',
        'data' => [
            'first' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'prohibited_if:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_if:first,taylor'
            ]
        ]
    ],
    'RRYMIHd4f_CEwHzafsGo8w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedIf:2048',
        'data' => [
            'first' => 'taylor'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'prohibited_if:first,taylor,jess'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_if:first,taylor,jess'
            ]
        ]
    ],
    'VZ58PQv3YccOPMfWIYbJvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedIf:2052',
        'data' => [
            'foo' => true,
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'prohibited_if:foo,false'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if:foo,false'
            ]
        ]
    ],
    'iaEDQLNluy269uvo1ds0ig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedAcceptedIf:2074',
        'data' => [
            'foo' => 'on',
            'bar' => ''
        ],
        'validated' => [
            'bar' => ''
        ],
        'rules' => [
            'bar' => 'prohibited_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_accepted:foo'
            ]
        ]
    ],
    'p-bmaNG9VkFLK86JJ5eWHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedAcceptedIf:2082',
        'data' => [
            'foo' => 1,
            'bar' => null
        ],
        'validated' => [
            'bar' => null
        ],
        'rules' => [
            'bar' => 'prohibited_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_accepted:foo'
            ]
        ]
    ],
    '6OU46OOMjRlsmtIxrUBttw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedAcceptedIf:2090',
        'data' => [
            'foo' => true
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'prohibited_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_accepted:foo'
            ]
        ]
    ],
    'R7OzjCfdVGJBRExeVtVlRg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedDeclinedIf:2108',
        'data' => [
            'foo' => 'off',
            'bar' => ''
        ],
        'validated' => [
            'bar' => ''
        ],
        'rules' => [
            'bar' => 'prohibited_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_declined:foo'
            ]
        ]
    ],
    'ORVUZkOHi3OMlJSeOq_HsA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedDeclinedIf:2116',
        'data' => [
            'foo' => 0,
            'bar' => null
        ],
        'validated' => [
            'bar' => null
        ],
        'rules' => [
            'bar' => 'prohibited_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_declined:foo'
            ]
        ]
    ],
    'R29WtA1nAm7LkB_uJ5EWzw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateProhibitedDeclinedIf:2124',
        'data' => [
            'foo' => false
        ],
        'validated' => [],
        'rules' => [
            'bar' => 'prohibited_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_if_declined:foo'
            ]
        ]
    ],
    'g1gYmk7KC8QPcOanffr-1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedUnless:2142',
        'data' => [
            'first' => 'taylor',
            'last' => 'otwell'
        ],
        'validated' => [
            'last' => 'otwell'
        ],
        'rules' => [
            'last' => 'prohibited_unless:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_unless:first,taylor'
            ]
        ]
    ],
    '4czy95JWjinlInBwdBsZjQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedUnless:2146',
        'data' => [
            'first' => 'jess'
        ],
        'validated' => [],
        'rules' => [
            'last' => 'prohibited_unless:first,taylor'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_unless:first,taylor'
            ]
        ]
    ],
    'n7zLWMA8sowgJarWn14-pg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedUnless:2150',
        'data' => [
            'first' => 'taylor',
            'last' => 'otwell'
        ],
        'validated' => [
            'last' => 'otwell'
        ],
        'rules' => [
            'last' => 'prohibited_unless:first,taylor,jess'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_unless:first,taylor,jess'
            ]
        ]
    ],
    '7HuyHUBIM9YWE_nEtIKl6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedUnless:2154',
        'data' => [
            'first' => 'jess',
            'last' => 'archer'
        ],
        'validated' => [
            'last' => 'archer'
        ],
        'rules' => [
            'last' => 'prohibited_unless:first,taylor,jess'
        ],
        'expandedRules' => [
            'last' => [
                'prohibited_unless:first,taylor,jess'
            ]
        ]
    ],
    '6wKUuw7_uB4yjwFbFUFJXA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedUnless:2158',
        'data' => [
            'foo' => false,
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'prohibited_unless:foo,false'
        ],
        'expandedRules' => [
            'bar' => [
                'prohibited_unless:foo,false'
            ]
        ]
    ],
    'zfP66UsDsmvYusiN4gVSHQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibits:2180',
        'data' => [
            'email' => 'foo',
            'emails' => []
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'prohibits:emails'
        ],
        'expandedRules' => [
            'email' => [
                'prohibits:emails'
            ]
        ]
    ],
    'Gx8lAWT2dZo1wsbmexVQ-w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibits:2184',
        'data' => [
            'email' => 'foo',
            'emails' => ''
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'prohibits:emails'
        ],
        'expandedRules' => [
            'email' => [
                'prohibits:emails'
            ]
        ]
    ],
    'eOpqGQvdf0WqjdkE2NtOIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibits:2188',
        'data' => [
            'email' => 'foo',
            'emails' => null
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'prohibits:emails'
        ],
        'expandedRules' => [
            'email' => [
                'prohibits:emails'
            ]
        ]
    ],
    'OUvtUnVS4M9F8rIbiwtmvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibits:2200',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'prohibits:emails'
        ],
        'expandedRules' => [
            'email' => [
                'prohibits:emails'
            ]
        ]
    ],
    'DiM4Uf25S47GZ7l4GB2dHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibits:2204',
        'data' => [
            'email' => 'foo',
            'other' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'prohibits:email_address,emails'
        ],
        'expandedRules' => [
            'email' => [
                'prohibits:email_address,emails'
            ]
        ]
    ],
    'tXyQCbU5lOgTI-9bFj1Rtw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [],
        'validated' => [],
        'rules' => [
            'p' => 'prohibited'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited'
            ]
        ]
    ],
    'MqOM_013LOm06mhX-wDYMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'p' => ''
        ],
        'validated' => [
            'p' => ''
        ],
        'rules' => [
            'p' => 'prohibited'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited'
            ]
        ]
    ],
    'rOHe_8mQz1AMOquudnlymg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'p' => ' '
        ],
        'validated' => [
            'p' => ' '
        ],
        'rules' => [
            'p' => 'prohibited'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited'
            ]
        ]
    ],
    'yxItj-0FXnhssQ9UPsUupg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'p' => null
        ],
        'validated' => [
            'p' => null
        ],
        'rules' => [
            'p' => 'prohibited'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited'
            ]
        ]
    ],
    'vwhRSH1vKW-NwGrhb8mLWg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'p' => []
        ],
        'validated' => [
            'p' => []
        ],
        'rules' => [
            'p' => 'prohibited'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited'
            ]
        ]
    ],
    'ADnJQBcmzVbkMzNbxcWXZg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 1
        ],
        'validated' => [],
        'rules' => [
            'p' => 'prohibited_if:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_if:bar,1'
            ]
        ]
    ],
    'HiX-ytEA9yI-oE4jYdO1eg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 1,
            'p' => ''
        ],
        'validated' => [
            'p' => ''
        ],
        'rules' => [
            'p' => 'prohibited_if:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_if:bar,1'
            ]
        ]
    ],
    'uoskISXPtc5VEe-zhKas6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 1,
            'p' => ' '
        ],
        'validated' => [
            'p' => ' '
        ],
        'rules' => [
            'p' => 'prohibited_if:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_if:bar,1'
            ]
        ]
    ],
    '6TSPWfXqHXB29ramxRTdXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 1,
            'p' => null
        ],
        'validated' => [
            'p' => null
        ],
        'rules' => [
            'p' => 'prohibited_if:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_if:bar,1'
            ]
        ]
    ],
    'WpebPkUfPQiIyLIxLhmU2A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 1,
            'p' => []
        ],
        'validated' => [
            'p' => []
        ],
        'rules' => [
            'p' => 'prohibited_if:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_if:bar,1'
            ]
        ]
    ],
    '-qEzPi3swx2yrYB_hHoInw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2
        ],
        'validated' => [],
        'rules' => [
            'p' => 'prohibited_unless:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_unless:bar,1'
            ]
        ]
    ],
    'xpgTVYHDUjS44wa6UAfIQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => ''
        ],
        'validated' => [
            'p' => ''
        ],
        'rules' => [
            'p' => 'prohibited_unless:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_unless:bar,1'
            ]
        ]
    ],
    'Mm7S3_WSv6fPVHQyKSB4XA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => ' '
        ],
        'validated' => [
            'p' => ' '
        ],
        'rules' => [
            'p' => 'prohibited_unless:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_unless:bar,1'
            ]
        ]
    ],
    'dJQ_pEhI41TFF5q61QOCFQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => null
        ],
        'validated' => [
            'p' => null
        ],
        'rules' => [
            'p' => 'prohibited_unless:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_unless:bar,1'
            ]
        ]
    ],
    '2-Fh1VJ9f6kLa_Dn1HwEew' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => []
        ],
        'validated' => [
            'p' => []
        ],
        'rules' => [
            'p' => 'prohibited_unless:bar,1'
        ],
        'expandedRules' => [
            'p' => [
                'prohibited_unless:bar,1'
            ]
        ]
    ],
    'SUmD6b-lqO0UWTUH2WorzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [],
        'validated' => [],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    '3g5nzZxlnyv_eRH3s5bVCQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => ''
        ],
        'validated' => [
            'p' => ''
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'nGGD0hCs5iEu4QLJdmowuw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => ' '
        ],
        'validated' => [
            'p' => ' '
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'U85DNGsSUkKCtX7J6lORpQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => null
        ],
        'validated' => [
            'p' => null
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'DHTI44gsCW29hf_0J9F4IQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => 2,
            'p' => []
        ],
        'validated' => [
            'p' => []
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'MocnA5l1SoJMt0fY4Tkh7w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'p' => 'foo'
        ],
        'validated' => [
            'p' => 'foo'
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    '1Dl8MpxgGQcbM5wm0gC2dw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => '',
            'p' => 'foo'
        ],
        'validated' => [
            'p' => 'foo'
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'h1-KBsT8l2lyu11S1aKMYg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => ' ',
            'p' => 'foo'
        ],
        'validated' => [
            'p' => 'foo'
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'QLLYL2tNh7am-_NZsblT3Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => null,
            'p' => 'foo'
        ],
        'validated' => [
            'p' => 'foo'
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'dufowv4P9CwCVzX4JjzgzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testProhibitedRulesAreConsistent:2229',
        'data' => [
            'bar' => [],
            'p' => 'foo'
        ],
        'validated' => [
            'p' => 'foo'
        ],
        'rules' => [
            'p' => 'prohibits:bar'
        ],
        'expandedRules' => [
            'p' => [
                'prohibits:bar'
            ]
        ]
    ],
    'bbRdSsGLAwfDTM2axAPyJQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInArray:2343',
        'data' => [
            'foo' => [
                1,
                2
            ],
            'bar' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2
            ]
        ],
        'rules' => [
            'foo.*' => 'in_array:bar.*'
        ],
        'expandedRules' => [
            'foo.0' => [
                'in_array:bar.*'
            ],
            'foo.1' => [
                'in_array:bar.*'
            ]
        ]
    ],
    'eI5tNBiEfWVRE5mUJs5tBw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInArray:2351',
        'data' => [
            'foo' => [
                [
                    'bar_id' => 1
                ],
                [
                    'bar_id' => 2
                ]
            ],
            'bar' => [
                [
                    'id' => 1,
                    0 => [
                        'id' => 2
                    ]
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'bar_id' => 1
                ],
                [
                    'bar_id' => 2
                ]
            ]
        ],
        'rules' => [
            'foo.*.bar_id' => 'in_array:bar.*.id'
        ],
        'expandedRules' => [
            'foo.0.bar_id' => [
                'in_array:bar.*.id'
            ],
            'foo.1.bar_id' => [
                'in_array:bar.*.id'
            ]
        ]
    ],
    'Ojw8Zc1jmYWwwRnqFzpDBA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2362',
        'data' => [
            'color' => '#FFF'
        ],
        'validated' => [
            'color' => '#FFF'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    'ANc4XfMgBgm-Ff9jB_X08Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2364',
        'data' => [
            'color' => '#FFFF'
        ],
        'validated' => [
            'color' => '#FFFF'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    'edRQpBqOu14JTeY6OwCPPg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2366',
        'data' => [
            'color' => '#FFFFFF'
        ],
        'validated' => [
            'color' => '#FFFFFF'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    'x4qJv-DfvYX7TBdTxhsm1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2368',
        'data' => [
            'color' => '#FF000080'
        ],
        'validated' => [
            'color' => '#FF000080'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    'M8fLo8P_BW29GlWY-Pmmsw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2370',
        'data' => [
            'color' => '#FF000080'
        ],
        'validated' => [
            'color' => '#FF000080'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    'eFAQqMRNaeE-Q5lrR6AeZg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateHexColor:2372',
        'data' => [
            'color' => '#00FF0080'
        ],
        'validated' => [
            'color' => '#00FF0080'
        ],
        'rules' => [
            'color' => 'hex_color'
        ],
        'expandedRules' => [
            'color' => [
                'hex_color'
            ]
        ]
    ],
    '4Tm-MXsUOVrTRB8zgaBq3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateConfirmed:2399',
        'data' => [
            'password' => 'foo',
            'password_confirmation' => 'foo'
        ],
        'validated' => [
            'password' => 'foo'
        ],
        'rules' => [
            'password' => 'Confirmed'
        ],
        'expandedRules' => [
            'password' => [
                'Confirmed'
            ]
        ]
    ],
    '-Xfsi9XD50si6kJDGCOLxA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateConfirmed:2405',
        'data' => [
            'password' => 'foo',
            'passwordConfirmation' => 'foo'
        ],
        'validated' => [
            'password' => 'foo'
        ],
        'rules' => [
            'password' => 'Confirmed:passwordConfirmation'
        ],
        'expandedRules' => [
            'password' => [
                'Confirmed:passwordConfirmation'
            ]
        ]
    ],
    'Aa18qFtB8oV-doQ1xEfveA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSame:2421',
        'data' => [
            'foo' => 'bar',
            'baz' => 'bar'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Same:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Same:baz'
            ]
        ]
    ],
    'PRzfuN4B4qVkUT49fos8zw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSame:2427',
        'data' => [
            'foo' => null,
            'baz' => null
        ],
        'validated' => [
            'foo' => null
        ],
        'rules' => [
            'foo' => 'Same:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Same:baz'
            ]
        ]
    ],
    'LxYZ5Q2Nz461X7aY_g_GOA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2434',
        'data' => [
            'foo' => 'bar',
            'baz' => 'boom'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Different:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:baz'
            ]
        ]
    ],
    'oqgjoEjuUmVsSjTUi3-qAw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2437',
        'data' => [
            'foo' => 'bar',
            'baz' => null
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Different:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:baz'
            ]
        ]
    ],
    'HL1cRFT_m3dxfvzVIvZhEw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2440',
        'data' => [
            'foo' => 'bar'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Different:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:baz'
            ]
        ]
    ],
    'MsLW-dRquwfIZKJ-OcoxOA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2446',
        'data' => [
            'foo' => '1e2',
            'baz' => '100'
        ],
        'validated' => [
            'foo' => '1e2'
        ],
        'rules' => [
            'foo' => 'Different:baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:baz'
            ]
        ]
    ],
    'sy9sh54zIv0Bx_d4L6DLIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2449',
        'data' => [
            'foo' => 'bar',
            'fuu' => 'baa',
            'baz' => 'boom'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Different:fuu,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:fuu,baz'
            ]
        ]
    ],
    'zEhOmoDGN9Ob_GBMlZ-duQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDifferent:2452',
        'data' => [
            'foo' => 'bar',
            'baz' => 'boom'
        ],
        'validated' => [
            'foo' => 'bar'
        ],
        'rules' => [
            'foo' => 'Different:fuu,baz'
        ],
        'expandedRules' => [
            'foo' => [
                'Different:fuu,baz'
            ]
        ]
    ],
    'n0hL3IMNYwqIc1sKIPM0wA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2462',
        'data' => [
            'lhs' => 15,
            'rhs' => 10
        ],
        'validated' => [
            'lhs' => 15
        ],
        'rules' => [
            'lhs' => 'numeric|gt:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:rhs'
            ]
        ]
    ],
    'B16MVkAkmhvEL8RE6MQU8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2468',
        'data' => [
            'lhs' => 15.0,
            'rhs' => 10
        ],
        'validated' => [
            'lhs' => 15.0
        ],
        'rules' => [
            'lhs' => 'numeric|gt:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:rhs'
            ]
        ]
    ],
    'FByqtUP16rgzgX3pdGEQaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2471',
        'data' => [
            'lhs' => '15',
            'rhs' => 10
        ],
        'validated' => [
            'lhs' => '15'
        ],
        'rules' => [
            'lhs' => 'numeric|gt:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:rhs'
            ]
        ]
    ],
    '5khXZBcNUw2AUopw1KrMXQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2477',
        'data' => [
            'lhs' => 15.0
        ],
        'validated' => [
            'lhs' => 15.0
        ],
        'rules' => [
            'lhs' => 'numeric|gt:10'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:10'
            ]
        ]
    ],
    '3b4mz8pE33dGdqy79gl2Xw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2483',
        'data' => [
            'lhs' => '15'
        ],
        'validated' => [
            'lhs' => '15'
        ],
        'rules' => [
            'lhs' => 'numeric|gt:10'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:10'
            ]
        ]
    ],
    '-oDAFc1LNQyAVxAvdstRPQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2486',
        'data' => [
            'lhs' => 'longer string',
            'rhs' => 'string'
        ],
        'validated' => [
            'lhs' => 'longer string'
        ],
        'rules' => [
            'lhs' => 'gt:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'gt:rhs'
            ]
        ]
    ],
    'x70iUdQJx2-gu-88XhARuw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThan:2499',
        'data' => [
            'lhs' => 15
        ],
        'validated' => [
            'lhs' => 15
        ],
        'rules' => [
            'lhs' => 'numeric|gt:10'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gt:10'
            ]
        ]
    ],
    'CC2eLTYwVcKVPN6zOuNFnQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testLessThan:2584',
        'data' => [
            'lhs' => [
                'string'
            ],
            'rhs' => [
                1,
                'string'
            ]
        ],
        'validated' => [
            'lhs' => [
                'string'
            ]
        ],
        'rules' => [
            'lhs' => 'lt:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'lt:rhs'
            ]
        ]
    ],
    'w__iq7V9t88w305qf4HI7w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2601',
        'data' => [
            'lhs' => 15,
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => 15
        ],
        'rules' => [
            'lhs' => 'numeric|gte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:rhs'
            ]
        ]
    ],
    '3SQg6k4-2hygp84OFIBS9w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2607',
        'data' => [
            'lhs' => 15.0,
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => 15.0
        ],
        'rules' => [
            'lhs' => 'numeric|gte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:rhs'
            ]
        ]
    ],
    'Z8oko2eXaP9IUZOmfSM75g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2610',
        'data' => [
            'lhs' => '15',
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => '15'
        ],
        'rules' => [
            'lhs' => 'numeric|gte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:rhs'
            ]
        ]
    ],
    'jKLWzsTMITVv4XGHxoCXHQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2616',
        'data' => [
            'lhs' => 15.0
        ],
        'validated' => [
            'lhs' => 15.0
        ],
        'rules' => [
            'lhs' => 'numeric|gte:15'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:15'
            ]
        ]
    ],
    'MYfydUXwFdaJlkKD-kImNg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2619',
        'data' => [
            'lhs' => '15'
        ],
        'validated' => [
            'lhs' => '15'
        ],
        'rules' => [
            'lhs' => 'numeric|gte:15'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:15'
            ]
        ]
    ],
    '4YJlK--1yOeEPLTyeJ9Feg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2622',
        'data' => [
            'lhs' => 'longer string',
            'rhs' => 'string'
        ],
        'validated' => [
            'lhs' => 'longer string'
        ],
        'rules' => [
            'lhs' => 'gte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'gte:rhs'
            ]
        ]
    ],
    'ctacOf48rUqAmdiWhbn9SQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testGreaterThanOrEqual:2635',
        'data' => [
            'lhs' => 15
        ],
        'validated' => [
            'lhs' => 15
        ],
        'rules' => [
            'lhs' => 'numeric|gte:15'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'gte:15'
            ]
        ]
    ],
    'kMpBNRYuEsO9RdKWP8WuRw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testLessThanOrEqual:2642',
        'data' => [
            'lhs' => 15,
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => 15
        ],
        'rules' => [
            'lhs' => 'numeric|lte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'lte:rhs'
            ]
        ]
    ],
    'X9VJZOjIcQUlLPMxHgWbpA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testLessThanOrEqual:2648',
        'data' => [
            'lhs' => 15.0,
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => 15.0
        ],
        'rules' => [
            'lhs' => 'numeric|lte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'lte:rhs'
            ]
        ]
    ],
    'C3SjWmnaUOf6J3jW_X8TnA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testLessThanOrEqual:2651',
        'data' => [
            'lhs' => '15',
            'rhs' => 15
        ],
        'validated' => [
            'lhs' => '15'
        ],
        'rules' => [
            'lhs' => 'numeric|lte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'numeric',
                'lte:rhs'
            ]
        ]
    ],
    'tosuAs5Qc-6IR2USa4Yh9Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testLessThanOrEqual:2666',
        'data' => [
            'lhs' => [
                'string'
            ],
            'rhs' => [
                1,
                'string'
            ]
        ],
        'validated' => [
            'lhs' => [
                'string'
            ]
        ],
        'rules' => [
            'lhs' => 'lte:rhs'
        ],
        'expandedRules' => [
            'lhs' => [
                'lte:rhs'
            ]
        ]
    ],
    'UiFKDGPKPYbgyYOpyoDGAA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2707',
        'data' => [
            'foo' => 'yes'
        ],
        'validated' => [
            'foo' => 'yes'
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    '7r1bq_9Yq7q-Em7b7-Yv0Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2710',
        'data' => [
            'foo' => 'on'
        ],
        'validated' => [
            'foo' => 'on'
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    'gyPCsvA2O2GkKxP1b6RqFQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2713',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    '3UVUfYdYNNG-5gRnvmszHw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2716',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    'D8MyIBrb04h5IkGxCdq96w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2719',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    'DTPnWgYtLw8J1MxMcN_iKw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAccepted:2722',
        'data' => [
            'foo' => 'true'
        ],
        'validated' => [
            'foo' => 'true'
        ],
        'rules' => [
            'foo' => 'Accepted'
        ],
        'expandedRules' => [
            'foo' => [
                'Accepted'
            ]
        ]
    ],
    'X9bsDjcr1TrDhklgKcEyuA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredAcceptedIf:2729',
        'data' => [
            'foo' => 'no',
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'required_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_accepted:foo'
            ]
        ]
    ],
    'rdJk6BeezIHcF7ymtI1b9w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredAcceptedIf:2732',
        'data' => [
            'foo' => 'yes',
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'required_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_accepted:foo'
            ]
        ]
    ],
    'IEVUGbmottsQtYXeP6RTCA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredAcceptedIf:2735',
        'data' => [
            'foo' => 'no',
            'bar' => ''
        ],
        'validated' => [
            'bar' => ''
        ],
        'rules' => [
            'bar' => 'required_if_accepted:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_accepted:foo'
            ]
        ]
    ],
    'r3Hw7hvKlqsbGE-672dKtA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2766',
        'data' => [
            'foo' => 'yes',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'yes'
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    'AlfS2-DBYzmPblg0Y9KdpQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2769',
        'data' => [
            'foo' => 'on',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'on'
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    'rCE2u3PBT84da0qjq1CT0g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2772',
        'data' => [
            'foo' => '1',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    '__-FWW_4fqLChkv58KdrrA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2775',
        'data' => [
            'foo' => 1,
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    'KPKkRQJi6knRv2NjFI2GBg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2778',
        'data' => [
            'foo' => true,
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    'vGB7B4WKeVjZRuNdgRhSPw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAcceptedIf:2781',
        'data' => [
            'foo' => 'true',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'true'
        ],
        'rules' => [
            'foo' => 'accepted_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'accepted_if:bar,aaa'
            ]
        ]
    ],
    'HbeUBIQ4Q1F8yZZlGfogYQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredIfDeclined:2819',
        'data' => [
            'foo' => 'yes',
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'required_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_declined:foo'
            ]
        ]
    ],
    '73YHtdl-Go-zFTHD81CasA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredIfDeclined:2822',
        'data' => [
            'foo' => 'no',
            'bar' => 'baz'
        ],
        'validated' => [
            'bar' => 'baz'
        ],
        'rules' => [
            'bar' => 'required_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_declined:foo'
            ]
        ]
    ],
    'sydf88Xrnr6JxvXpLRhIxQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRequiredIfDeclined:2825',
        'data' => [
            'foo' => 'yes',
            'bar' => ''
        ],
        'validated' => [
            'bar' => ''
        ],
        'rules' => [
            'bar' => 'required_if_declined:foo'
        ],
        'expandedRules' => [
            'bar' => [
                'required_if_declined:foo'
            ]
        ]
    ],
    'Oni--QkzlCPisktOP046Og' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2859',
        'data' => [
            'foo' => 'no'
        ],
        'validated' => [
            'foo' => 'no'
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'MoG5CzbBS-OErSfTznBYHQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2862',
        'data' => [
            'foo' => 'off'
        ],
        'validated' => [
            'foo' => 'off'
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'Ar_0tru-I-nsXwvu06aV6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2865',
        'data' => [
            'foo' => '0'
        ],
        'validated' => [
            'foo' => '0'
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'MDO0ZOOTtIMbxpRN81POsw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2868',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'iOKrjl9GJ65fG4wh9AeaSw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2871',
        'data' => [
            'foo' => false
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'qTTkFqP4hqAVnuBKbW4S_w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclined:2874',
        'data' => [
            'foo' => 'false'
        ],
        'validated' => [
            'foo' => 'false'
        ],
        'rules' => [
            'foo' => 'Declined'
        ],
        'expandedRules' => [
            'foo' => [
                'Declined'
            ]
        ]
    ],
    'tkHFv4xoc5tfiPY1tETY4A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissing:2913',
        'data' => [
            'bar' => 'bar'
        ],
        'validated' => [],
        'rules' => [
            'foo' => 'missing'
        ],
        'expandedRules' => [
            'foo' => [
                'missing'
            ]
        ]
    ],
    'RMBCq_FgC0nLSHN1bwR4Qg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingIf:2952',
        'data' => [
            'foo' => 'foo',
            'bar' => '2'
        ],
        'validated' => [
            'foo' => 'foo'
        ],
        'rules' => [
            'foo' => 'missing_if:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_if:bar,1'
            ]
        ]
    ],
    'limNBXFLJcSoyZJTSgnrBw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingUnless:2995',
        'data' => [
            'foo' => 'foo',
            'bar' => '1'
        ],
        'validated' => [
            'foo' => 'foo'
        ],
        'rules' => [
            'foo' => 'missing_unless:bar,1'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_unless:bar,1'
            ]
        ]
    ],
    'LktQrOE2bBUs_nW0GUfytw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingWith:3008',
        'data' => [
            'bar' => '2'
        ],
        'validated' => [],
        'rules' => [
            'foo' => 'missing_with:baz,bar'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_with:baz,bar'
            ]
        ]
    ],
    'qnwX5lTW8PiB4bVmvFHG7Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingWith:3041',
        'data' => [
            'foo' => 'foo',
            'qux' => '1'
        ],
        'validated' => [
            'foo' => 'foo'
        ],
        'rules' => [
            'foo' => 'missing_with:baz,bar'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_with:baz,bar'
            ]
        ]
    ],
    'DUuK6FlIvPX2CQhwUnULsA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingWithAll:3054',
        'data' => [
            'bar' => '2',
            'baz' => '2'
        ],
        'validated' => [],
        'rules' => [
            'foo' => 'missing_with_all:baz,bar'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_with_all:baz,bar'
            ]
        ]
    ],
    '7_vOhI6eNCNCm1nWaZ2OZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMissingWithAll:3087',
        'data' => [
            'foo' => [],
            'bar' => '2',
            'qux' => '2'
        ],
        'validated' => [
            'foo' => []
        ],
        'rules' => [
            'foo' => 'missing_with_all:baz,bar'
        ],
        'expandedRules' => [
            'foo' => [
                'missing_with_all:baz,bar'
            ]
        ]
    ],
    'Oxqn3kfEpP2REUIcRwJ81A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3119',
        'data' => [
            'foo' => 'no',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'no'
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    '1McUJOY0No4fRtD9e0OOhQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3122',
        'data' => [
            'foo' => 'off',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'off'
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    'C0qGBMea9gDzv1gwWrRHZw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3125',
        'data' => [
            'foo' => 0,
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    'wOZRUR1W9do8pAnvnpUt2w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3128',
        'data' => [
            'foo' => '0',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => '0'
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    'DgQ2uInBrk5hhdhD_HTMCg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3131',
        'data' => [
            'foo' => false,
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    'zzoho-ze4Zxw8SXLAHd33g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDeclinedIf:3134',
        'data' => [
            'foo' => 'false',
            'bar' => 'aaa'
        ],
        'validated' => [
            'foo' => 'false'
        ],
        'rules' => [
            'foo' => 'declined_if:bar,aaa'
        ],
        'expandedRules' => [
            'foo' => [
                'declined_if:bar,aaa'
            ]
        ]
    ],
    't3i-Nktd7CDuy3I_s5coFg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEndsWith:3176',
        'data' => [
            'x' => 'hello world'
        ],
        'validated' => [
            'x' => 'hello world'
        ],
        'rules' => [
            'x' => 'ends_with:world'
        ],
        'expandedRules' => [
            'x' => [
                'ends_with:world'
            ]
        ]
    ],
    'OwPQorUqoFlNXjCUnWH8-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEndsWith:3180',
        'data' => [
            'x' => 'hello world'
        ],
        'validated' => [
            'x' => 'hello world'
        ],
        'rules' => [
            'x' => 'ends_with:world,hello'
        ],
        'expandedRules' => [
            'x' => [
                'ends_with:world,hello'
            ]
        ]
    ],
    'KPqovhohzQNbvLYxnoCL6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDoesntEndWith:3199',
        'data' => [
            'x' => 'hello world'
        ],
        'validated' => [
            'x' => 'hello world'
        ],
        'rules' => [
            'x' => 'doesnt_end_with:hello'
        ],
        'expandedRules' => [
            'x' => [
                'doesnt_end_with:hello'
            ]
        ]
    ],
    'UCc-KbRCROww7_BZcrxYQQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateStartsWith:3210',
        'data' => [
            'x' => 'hello world'
        ],
        'validated' => [
            'x' => 'hello world'
        ],
        'rules' => [
            'x' => 'starts_with:hello'
        ],
        'expandedRules' => [
            'x' => [
                'starts_with:hello'
            ]
        ]
    ],
    'tyN_j3MW3s4VPHGzvWfnWQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateStartsWith:3218',
        'data' => [
            'x' => 'hello world'
        ],
        'validated' => [
            'x' => 'hello world'
        ],
        'rules' => [
            'x' => 'starts_with:world,hello'
        ],
        'expandedRules' => [
            'x' => [
                'starts_with:world,hello'
            ]
        ]
    ],
    'v0mzx9Bj-xcv--pspffFbg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMaxDigitsDoesNotThrowOnNonStringValue:3282',
        'data' => [
            'x' => 123
        ],
        'validated' => [
            'x' => 123
        ],
        'rules' => [
            'x' => 'max_digits:5'
        ],
        'expandedRules' => [
            'x' => [
                'max_digits:5'
            ]
        ]
    ],
    'A6tjMarf9Zh_-zBGiLcuYQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMinDigitsDoesNotThrowOnNonStringValue:3295',
        'data' => [
            'x' => 123
        ],
        'validated' => [
            'x' => 123
        ],
        'rules' => [
            'x' => 'min_digits:2'
        ],
        'expandedRules' => [
            'x' => [
                'min_digits:2'
            ]
        ]
    ],
    '4ELsChLySqOF5BeR3cupig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDoesntStartWith:3312',
        'data' => [
            'x' => 'world hello'
        ],
        'validated' => [
            'x' => 'world hello'
        ],
        'rules' => [
            'x' => 'doesnt_start_with:hello'
        ],
        'expandedRules' => [
            'x' => [
                'doesnt_start_with:hello'
            ]
        ]
    ],
    'AVkGZkRuMvjaYlkW49-T3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateString:3323',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => 'string'
        ],
        'expandedRules' => [
            'x' => [
                'string'
            ]
        ]
    ],
    '6-y85wrMOpM2HuEsjbvYQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateJson:3338',
        'data' => [
            'foo' => '[]'
        ],
        'validated' => [
            'foo' => '[]'
        ],
        'rules' => [
            'foo' => 'json'
        ],
        'expandedRules' => [
            'foo' => [
                'json'
            ]
        ]
    ],
    'dDX0cgRDrlsQmy1f3FJ0WQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateJson:3342',
        'data' => [
            'foo' => '{"name":"John","age":"34"}'
        ],
        'validated' => [
            'foo' => '{"name":"John","age":"34"}'
        ],
        'rules' => [
            'foo' => 'json'
        ],
        'expandedRules' => [
            'foo' => [
                'json'
            ]
        ]
    ],
    'PC69vx1L5mTElK35cJvDZg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3373',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'AcStFGr6c81dajT56odGeg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3376',
        'data' => [
            'foo' => false
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'RZbEfJmUn9ql-u2UkiKnag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3379',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'zB7EwfU9oP5N8CJNiRF0LA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3382',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'e-qh4_GJBfVcklwTDTIVSA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3385',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'f06zcLm-v-P4glUSEhMCkQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3388',
        'data' => [
            'foo' => '0'
        ],
        'validated' => [
            'foo' => '0'
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    '6ZXI9yx_kyT02EvFHlHcrg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolean:3391',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'Boolean'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean'
            ]
        ]
    ],
    'oef2lcUbPPG0Q3lIwmZQLA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBooleanStrict:3399',
        'data' => [
            'foo' => false
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'Boolean:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean:strict'
            ]
        ]
    ],
    'WTu5u04xZjOfydR1R1PIYg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBooleanStrict:3402',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'Boolean:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean:strict'
            ]
        ]
    ],
    'fWevocRzUSDr-XVrFLoL5A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBooleanStrict:3417',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'Boolean:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Boolean:strict'
            ]
        ]
    ],
    'pgYZUiXezMfiMwSO2Cy_YQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3448',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    'nF73-bW7fEXSbEqoDY8ugQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3451',
        'data' => [
            'foo' => false
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    '1z5Q-1vVYDuL3Cpjs1NoXA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3454',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    '_o00wvIch9SAiSnwLtdvmw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3457',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    'O4rMvRYMT6vFzYKWaeKYdA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3460',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    'juWIB6lOv5V3YYA872BbKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3463',
        'data' => [
            'foo' => '0'
        ],
        'validated' => [
            'foo' => '0'
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    'f6M1ZsMBgPKFFl8sdfheAg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBool:3466',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'Bool'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool'
            ]
        ]
    ],
    'bip9r-vYQTw7y6PThPe_Jw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolStrict:3474',
        'data' => [
            'foo' => false
        ],
        'validated' => [
            'foo' => false
        ],
        'rules' => [
            'foo' => 'Bool:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool:strict'
            ]
        ]
    ],
    'l-KxFpQzLUb8RymJ6zcyCw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolStrict:3477',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'Bool:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool:strict'
            ]
        ]
    ],
    '2nT4t_MFJy8aVtd4QvuxvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBoolStrict:3492',
        'data' => [],
        'validated' => [],
        'rules' => [
            'foo' => 'Bool:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Bool:strict'
            ]
        ]
    ],
    'nYb7olNF_hPyg1MThhNiEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNumeric:3514',
        'data' => [
            'foo' => '1.23'
        ],
        'validated' => [
            'foo' => '1.23'
        ],
        'rules' => [
            'foo' => 'Numeric'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric'
            ]
        ]
    ],
    'EPhfGmKJ-wCXQr30T72JIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNumeric:3517',
        'data' => [
            'foo' => '-1'
        ],
        'validated' => [
            'foo' => '-1'
        ],
        'rules' => [
            'foo' => 'Numeric'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric'
            ]
        ]
    ],
    'FP1_6bMdUWR0p6LxUUyHrg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNumeric:3520',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Numeric'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric'
            ]
        ]
    ],
    'GJGGs_X82wY7rVJBG4S5aA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNumericStrict:3539',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'Numeric:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric:strict'
            ]
        ]
    ],
    'NK8bP-B5YKTAnUoAuU7Euw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNumericStrict:3542',
        'data' => [
            'foo' => 0.1
        ],
        'validated' => [
            'foo' => 0.1
        ],
        'rules' => [
            'foo' => 'Numeric:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric:strict'
            ]
        ]
    ],
    'fwQl0wCLUPzsgZybztPtjw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInteger:3555',
        'data' => [
            'foo' => '-1'
        ],
        'validated' => [
            'foo' => '-1'
        ],
        'rules' => [
            'foo' => 'Integer'
        ],
        'expandedRules' => [
            'foo' => [
                'Integer'
            ]
        ]
    ],
    '1KZfL10KFYosXNYFJ0GSJQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInteger:3558',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Integer'
        ],
        'expandedRules' => [
            'foo' => [
                'Integer'
            ]
        ]
    ],
    'kQpitW6TyyGT6Hk9_oCRYg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIntegerStrict:3580',
        'data' => [
            'foo' => 1
        ],
        'validated' => [
            'foo' => 1
        ],
        'rules' => [
            'foo' => 'Integer:strict'
        ],
        'expandedRules' => [
            'foo' => [
                'Integer:strict'
            ]
        ]
    ],
    'G4Wfp3_ECUCadq6M88XMGg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3593',
        'data' => [
            'foo' => '1.234'
        ],
        'validated' => [
            'foo' => '1.234'
        ],
        'rules' => [
            'foo' => 'Decimal:2,3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2,3'
            ]
        ]
    ],
    'LNajiWULq6ZTg1OwumNY1g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3596',
        'data' => [
            'foo' => '-1.234'
        ],
        'validated' => [
            'foo' => '-1.234'
        ],
        'rules' => [
            'foo' => 'Decimal:2,3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2,3'
            ]
        ]
    ],
    '0rq9bPY6t0kujiltT10LRA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3599',
        'data' => [
            'foo' => '1.23'
        ],
        'validated' => [
            'foo' => '1.23'
        ],
        'rules' => [
            'foo' => 'Decimal:2,3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2,3'
            ]
        ]
    ],
    'luRGHOE8oZn66mWW8p0duQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3602',
        'data' => [
            'foo' => '+1.23'
        ],
        'validated' => [
            'foo' => '+1.23'
        ],
        'rules' => [
            'foo' => 'Decimal:2,3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2,3'
            ]
        ]
    ],
    'OSHaGDjfAWbfkl7eFxzkpQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3608',
        'data' => [
            'foo' => '1.23'
        ],
        'validated' => [
            'foo' => '1.23'
        ],
        'rules' => [
            'foo' => 'Decimal:2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2'
            ]
        ]
    ],
    'PrXyMKq8bO3DrvSXySIyeQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3611',
        'data' => [
            'foo' => '-1.23'
        ],
        'validated' => [
            'foo' => '-1.23'
        ],
        'rules' => [
            'foo' => 'Decimal:2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:2'
            ]
        ]
    ],
    's-ujZqXZMTz9tpqBH5nhrQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3620',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Decimal:0,1'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,1'
            ]
        ]
    ],
    'kXLEokLzNfQZxm-JgTdTAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3623',
        'data' => [
            'foo' => '1.2'
        ],
        'validated' => [
            'foo' => '1.2'
        ],
        'rules' => [
            'foo' => 'Decimal:0,1'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,1'
            ]
        ]
    ],
    'LLlhpXCSi20YBAtPFB96Ag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3626',
        'data' => [
            'foo' => '-1.2'
        ],
        'validated' => [
            'foo' => '-1.2'
        ],
        'rules' => [
            'foo' => 'Decimal:0,1'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,1'
            ]
        ]
    ],
    '2tSc03T2d-7IoARbvPOiNA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3632',
        'data' => [
            'foo' => '1.8888888888'
        ],
        'validated' => [
            'foo' => '1.8888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:10'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:10'
            ]
        ]
    ],
    '1zN9d5ps8amBtbv7ydVZaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3635',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20'
            ]
        ]
    ],
    'wclrkHXDiykAFp6StLVYVw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3641',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Min:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Min:1.88888888888888888888'
            ]
        ]
    ],
    'YIjYfNwghkabYoXxbcrt4w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3644',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Max:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Max:1.88888888888888888888'
            ]
        ]
    ],
    '09lZ-DIyz-8U53q-uKq3qA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3656',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Size:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Size:1.88888888888888888888'
            ]
        ]
    ],
    'W9n9YbeIIGb8GBCSGB3C3Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3662',
        'data' => [
            'foo' => '1.88888888888888888887'
        ],
        'validated' => [
            'foo' => '1.88888888888888888887'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Between:1.88888888888888888886,1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Between:1.88888888888888888886,1.88888888888888888888'
            ]
        ]
    ],
    'D4Q7a_6L3upbt2aHM0GQHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3668',
        'data' => [
            'foo' => '1.88888888888888888889'
        ],
        'validated' => [
            'foo' => '1.88888888888888888889'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Gt:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Gt:1.88888888888888888888'
            ]
        ]
    ],
    'QLnMQQ6WNeVp97_1xLXTSA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3674',
        'data' => [
            'foo' => '1.88888888888888888889',
            'bar' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888889'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Gt:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Gt:bar'
            ]
        ]
    ],
    'mFvk3UxJJQCeY45QdGF1KA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3680',
        'data' => [
            'foo' => '1.88888888888888888887'
        ],
        'validated' => [
            'foo' => '1.88888888888888888887'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Lt:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Lt:1.88888888888888888888'
            ]
        ]
    ],
    'wx7k4a2ZwvzJzp6IxlBWZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3686',
        'data' => [
            'foo' => '1.88888888888888888887',
            'bar' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888887'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Lt:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Lt:bar'
            ]
        ]
    ],
    '38sjIU8WGLXKrK-U1wpDVw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3692',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Gte:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Gte:1.88888888888888888888'
            ]
        ]
    ],
    'uW7gB65pPS4UM_d1c-JZkA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3698',
        'data' => [
            'foo' => '1.88888888888888888888',
            'bar' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Gte:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Gte:bar'
            ]
        ]
    ],
    'LkqerjYz23Hp78BJbtWy3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3704',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Lte:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Lte:1.88888888888888888888'
            ]
        ]
    ],
    'ztRHxZoBSVC9luVsprYrYg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3710',
        'data' => [
            'foo' => '1.88888888888888888888',
            'bar' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Lte:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Lte:bar'
            ]
        ]
    ],
    'UR2QHYT3-5Tg2kwEVrqvOQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3716',
        'data' => [
            'foo' => '1.88888888888888888888'
        ],
        'validated' => [
            'foo' => '1.88888888888888888888'
        ],
        'rules' => [
            'foo' => 'Decimal:20|Max:1.88888888888888888888'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:20',
                'Max:1.88888888888888888888'
            ]
        ]
    ],
    'K97gCHx9GX7LCTiklIU3jg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3746',
        'data' => [
            'foo' => '+123'
        ],
        'validated' => [
            'foo' => '+123'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'H6yJ3qFcFJVGsjBHUblwnA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3748',
        'data' => [
            'foo' => '-123'
        ],
        'validated' => [
            'foo' => '-123'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'fukpCW9-nae8hbhy0oMVqg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3750',
        'data' => [
            'foo' => '+123.'
        ],
        'validated' => [
            'foo' => '+123.'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'ue7vxr0KTt9Kjn6t1MCzaQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3752',
        'data' => [
            'foo' => '-123.'
        ],
        'validated' => [
            'foo' => '-123.'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    '7-epguOi8qhSDSMYnj3n5Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3754',
        'data' => [
            'foo' => '123.'
        ],
        'validated' => [
            'foo' => '123.'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    '6-PZ-RR0FoD_a6HnNYMS3w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3756',
        'data' => [
            'foo' => '123.'
        ],
        'validated' => [
            'foo' => '123.'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'fJCUYTat1VSNutbQVXAbTA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3758',
        'data' => [
            'foo' => '123.34'
        ],
        'validated' => [
            'foo' => '123.34'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'SNg0y-NxFNZaa7VTLMfzAg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3760',
        'data' => [
            'foo' => '123.34'
        ],
        'validated' => [
            'foo' => '123.34'
        ],
        'rules' => [
            'foo' => 'Decimal:0,2'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,2'
            ]
        ]
    ],
    'Dxwssfe7bLUYO8AhMAXHfw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3763',
        'data' => [
            'foo' => 123
        ],
        'validated' => [
            'foo' => 123
        ],
        'rules' => [
            'foo' => 'Decimal:0'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0'
            ]
        ]
    ],
    'oaci1-s4_uFOpjFS3fH0DA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDecimal:3766',
        'data' => [
            'foo' => 1.23
        ],
        'validated' => [
            'foo' => 1.23
        ],
        'rules' => [
            'foo' => 'Decimal:0,3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,3'
            ]
        ]
    ],
    'MUbV9zHNwzuajixJzfyBsg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInt:3779',
        'data' => [
            'foo' => '-1'
        ],
        'validated' => [
            'foo' => '-1'
        ],
        'rules' => [
            'foo' => 'Int'
        ],
        'expandedRules' => [
            'foo' => [
                'Int'
            ]
        ]
    ],
    '45wH59OutmdMSj0VSlAvyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateInt:3782',
        'data' => [
            'foo' => '1'
        ],
        'validated' => [
            'foo' => '1'
        ],
        'rules' => [
            'foo' => 'Int'
        ],
        'expandedRules' => [
            'foo' => [
                'Int'
            ]
        ]
    ],
    'o6Z9MDDG4rZIA0erXL0R2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDigits:3789',
        'data' => [
            'foo' => '12345'
        ],
        'validated' => [
            'foo' => '12345'
        ],
        'rules' => [
            'foo' => 'Digits:5'
        ],
        'expandedRules' => [
            'foo' => [
                'Digits:5'
            ]
        ]
    ],
    'RwVO2bw0_Fb1SFpQc_LkGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDigits:3802',
        'data' => [
            'foo' => '12345'
        ],
        'validated' => [
            'foo' => '12345'
        ],
        'rules' => [
            'foo' => 'digits_between:1,6'
        ],
        'expandedRules' => [
            'foo' => [
                'digits_between:1,6'
            ]
        ]
    ],
    'AQa5Y3yRybWbAPlbPylncw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDigits:3818',
        'data' => [
            'foo' => '12345'
        ],
        'validated' => [
            'foo' => '12345'
        ],
        'rules' => [
            'foo' => 'min_digits:1'
        ],
        'expandedRules' => [
            'foo' => [
                'min_digits:1'
            ]
        ]
    ],
    'OSM_ySZOajrkW0Hzof-whg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDigits:3831',
        'data' => [
            'foo' => '12345'
        ],
        'validated' => [
            'foo' => '12345'
        ],
        'rules' => [
            'foo' => 'max_digits:6'
        ],
        'expandedRules' => [
            'foo' => [
                'max_digits:6'
            ]
        ]
    ],
    'wjTidy-cg1CHLlhaW5MMhg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSize:3850',
        'data' => [
            'foo' => 'anc'
        ],
        'validated' => [
            'foo' => 'anc'
        ],
        'rules' => [
            'foo' => 'Size:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Size:3'
            ]
        ]
    ],
    'ZjXc51L-icPOc1NpS0uvmQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSize:3856',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Numeric|Size:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Size:3'
            ]
        ]
    ],
    'cml-gsRe0J2GbLTlUbbzQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSize:3862',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Decimal:0|Size:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0',
                'Size:3'
            ]
        ]
    ],
    'VPeoR1IumaITT6toMxuj0w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSize:3868',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Integer|Size:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Integer',
                'Size:3'
            ]
        ]
    ],
    'gNIUNmA_sgjjEaNyh_LQnA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSize:3871',
        'data' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'foo' => 'Array|Size:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Array',
                'Size:3'
            ]
        ]
    ],
    '8WQGXe24j-IqYZHFvg2QWw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3894',
        'data' => [
            'foo' => 'anc'
        ],
        'validated' => [
            'foo' => 'anc'
        ],
        'rules' => [
            'foo' => 'Between:3,5'
        ],
        'expandedRules' => [
            'foo' => [
                'Between:3,5'
            ]
        ]
    ],
    'uYN5xI48GjCPjVIDutG-iA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3897',
        'data' => [
            'foo' => 'ancf'
        ],
        'validated' => [
            'foo' => 'ancf'
        ],
        'rules' => [
            'foo' => 'Between:3,5'
        ],
        'expandedRules' => [
            'foo' => [
                'Between:3,5'
            ]
        ]
    ],
    'pt-NKbijvxXEyoeR7ziORw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3900',
        'data' => [
            'foo' => 'ancfs'
        ],
        'validated' => [
            'foo' => 'ancfs'
        ],
        'rules' => [
            'foo' => 'Between:3,5'
        ],
        'expandedRules' => [
            'foo' => [
                'Between:3,5'
            ]
        ]
    ],
    'rz6GLUB-qcXCj_lfgBMXeA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3907',
        'data' => [
            'foo' => '123'
        ],
        'validated' => [
            'foo' => '123'
        ],
        'rules' => [
            'foo' => 'Numeric|Between:123,200'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Between:123,200'
            ]
        ]
    ],
    'azCmM6vncJ0tWgpUkZ9hSw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3911',
        'data' => [
            'foo' => '123'
        ],
        'validated' => [
            'foo' => '123'
        ],
        'rules' => [
            'foo' => 'Numeric|Between:0,123'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Between:0,123'
            ]
        ]
    ],
    'uZKSRbi67tROr1tfUxkIpA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3915',
        'data' => [
            'foo' => '0.02'
        ],
        'validated' => [
            'foo' => '0.02'
        ],
        'rules' => [
            'foo' => 'Numeric|Between:0.01,0.02'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Between:0.01,0.02'
            ]
        ]
    ],
    'M7pF6su7N9C6MzrZuQpxYA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3918',
        'data' => [
            'foo' => '0.02'
        ],
        'validated' => [
            'foo' => '0.02'
        ],
        'rules' => [
            'foo' => 'Numeric|Between:0.01,0.03'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Between:0.01,0.03'
            ]
        ]
    ],
    '9K4JeBA-U4SrXTVnnWdpYQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3924',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Numeric|Between:1,5'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Between:1,5'
            ]
        ]
    ],
    'FX9sHVjbj22DnNAndBpQCw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateBetween:3927',
        'data' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'foo' => 'Array|Between:1,5'
        ],
        'expandedRules' => [
            'foo' => [
                'Array',
                'Between:1,5'
            ]
        ]
    ],
    'i7t3sye81whG9TIfXxoJSg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3951',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Numeric|Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Min:3'
            ]
        ]
    ],
    'kvdbolTtA77RvCKjz5sl2w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3954',
        'data' => [
            'foo' => 'anc'
        ],
        'validated' => [
            'foo' => 'anc'
        ],
        'rules' => [
            'foo' => 'Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Min:3'
            ]
        ]
    ],
    'JCl8MLVyPQDIeV3R634Gpg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3965',
        'data' => [
            'foo' => '2.001'
        ],
        'validated' => [
            'foo' => '2.001'
        ],
        'rules' => [
            'foo' => 'Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Min:3'
            ]
        ]
    ],
    '-yZ0ycOARf05iC1Ey_2VnA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3973',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Decimal:0|Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0',
                'Min:3'
            ]
        ]
    ],
    '0D1bDWQvOD21mbThWz_5Jg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3983',
        'data' => [
            'foo' => '5'
        ],
        'validated' => [
            'foo' => '5'
        ],
        'rules' => [
            'foo' => 'Numeric|Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Min:3'
            ]
        ]
    ],
    'pMdKX6ph1n3z2dukWLwuKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMin:3986',
        'data' => [
            'foo' => [
                1,
                2,
                3,
                4
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3,
                4
            ]
        ],
        'rules' => [
            'foo' => 'Array|Min:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Array',
                'Min:3'
            ]
        ]
    ],
    'wGprVOinpHXv4zssQOoonQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4009',
        'data' => [
            'foo' => 'anc'
        ],
        'validated' => [
            'foo' => 'anc'
        ],
        'rules' => [
            'foo' => 'Max:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Max:3'
            ]
        ]
    ],
    '-97aBp5MjOx5JCpg9e6MfA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4016',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Numeric|Max:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Max:3'
            ]
        ]
    ],
    'lcQIoHVU-gDxG7ViNrRzXw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4020',
        'data' => [
            'foo' => '2.001'
        ],
        'validated' => [
            'foo' => '2.001'
        ],
        'rules' => [
            'foo' => 'Numeric|Max:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Max:3'
            ]
        ]
    ],
    'Lfgdxa72_kwdF9pmnGiZpA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4031',
        'data' => [
            'foo' => '3'
        ],
        'validated' => [
            'foo' => '3'
        ],
        'rules' => [
            'foo' => 'Decimal:0|Max:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0',
                'Max:3'
            ]
        ]
    ],
    '6Xk62JRFHLdr19yCqmtZYw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4035',
        'data' => [
            'foo' => '2.001'
        ],
        'validated' => [
            'foo' => '2.001'
        ],
        'rules' => [
            'foo' => 'Decimal:0,3|Max:3'
        ],
        'expandedRules' => [
            'foo' => [
                'Decimal:0,3',
                'Max:3'
            ]
        ]
    ],
    'wHYkB-eX97cZ2RIot4NFug' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4038',
        'data' => [
            'foo' => '22'
        ],
        'validated' => [
            'foo' => '22'
        ],
        'rules' => [
            'foo' => 'Numeric|Max:33'
        ],
        'expandedRules' => [
            'foo' => [
                'Numeric',
                'Max:33'
            ]
        ]
    ],
    'Pf8P-MHpCHb2ymoCwKgccA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMax:4041',
        'data' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'foo' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'foo' => 'Array|Max:4'
        ],
        'expandedRules' => [
            'foo' => [
                'Array',
                'Max:4'
            ]
        ]
    ],
    '67C6nlHNtBfSmhDoDb2xxw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'Q5fl4K2XHflsYpaMZxLdnQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'DWvBGuLCh_jl_EiIFkHgrg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:10.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.1'
            ]
        ]
    ],
    'isRx6U16bUXvGXOEC8UIzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:10.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.1'
            ]
        ]
    ],
    'KtFbtKTTS-Kw0GvCBqm8CQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    '6XEJk_KZhrSnQPxsB4BLmA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'ciR840PVC_392CKSUW2dPQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.1'
            ]
        ]
    ],
    '59B2gZ6vBwnz_2td1QrdcQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0
        ],
        'validated' => [
            'foo' => 0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.1'
            ]
        ]
    ],
    'g-a2hu4Q-tEahNwQuZzrVA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'tT8YwXdUN92C2x2mlnAD6Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'PPjP05tJgPkSWutvLn2cZQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:5'
            ]
        ]
    ],
    '_CnAHTeQICxAUc-aEggTVQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:5'
            ]
        ]
    ],
    'iFABkhf6BFxIAXcarE8BSQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 20
        ],
        'validated' => [
            'foo' => 20
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'gujVIDGFntE2fx9BlVB0tw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 20
        ],
        'validated' => [
            'foo' => 20
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'C95HbnuEiQJRDga5VeXkbQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:-5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-5'
            ]
        ]
    ],
    'suYeQG9JqBHMPMaIuyaJ-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10
        ],
        'validated' => [
            'foo' => 10
        ],
        'rules' => [
            'foo' => 'multiple_of:-5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-5'
            ]
        ]
    ],
    'qJtkf80HGhK3FM22LGXvmw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -20
        ],
        'validated' => [
            'foo' => -20
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'EUNRg4e6XTz4XykbQHhisw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -20
        ],
        'validated' => [
            'foo' => -20
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'l6scNXYIW94Hb7w75N-3FQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'Rl5d0_y1rCY0ZDFj12H_cQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'Ud6eX572qRE9-o--lEsfow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:-5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-5'
            ]
        ]
    ],
    'upwGqaJNPgm8mjRQhxju8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:-5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-5'
            ]
        ]
    ],
    '7R5YhMINXLoYfb5F7ofL-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -20
        ],
        'validated' => [
            'foo' => -20
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'ImB1tNCZNFhu-9mtN2F4Xg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -20
        ],
        'validated' => [
            'foo' => -20
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'L5wyDUK0T0Ti7THSd-ay9Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 20.0
        ],
        'validated' => [
            'foo' => 20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'sXTIoWvH4IwaP1FKZrTAww' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 20.0
        ],
        'validated' => [
            'foo' => 20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'CAAUE0CO45roX17pvamoTw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.0
        ],
        'validated' => [
            'foo' => 10.0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'LCSjrxQez6faK2dQLL59Xw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.0
        ],
        'validated' => [
            'foo' => 10.0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    '6XPA_oQjSv3D0MfKEqmloQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -20.0
        ],
        'validated' => [
            'foo' => -20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    '4_8rNw8je4p5YSnbUTJl0w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -20.0
        ],
        'validated' => [
            'foo' => -20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10'
            ]
        ]
    ],
    'DJ-BZGPEBrLHKSpvpvfvDQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:5'
            ]
        ]
    ],
    'OmLCjALJklP7v1npvElK1g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10
        ],
        'validated' => [
            'foo' => -10
        ],
        'rules' => [
            'foo' => 'multiple_of:5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:5'
            ]
        ]
    ],
    'xXZXUiN130mkb8TVSQ0TKA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 20.0
        ],
        'validated' => [
            'foo' => 20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    '-h-Qb7GpqQnusEX4B2opMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 20.0
        ],
        'validated' => [
            'foo' => 20.0
        ],
        'rules' => [
            'foo' => 'multiple_of:-10'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10'
            ]
        ]
    ],
    'DQfORWRZUY7s7zMu6Xjg2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    'JqsiRzpamTo18Z4fmzKOFQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    '-xEGhD_PlJ4m9I_J5RP9aA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.5'
            ]
        ]
    ],
    'uP5o3sZTcfnH1loMwaREzg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.5'
            ]
        ]
    ],
    'OxLrqRyQeiqYBrDMzJPvvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.3'
            ]
        ]
    ],
    'B_oqdw0ZYG_YzzL4fH1oug' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.3'
            ]
        ]
    ],
    'oGFRKQYq3IjT8eTqiVZqCg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 31.5
        ],
        'validated' => [
            'foo' => 31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    'FAOUCpBtGYMvhkIiby49Dg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 31.5
        ],
        'validated' => [
            'foo' => 31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    'G75leWhEIR6j2DJkwFaOQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.5'
            ]
        ]
    ],
    'fPOun2l5X-aapeOjLFrLLw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.5'
            ]
        ]
    ],
    'JoJgq5blFZgRMtYbtNgGgg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.3'
            ]
        ]
    ],
    'rqnu52zYtKOot_KQnRC2UQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 10.5
        ],
        'validated' => [
            'foo' => 10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.3'
            ]
        ]
    ],
    'PgdvvkAN2Ok5KGhO-zwCtw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -31.5
        ],
        'validated' => [
            'foo' => -31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    'Ep47Wq3_T4mAzgNwmvN4qA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -31.5
        ],
        'validated' => [
            'foo' => -31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:10.5'
            ]
        ]
    ],
    'Bubm1fKYDD6OfklOxIZOYA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.5'
            ]
        ]
    ],
    'G6Og8nNDV_LtB-LZEZXBPA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.5'
            ]
        ]
    ],
    'ANVKzITD6nz6i0pSIad5qA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.5'
            ]
        ]
    ],
    'BM78mUtYdV1u4O0qXYyJyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.5'
            ]
        ]
    ],
    'sJu9sq9cnuCcfgQqRC82mQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.3'
            ]
        ]
    ],
    'IyUky2nzceGpPmSfsQjKHA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -10.5
        ],
        'validated' => [
            'foo' => -10.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-0.3'
            ]
        ]
    ],
    'GZ7pVK2Rxuq3Itt2TW-Umw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => -31.5
        ],
        'validated' => [
            'foo' => -31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.5'
            ]
        ]
    ],
    'rPKsi94JCjqPGYi0bqKd7A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => -31.5
        ],
        'validated' => [
            'foo' => -31.5
        ],
        'rules' => [
            'foo' => 'multiple_of:-10.5'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:-10.5'
            ]
        ]
    ],
    '1N9QcIq0mXW7pUHsp85ciQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 2
        ],
        'validated' => [
            'foo' => 2
        ],
        'rules' => [
            'foo' => 'multiple_of:0.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.1'
            ]
        ]
    ],
    'vWdPU-sjiDFkB1h2oRzaYQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 2
        ],
        'validated' => [
            'foo' => 2
        ],
        'rules' => [
            'foo' => 'multiple_of:0.1'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.1'
            ]
        ]
    ],
    'BZsuOGkdsH1k7c1Z0C321g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0.75
        ],
        'validated' => [
            'foo' => 0.75
        ],
        'rules' => [
            'foo' => 'multiple_of:0.05'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.05'
            ]
        ]
    ],
    'ayZyXQRDVOezqhBvqd8wQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0.75
        ],
        'validated' => [
            'foo' => 0.75
        ],
        'rules' => [
            'foo' => 'multiple_of:0.05'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.05'
            ]
        ]
    ],
    '8AUHJf6KW2rBwivsFcmIZw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4077',
        'data' => [
            'foo' => 0.9
        ],
        'validated' => [
            'foo' => 0.9
        ],
        'rules' => [
            'foo' => 'multiple_of:0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.3'
            ]
        ]
    ],
    'P83TLgue-S-ifLxUZYDtNw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMultipleOf:4078',
        'data' => [
            'foo' => 0.9
        ],
        'validated' => [
            'foo' => 0.9
        ],
        'rules' => [
            'foo' => 'multiple_of:0.3'
        ],
        'expandedRules' => [
            'foo' => [
                'multiple_of:0.3'
            ]
        ]
    ],
    'f5MH04SV6DinYJ2pEokQMA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateContains:4359',
        'data' => [
            'name' => [
                'foo',
                'bar'
            ]
        ],
        'validated' => [
            'name' => [
                'foo',
                'bar'
            ]
        ],
        'rules' => [
            'name' => 'contains:foo'
        ],
        'expandedRules' => [
            'name' => [
                'contains:foo'
            ]
        ]
    ],
    'udnBR-7yloFRmm2zq9l3Ig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateContains:4362',
        'data' => [
            'name' => [
                'foo',
                'bar'
            ]
        ],
        'validated' => [
            'name' => [
                'foo',
                'bar'
            ]
        ],
        'rules' => [
            'name' => 'contains:foo,bar'
        ],
        'expandedRules' => [
            'name' => [
                'contains:foo,bar'
            ]
        ]
    ],
    'G6mTKQrdKw2DXl_28pCLLg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIn:4376',
        'data' => [
            'name' => 'foo'
        ],
        'validated' => [
            'name' => 'foo'
        ],
        'rules' => [
            'name' => 'In:foo,baz'
        ],
        'expandedRules' => [
            'name' => [
                'In:foo,baz'
            ]
        ]
    ],
    '5Eth-tAKB9H89YV4miC8Zw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIn:4382',
        'data' => [
            'name' => [
                'foo',
                'qux'
            ]
        ],
        'validated' => [
            'name' => [
                'foo',
                'qux'
            ]
        ],
        'rules' => [
            'name' => 'Array|In:foo,baz,qux'
        ],
        'expandedRules' => [
            'name' => [
                'Array',
                'In:foo,baz,qux'
            ]
        ]
    ],
    'osl7UrsGvA2HN6XAAaWd6A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIn:4385',
        'data' => [
            'name' => [
                'foo,bar',
                'qux'
            ]
        ],
        'validated' => [
            'name' => [
                'foo,bar',
                'qux'
            ]
        ],
        'rules' => [
            'name' => 'Array|In:"foo,bar",baz,qux'
        ],
        'expandedRules' => [
            'name' => [
                'Array',
                'In:"foo,bar",baz,qux'
            ]
        ]
    ],
    'tPObGUiOTZK1zz-_jXc5tQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIn:4388',
        'data' => [
            'name' => 'f"o"o'
        ],
        'validated' => [
            'name' => 'f"o"o'
        ],
        'rules' => [
            'name' => 'In:"f""o""o",baz,qux'
        ],
        'expandedRules' => [
            'name' => [
                'In:"f""o""o",baz,qux'
            ]
        ]
    ],
    'dcvfw8TJ59YVBgW2NjAuFg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIn:4391',
        'data' => [
            'name' => 'a,b
c,d'
        ],
        'validated' => [
            'name' => 'a,b
c,d'
        ],
        'rules' => [
            'name' => 'in:"a,b
c,d"'
        ],
        'expandedRules' => [
            'name' => [
                'in:"a,b
c,d"'
            ]
        ]
    ],
    'rkWIvwJskDduHDBZhDytrw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNotIn:4404',
        'data' => [
            'name' => 'foo'
        ],
        'validated' => [
            'name' => 'foo'
        ],
        'rules' => [
            'name' => 'NotIn:bar,baz'
        ],
        'expandedRules' => [
            'name' => [
                'NotIn:bar,baz'
            ]
        ]
    ],
    'gFSs5qEiqPo90qYvrT2bXA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4427',
        'data' => [
            'foo' => [
                '1',
                '11'
            ]
        ],
        'validated' => [
            'foo' => [
                '1',
                '11'
            ]
        ],
        'rules' => [
            'foo.*' => 'distinct:ignore_case'
        ],
        'expandedRules' => [
            'foo.0' => [
                'distinct:ignore_case'
            ],
            'foo.1' => [
                'distinct:ignore_case'
            ]
        ]
    ],
    'shfPHcDhkTI_EChIJwd3YA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4430',
        'data' => [
            'foo' => [
                'foo',
                'bar'
            ]
        ],
        'validated' => [
            'foo' => [
                'foo',
                'bar'
            ]
        ],
        'rules' => [
            'foo.*' => 'distinct'
        ],
        'expandedRules' => [
            'foo.0' => [
                'distinct'
            ],
            'foo.1' => [
                'distinct'
            ]
        ]
    ],
    'fLsaLlq-57b2RLZtbxTmSQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4436',
        'data' => [
            'foo' => [
                'bar' => [
                    'id' => 'qux'
                ],
                'baz' => [
                    'id' => 'QUX'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                'bar' => [
                    'id' => 'qux'
                ],
                'baz' => [
                    'id' => 'QUX'
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'foo.bar.id' => [
                'distinct'
            ],
            'foo.baz.id' => [
                'distinct'
            ]
        ]
    ],
    'uGwo2nLHKN9fY8cJvVHtIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4442',
        'data' => [
            'foo' => [
                'bar' => [
                    'id' => 1
                ],
                'baz' => [
                    'id' => 2
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                'bar' => [
                    'id' => 1
                ],
                'baz' => [
                    'id' => 2
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'foo.bar.id' => [
                'distinct'
            ],
            'foo.baz.id' => [
                'distinct'
            ]
        ]
    ],
    'FvmhrZQQh4_zB1_I_Ai0Dg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4445',
        'data' => [
            'foo' => [
                'bar' => [
                    'id' => 2
                ],
                'baz' => [
                    'id' => 425
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                'bar' => [
                    'id' => 2
                ],
                'baz' => [
                    'id' => 425
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'distinct:ignore_case'
        ],
        'expandedRules' => [
            'foo.bar.id' => [
                'distinct:ignore_case'
            ],
            'foo.baz.id' => [
                'distinct:ignore_case'
            ]
        ]
    ],
    'LlDzYEPbFuxFWh6JOUhmBA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4448',
        'data' => [
            'foo' => [
                [
                    'id' => 1,
                    'nested' => [
                        'id' => 1
                    ]
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => 1
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'distinct'
            ]
        ]
    ],
    'Zmpf1ke7RCtHWzLlxzx5WQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4454',
        'data' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => 2
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'id' => 1
                ],
                [
                    'id' => 2
                ]
            ]
        ],
        'rules' => [
            'foo.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'foo.0.id' => [
                'distinct'
            ],
            'foo.1.id' => [
                'distinct'
            ]
        ]
    ],
    '4OqConzliJ8tSmKF7tAcNQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4460',
        'data' => [
            'cat' => [
                [
                    'prod' => [
                        [
                            'id' => 1
                        ]
                    ]
                ],
                [
                    'prod' => [
                        [
                            'id' => 2
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'cat' => [
                [
                    'prod' => [
                        [
                            'id' => 1
                        ]
                    ]
                ],
                [
                    'prod' => [
                        [
                            'id' => 2
                        ]
                    ]
                ]
            ]
        ],
        'rules' => [
            'cat.*.prod.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'cat.0.prod.0.id' => [
                'distinct'
            ],
            'cat.1.prod.0.id' => [
                'distinct'
            ]
        ]
    ],
    'w23aIjtOIiFD-h1w3sFJAg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4463',
        'data' => [
            'cat' => [
                'sub' => [
                    [
                        'prod' => [
                            [
                                'id' => 1
                            ]
                        ]
                    ],
                    [
                        'prod' => [
                            [
                                'id' => 2
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'cat' => [
                'sub' => [
                    [
                        'prod' => [
                            [
                                'id' => 1
                            ]
                        ]
                    ],
                    [
                        'prod' => [
                            [
                                'id' => 2
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'rules' => [
            'cat.sub.*.prod.*.id' => 'distinct'
        ],
        'expandedRules' => [
            'cat.sub.0.prod.0.id' => [
                'distinct'
            ],
            'cat.sub.1.prod.0.id' => [
                'distinct'
            ]
        ]
    ],
    'yRO4oYwbnlq31tb7HCCILA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4477',
        'data' => [
            'foo' => [
                'foo',
                'bar'
            ],
            'bar' => [
                'foo',
                'bar'
            ]
        ],
        'validated' => [
            'foo' => [
                'foo',
                'bar'
            ],
            'bar' => [
                'foo',
                'bar'
            ]
        ],
        'rules' => [
            'foo.*' => 'distinct',
            'bar.*' => 'distinct'
        ],
        'expandedRules' => [
            'foo.0' => [
                'distinct'
            ],
            'foo.1' => [
                'distinct'
            ],
            'bar.0' => [
                'distinct'
            ],
            'bar.1' => [
                'distinct'
            ]
        ]
    ],
    'XcN4em8fDSEPP0udgfVrFg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDistinct:4492',
        'data' => [
            'foo' => [
                '0100',
                '100'
            ]
        ],
        'validated' => [
            'foo' => [
                '0100',
                '100'
            ]
        ],
        'rules' => [
            'foo.*' => 'distinct:strict'
        ],
        'expandedRules' => [
            'foo.0' => [
                'distinct:strict'
            ],
            'foo.1' => [
                'distinct:strict'
            ]
        ]
    ],
    'BTX5FXbDHQcPgxoP_2BZrw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUnique:4526',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'Unique:users'
        ],
        'expandedRules' => [
            'email' => [
                'Unique:users'
            ]
        ]
    ],
    '6xW-tLwK-GxoGuDLEUtSJQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUnique:4533',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'Unique:connection.users'
        ],
        'expandedRules' => [
            'email' => [
                'Unique:connection.users'
            ]
        ]
    ],
    'tpms425xcMpmzZilmG4Hvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUniqueAndExistsSendsCorrectFieldNameToDBWithArrays:4577',
        'data' => [
            [
                'email' => 'foo',
                'type' => 'bar'
            ]
        ],
        'validated' => [
            [
                'email' => 'foo',
                'type' => 'bar'
            ]
        ],
        'rules' => [
            '*.email' => 'unique:users',
            '*.type' => 'exists:user_types'
        ],
        'expandedRules' => [
            '0.email' => [
                'unique:users'
            ],
            '0.type' => [
                'exists:user_types'
            ]
        ]
    ],
    'BSubvEl0qRBGmrHgTcGDpQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidationExists:4603',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'Exists:users'
        ],
        'expandedRules' => [
            'email' => [
                'Exists:users'
            ]
        ]
    ],
    '2FZcSamB--idFSSGJUmGWg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidationExists:4611',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'Exists:users,email,account_id,1,name,taylor'
        ],
        'expandedRules' => [
            'email' => [
                'Exists:users,email,account_id,1,name,taylor'
            ]
        ]
    ],
    'r0S7vufuyIYIVIfNbCbaMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidationExists:4632',
        'data' => [
            'email' => 'foo'
        ],
        'validated' => [
            'email' => 'foo'
        ],
        'rules' => [
            'email' => 'Exists:connection.users'
        ],
        'expandedRules' => [
            'email' => [
                'Exists:connection.users'
            ]
        ]
    ],
    'RcQCQ8FYT3Cry6u_L_A-5A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidationExists:4639',
        'data' => [
            'email' => [
                'foo',
                'foo'
            ]
        ],
        'validated' => [
            'email' => [
                'foo',
                'foo'
            ]
        ],
        'rules' => [
            'email' => 'exists:users,email_addr'
        ],
        'expandedRules' => [
            'email' => [
                'exists:users,email_addr'
            ]
        ]
    ],
    'oOQ5LeJdEPz12yZdctLnMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidationExistsIsNotCalledUnnecessarily:4657',
        'data' => [
            'id' => '1'
        ],
        'validated' => [
            'id' => '1'
        ],
        'rules' => [
            'id' => 'Integer|Exists:users,id'
        ],
        'expandedRules' => [
            'id' => [
                'Integer',
                'Exists:users,id'
            ]
        ]
    ],
    'Ayl3IbQCVgJDURrH9CLu2Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIp:4827',
        'data' => [
            'ip' => '127.0.0.1'
        ],
        'validated' => [
            'ip' => '127.0.0.1'
        ],
        'rules' => [
            'ip' => 'Ip'
        ],
        'expandedRules' => [
            'ip' => [
                'Ip'
            ]
        ]
    ],
    'rYTn4hrw-OB8gBsYDRNtkg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIp:4830',
        'data' => [
            'ip' => '127.0.0.1'
        ],
        'validated' => [
            'ip' => '127.0.0.1'
        ],
        'rules' => [
            'ip' => 'Ipv4'
        ],
        'expandedRules' => [
            'ip' => [
                'Ipv4'
            ]
        ]
    ],
    'hBZV3Ph4xOCVhNhiDfiGRQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateIp:4833',
        'data' => [
            'ip' => '::1'
        ],
        'validated' => [
            'ip' => '::1'
        ],
        'rules' => [
            'ip' => 'Ipv6'
        ],
        'expandedRules' => [
            'ip' => [
                'Ipv6'
            ]
        ]
    ],
    'P2ZIdskSnMKX80cn3isY6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4850',
        'data' => [
            'mac' => '01-23-45-67-89-ab'
        ],
        'validated' => [
            'mac' => '01-23-45-67-89-ab'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'ulD2qaYvvvElAJc1Nb7_KA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4854',
        'data' => [
            'mac' => '01-23-45-67-89-AB'
        ],
        'validated' => [
            'mac' => '01-23-45-67-89-AB'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'QMdsw2yR7rfJJ8kt0ntoRw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4858',
        'data' => [
            'mac' => '01-23-45-67-89-aB'
        ],
        'validated' => [
            'mac' => '01-23-45-67-89-aB'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'voeGe1TqZJIk0L3HE3wDmw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4862',
        'data' => [
            'mac' => '01:23:45:67:89:ab'
        ],
        'validated' => [
            'mac' => '01:23:45:67:89:ab'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    '5dFIkoCSxkVHDu8HGDFhVw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4866',
        'data' => [
            'mac' => '01:23:45:67:89:AB'
        ],
        'validated' => [
            'mac' => '01:23:45:67:89:AB'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'DVzbZcGHt0D6GrzMPNdyxQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4870',
        'data' => [
            'mac' => '01:23:45:67:89:aB'
        ],
        'validated' => [
            'mac' => '01:23:45:67:89:aB'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'a1LEY4sch2vtlFkmGuwv1g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateMacAddress:4882',
        'data' => [
            'mac' => '0123.4567.89ab'
        ],
        'validated' => [
            'mac' => '0123.4567.89ab'
        ],
        'rules' => [
            'mac' => 'mac_address'
        ],
        'expandedRules' => [
            'mac' => [
                'mac_address'
            ]
        ]
    ],
    'UeGNNVSOLr8SnVSHdw3EcA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmail:4917',
        'data' => [
            'x' => 'foo@gmail.com'
        ],
        'validated' => [
            'x' => 'foo@gmail.com'
        ],
        'rules' => [
            'x' => 'Email'
        ],
        'expandedRules' => [
            'x' => [
                'Email'
            ]
        ]
    ],
    'sjQo1GmiqFus3p8jfu8ovQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmailWithInternationalCharacters:4923',
        'data' => [
            'x' => 'foo@gmäil.com'
        ],
        'validated' => [
            'x' => 'foo@gmäil.com'
        ],
        'rules' => [
            'x' => 'email'
        ],
        'expandedRules' => [
            'x' => [
                'email'
            ]
        ]
    ],
    'isEut1mwVfMEE7poz12JtA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmailWithFilterCheck:4938',
        'data' => [
            'x' => 'example@example.com'
        ],
        'validated' => [
            'x' => 'example@example.com'
        ],
        'rules' => [
            'x' => 'email:filter'
        ],
        'expandedRules' => [
            'x' => [
                'email:filter'
            ]
        ]
    ],
    'kaOL5IaNvMWUJG3mY154IQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmailWithFilterUnicodeCheck:4954',
        'data' => [
            'x' => 'example@example.com'
        ],
        'validated' => [
            'x' => 'example@example.com'
        ],
        'rules' => [
            'x' => 'email:filter_unicode'
        ],
        'expandedRules' => [
            'x' => [
                'email:filter_unicode'
            ]
        ]
    ],
    'JyWivkEjJXT_o39bHajjZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateEmailWithFilterUnicodeCheck:4958',
        'data' => [
            'x' => 'exämple@example.com'
        ],
        'validated' => [
            'x' => 'exämple@example.com'
        ],
        'rules' => [
            'x' => 'email:filter_unicode'
        ],
        'expandedRules' => [
            'x' => [
                'email:filter_unicode'
            ]
        ]
    ],
    'Ggwsto43PNIGA6wNi7sbwQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithProtocols:4981',
        'data' => [
            'x' => 'foo://bar'
        ],
        'validated' => [
            'x' => 'foo://bar'
        ],
        'rules' => [
            'x' => 'url:https,foo'
        ],
        'expandedRules' => [
            'x' => [
                'url:https,foo'
            ]
        ]
    ],
    'HZF7OBuLrJG7axYHYzyOyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithProtocols:4988',
        'data' => [
            'x' => 'http://localhost'
        ],
        'validated' => [
            'x' => 'http://localhost'
        ],
        'rules' => [
            'x' => 'url'
        ],
        'expandedRules' => [
            'x' => [
                'url'
            ]
        ]
    ],
    'VmDUBIcEPVi0wN4e15fG8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'aaa://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'aaa://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'JV6UI3-5fdaVbhDmo2PbGg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'aaas://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'aaas://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ZDI_si-_48KeIeh9GdrMiw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'about://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'about://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'PqAEKmi9rsl5632SIXs54g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'acap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'acap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'pkW71CDh_wOxBCiWpSKhKg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'acct://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'acct://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'PIfgpplsozUPW4XUfWsJdA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'acr://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'acr://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'USZkXrsnbuKMSp3gUzrMLw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'adiumxtra://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'adiumxtra://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'BNlT3IGLL0MXT2J3kGGPdA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'afp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'afp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'aEzfvXi-BPmce05Bof4Zsw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'afs://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'afs://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'LJ5v7RteOntSOQzOKpzR5w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'aim://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'aim://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'KMxW9OOzgrOnz2Z7VmifqQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'apt://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'apt://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'LaPL36p2_WHLFo19kaXRcw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'attachment://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'attachment://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Z5EXSWPVOAFweOjqSnIUGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'aw://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'aw://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'bztfExnrIKTN4MwduzdkfQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'barion://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'barion://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Dw_SEteVvvX3XTXgGx9c0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'beshare://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'beshare://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QS1I3sV3pSE3mjlIx_BCVg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'bitcoin://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'bitcoin://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '1_TcxUoY3F_Q7tylpIGKTA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'blob://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'blob://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'pV3aRdH9nHM4kSMz5w3FBQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'bolo://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'bolo://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'W7DzCvfmFRTlAOkZYwlAyQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'callto://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'callto://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'DoadkUjjp8sGgKw9Y20OJA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'cap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'cap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'VXeA-bhJPH43bgc0xkCQMg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'chrome://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'chrome://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'YP4RClNWjOjQJ642RFv_4w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'chrome-extension://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'chrome-extension://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8XbW2SFqCISwIZeymVmdlQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'cid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'cid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ATgx6yZZH3I11nw4WUl2kA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'coap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'coap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'oKGQRNYhsl2WOhpp66MPcw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'coaps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'coaps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ij5o6g6eV95-cLS29a79hQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'com-eventbrite-attendee://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'com-eventbrite-attendee://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'L5aedGmlNZtG5JMhT29qWA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'content://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'content://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '_HUkHtohWAXKkZhek30R6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'crid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'crid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '4YBJRUAlGKyBDoWcJyhtCQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'cvs://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'cvs://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'rSMEbkLZgMcJNidpQ2bA6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'data://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'data://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'GsxjanrPCkKoD_OIinB5nA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dav://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dav://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'WwPX2khoW3jo2qUBThWltQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dict://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dict://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '1kXQGOdkRrMLsb5X1YMw2A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dlna-playcontainer://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dlna-playcontainer://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '40avoYQzR-B-jaAZGTH0kQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dlna-playsingle://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dlna-playsingle://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'iDQRFnt4lalOB7tccn1yhA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dns://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dns://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'JESPoJRV5WewCnSjE2ewIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dntp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dntp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'zEECovPtAMaUL_Q1aVvQkg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dtn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dtn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'G7WcnvCwvetdYfIfuRpx6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'dvb://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'dvb://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Edwkutn9ljODFLTgd15D_g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ed2k://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ed2k://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '9aYH9Af8MP3HkMmDadxT6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'example://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'example://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'CDTfRSykf-zSGo84Mfltbw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'facetime://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'facetime://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MbmOd59kVlyN1cYr0voHlg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'fax://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'fax://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '_TP2qGQXvC8Xyq-wqw56-Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'feed://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'feed://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'HALoDOs7TZh9kacr5cN9pg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'feedready://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'feedready://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'whoRXpBhP-_GdjntrIiUWA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'file://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'file://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'jJZWLGVqfkkgWyhzU8TMaQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'filesystem://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'filesystem://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'TrhjwU1BH8AT9iC1aGib8w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'finger://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'finger://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'maRI2KtdbpsI542nzsPuMQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'fish://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'fish://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'BckZ3WJiW4Hf_boCn4sc7Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ftp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ftp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'HsLVqVXE6SqiXH1w1-XxWA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'geo://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'geo://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'PcT7nFlNtiRvcizUG0pm6A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'gg://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'gg://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'fL3CSRdAeM-0RkGOWBcMlQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'git://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'git://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '4mSVVHXN1Kjbe4JgceMsgg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'gizmoproject://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'gizmoproject://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'keWvgJYHmFzrVDdM3r5OyQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'go://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'go://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8ps14QSNM-7I7CYZJzZuzA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'gopher://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'gopher://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '7lDqF5TcfOLm3q-99GdAPQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'gtalk://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'gtalk://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'vxq9--qY_qJ_2HiVC2-aig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'h323://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'h323://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'muyaQeE2x4wPxCgnH1ubGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ham://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ham://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Zyul333c2PM9tcmzxTW-Iw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'hcp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'hcp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'xyRYgymM8J5HGCuavdxyGQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'http://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '4hbIIpvRaeVDKwiwgrUiaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'https://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'im8g6Nf_aEhFHfij7vsUkQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iax://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iax://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Z6hbgqMW7LdJBgkXibKPKA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'icap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'icap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MjS2mhLurwPMrTEC9G0dvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'icon://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'icon://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'uxWe4uOvtbipuoKrh05yqw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'im://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'im://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'LwhZoyQbOlfIuCNZ6iu-XA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'imap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'imap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8kB-G5UMQ06YMt0-0rFHBA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'info://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'info://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'BzAviMgLJMJltloJFc-pEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iotdisco://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iotdisco://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'qvUT9eJso3KMh8Eao4b4SA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ipn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ipn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QcuWoVRV4PKiYxdkV-fNvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ipp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ipp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'kKal1zzHwKDd3GoyWuiQNA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ipps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ipps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'gWsEBgi9qhLx-8Yi-EdSVA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'irc://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'irc://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'KL5D0oeh-rO_KKKBEhjlCA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'irc6://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'irc6://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'EPubb0A6IVs9AKdcNg_r8Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ircs://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ircs://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'yS1MLyL8l-cul3cxt6VYuQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iris://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iris://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'l601ndTdAtgghBKHAbeA1Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iris.beep://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iris.beep://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '338YXjqrXgZESJNoqkrgvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iris.lwz://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iris.lwz://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Bll6d0QljEVoEj67SnSOgQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iris.xpc://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iris.xpc://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '7GBuACotQ1YmS_uqwz2POg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'iris.xpcs://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'iris.xpcs://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'jQglyot1ZDD7soL9zzJuDw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'itms://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'itms://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '7SNVW3FUR8dBrouHP-QZ3w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'jabber://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'jabber://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'VFIhsteMjYWXL-zF_ntueA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'jar://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'jar://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'OXVRcdp5bbaRnMq28HfZjg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'jms://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'jms://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'EKAcH13yoIycig3S1I3Hwg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'keyparc://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'keyparc://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Up109KSwYAKF_B5ha-VTDA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'lastfm://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'lastfm://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'zsUVYh4FRtrMFHKy1yh66A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ldap://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ldap://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '0aDyTdVSA924oF6JvdDkZg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ldaps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ldaps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'VlltWu-KrGkUiJDxTZxnig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'magnet://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'magnet://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ctXfSC0CmzlN3h6m8zLDGg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mailserver://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mailserver://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'wSu6uY45h1hvAiSv4j_2wQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mailto://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mailto://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'LczHPNl_20NqoU0w4INN-Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'maps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'maps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'f9QKsV8jVm-5eaX-TThW6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'market://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'market://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'G14v1xhd5wXKO6NsnV6_Dw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'message://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'message://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'hZKFbww-IkAhTUv69VI05w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8j0xBBzgRxiyLtQexmOYJQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mms://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mms://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'uGt28Usk2v-qS9lqfqTOSA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'modem://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'modem://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'VXvnH4OCE7sRocle3Wv5vw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-help://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-help://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'fqiox3k6rJCNWEVvSby1zg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'dVMhoow12OKaFhhvOBqV1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-airplanemode://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-airplanemode://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MSwrAmr9SUNOQsxMkCcZQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-bluetooth://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-bluetooth://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ebRnRVn2T1gH9LnyQRaPPQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-camera://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-camera://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'lUshkjbuaxyyMaFAtOjdoQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-cellular://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-cellular://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '-COKNkGUwZ7hpIO0NX5hiw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-cloudstorage://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-cloudstorage://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'sS1OsqD-tCrVZ6hmxk2QAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-emailandaccounts://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-emailandaccounts://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'xOzvyUQL4fGPBte8z-bwRQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-language://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-language://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8YHhB6T_lhFQ6SKn7XQ73Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-location://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-location://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'p4higzQEMSbdS2uWqXe7GQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-lock://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-lock://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '85LX5VZZOVTKrICJrf5mvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-nfctransactions://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-nfctransactions://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'NhzxgdrDVJ9c4tHZwA7JoA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-notifications://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-notifications://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'kY-aKCUwBxZknP60YKCr-w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-power://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-power://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'o-4BdoEGjoXG5CAeACv1Cw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-privacy://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-privacy://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'dh-uw8iRlayxPsY9IHKi2Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-proximity://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-proximity://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'DkZ_y39SGEIgfsv40j8ogA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-screenrotation://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-screenrotation://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'zxd9vuIrYG_DfAD_PlbgUg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-wifi://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-wifi://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'NLzyAAUSjzSm2sTkutRuKw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ms-settings-workplace://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ms-settings-workplace://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MsvW_yVS1AeT4tgDGTIw2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'msnim://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'msnim://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'LdnAKy_hsjoYMMbGGFKtbg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'msrp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'msrp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'zEEiJCxq6xbzJBn23l9h2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'msrps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'msrps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '9mSkaPADAzBO48NTepl7Dg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mtqp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mtqp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'UIqu2eeee2z8k7sURawWvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mumble://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mumble://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '-bdiuDVOzveHbfFiFlELOA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mupdate://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mupdate://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ZL6NukBxFowGKVU_QtpV7A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'mvn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'mvn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QJRJzrUuiouzaUTg-fZ0pw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'news://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'news://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'rhZJiPSbwCbBctTAOTbyrA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'nfs://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'nfs://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '81oagAveN93ERY5hhuYigw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ni://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ni://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'za_nz9cRMUF1zzLPj4jWBA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'nih://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'nih://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'BO-Ek9Hvv1gs4cu6f-fTMg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'nntp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'nntp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'HoUE4ANeycUNi4T2gEGs_w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'notes://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'notes://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'bIqkTSCnyTvjvJ1WoojGQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'oid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'oid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'SZ6Qv_Bsjsb93aJbcetIYQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'opaquelocktoken://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'opaquelocktoken://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QM9YlpudRhH3uxGUxRRBwQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'pack://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'pack://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'xq--pWA29JCXAOpcTmHjzQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'palm://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'palm://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'dI7wsg5Cxgd0WV0h0Q3abQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'paparazzi://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'paparazzi://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '19c8WJLzSTh5idhYhMOAjg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'pkcs11://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'pkcs11://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'oHARWxhrruowCiBb9FU48w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'platform://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'platform://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Me_2t5_vNUPpWtnKUxErXA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'pop://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'pop://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'i48bRdNFabaySlvtDUJ0rw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'pres://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'pres://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'EwIex6SgBMH851FU0iREEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'prospero://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'prospero://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QAboHsxZBR64-Co_7Ybr1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'proxy://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'proxy://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'wh4ophvP87z6jzHXT1l-qQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'psyc://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'psyc://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Q13wR9LVmLJL-rgfGVw-aw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'query://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'query://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'TR8VxVThNmsH3aoV70yn8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'redis://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'redis://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '98whJO42HNVb1xKfJbPFvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rediss://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rediss://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '1g72rCk5olg1nN4vxmJ9oQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'reload://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'reload://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Q4O0nSp9MquG1V0EKGWMNQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'res://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'res://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'm4e_5hRKnxBEXsbO94-33g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'resource://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'resource://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'GemkJ0EJa58BgPY6agVTyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rmi://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rmi://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ms7qrFgq_WYrn9l_pZjvPg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rsync://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rsync://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'ONv18xtyXT5KtKH2PlkLTg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rtmfp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rtmfp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'onwbmcbQjwSM-Is0RUpklA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rtmp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rtmp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '_O52OAOMWjDdVOb8V7shiQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rtsp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rtsp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'VSzEkvfEQVTNxUH2zZ5ojw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rtsps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rtsps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '9C6qGw5GckYQuWXkIeDV_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'rtspu://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'rtspu://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'c5XXQT_RTKKS8ypRm3d5jQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 's3://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 's3://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '_MZe5m3lizeU1fljGNCyiA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'secondlife://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'secondlife://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'NVdulNv9HFQ2XQ8DKPUG4w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'service://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'service://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '2IY2_CKzXz7Tc4bOsZmMOw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'session://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'session://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Q-2Ot44T77024dwT7nT_ng' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sftp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sftp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '0OLZr8WxnMkrfNyeQrYrHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sgn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sgn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '8AumpUnvH1B_FGHo1QddsA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'shttp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'shttp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'PBnx4p2YzIe3P7lbflW56Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sieve://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sieve://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'I9yyTbiBaKs1vsd-3PBi3w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sip://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sip://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '94xgDBdNCyXzyM5PWjX8rQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sips://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sips://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '5veUt1zYXJVIolAARjYl_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'skype://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'skype://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Eow7dQKJVFkWdGMI8RGlPg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'smb://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'smb://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'haK-VV1PNwwdtsXqGStBkQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'sms://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'sms://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'PtA1TKpQcxG7wAFbV0Zssw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'smtp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'smtp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'XB2B0sknssbZ-g8yryCBWw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'snews://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'snews://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'w1HorC1Xwts-JphqED0KIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'snmp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'snmp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'sQ_E6l4yG4vVLgPd85E0KA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'soap.beep://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'soap.beep://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '9I2REZ5W7-osEpOOFNUvcA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'soap.beeps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'soap.beeps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '9Js7GUlHsSvBRiu7wzzJAg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'soldat://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'soldat://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Ov5QfQ9CwbmFPL6tuDJpig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'spotify://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'spotify://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '3HMmbZWQo5zAD5s55fY2cA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ssh://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ssh://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'TJMJ6iZ_SZHpYlpUdpGm5Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'steam://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'steam://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '2rTFzKOubwJiH4NXeXECbQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'stun://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'stun://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'AQJKIWzkGSXTlMRgAMYayA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'stuns://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'stuns://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MC27lIfSxIFlPkj5jbppeQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'submit://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'submit://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '5JOf6c29y31horzAJ8QM8g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'svn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'svn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '-4tjcqb-teHIWK5TqgjTlw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tag://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tag://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'TpiuzgIYqBx4E33911-Uxw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'teamspeak://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'teamspeak://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'WaRnyCTeCKVvvKlrGuOz5A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tel://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tel://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'KD7U948RuU2XZw7HWytlvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'teliaeid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'teliaeid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'fkHCoIuBb3FDn513mC9nvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'telnet://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'telnet://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'y8lta1-hH6ebQu-iKeGuwA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tftp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tftp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'xSBbSz4YEmbIU_R6fGSvEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'things://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'things://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '18jik-XxGLG-HlnlLroCOg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'thismessage://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'thismessage://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'G8t4pBuRZN86BRT-uCShkw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tip://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tip://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'r7WXxjsEUD1YIeKdhZdsfg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tn3270://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tn3270://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'I9jeqT-1nHCNMP-udrQxbA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'turn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'turn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'UIzRz7OuWuzQV3A2ma2Tzg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'turns://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'turns://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'Vwc05JqB0JJFJ_U7d3dYRw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'tv://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'tv://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'HGtMrwfqOeozVMU3o2IpEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'udp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'udp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'voLorx7PvrTe8YNqJynyXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'unreal://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'unreal://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'CH3CySikkC7uIbHv3uBXZQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'urn://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'urn://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '2QLhowoL0_eD-ennYgoBqw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ut2004://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ut2004://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'bVftCoVp42K4HnkoAzI3sg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'vemmi://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'vemmi://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'itfB101sLBXQhhvA5SuDqg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ventrilo://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ventrilo://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '-73ZZlLWDGit8MokQCnQfA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'videotex://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'videotex://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'BlDGosOwmK3JRGt4rchpKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'view-source://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'view-source://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'G2DwWAumghRv5P__TFeElg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'wais://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'wais://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'flI3PuM1Q4I2nCL-affenw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'webcal://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'webcal://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '59RvWgpOwiEM6wD6a_U8_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ws://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ws://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'tK1F6LlG-jyDClRr3KuCJw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'wss://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'wss://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'o0IoIdiAKXrbFB9ZsHZliw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'wtai://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'wtai://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'yk3FAPOzyemRyVI5ZmXbzw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'wyciwyg://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'wyciwyg://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'n7hoPdXnU1Ue7uU2zX2R6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xcon://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xcon://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'GhbZehu68xgESMBQW6Iz6g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xcon-userid://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xcon-userid://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'bsfjC6VQSXq8cb8_6W2I4Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xfire://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xfire://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'OZHGYr4oi6rhSil3-9lKlg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xmlrpc.beep://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xmlrpc.beep://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'p7CZbzuWc_C3kPeQH9t_Zg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xmlrpc.beeps://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xmlrpc.beeps://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '0Ow5HxI2JpCdUD5YdP-E8Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xmpp://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xmpp://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '70uPiSjTlYzVU15l-MhgmQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'xri://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'xri://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '67Y3jPSVjkQ96ePbFkkrQQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'ymsgr://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'ymsgr://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'q-1_4qcK4fLZ9AiHBI0OrA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'z39.50://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'z39.50://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'UMRy2GxE-vdBZuO32YG2lA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'z39.50r://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'z39.50r://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'nISx5YrFQEvyQjkgJ99G3g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'z39.50s://fully.qualified.domain/path'
        ],
        'validated' => [
            'x' => 'z39.50s://fully.qualified.domain/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'rjmPR1yuLQKHi0JJG97Www' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://a.pl'
        ],
        'validated' => [
            'x' => 'http://a.pl'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'vj-BPS2mu58eF_E3VcJNFw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://localhost/url.php'
        ],
        'validated' => [
            'x' => 'http://localhost/url.php'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '5j10I-o2_lvY41h7jn7tZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://local.dev'
        ],
        'validated' => [
            'x' => 'http://local.dev'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'KaXQGB616FmEWoeRo-8mvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://google.com'
        ],
        'validated' => [
            'x' => 'http://google.com'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'rWhnCCekcBcsYoN9UfoDyQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://www.google.com'
        ],
        'validated' => [
            'x' => 'http://www.google.com'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'YNyMb_zCaJB8UmsnJbzv9g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://goog_le.com'
        ],
        'validated' => [
            'x' => 'http://goog_le.com'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'QFHLT38jVH3LHaLFH3Qk5Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://google.com'
        ],
        'validated' => [
            'x' => 'https://google.com'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'oVA_7ZQEmikjyPiPW_f5rQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://illuminate.dev'
        ],
        'validated' => [
            'x' => 'http://illuminate.dev'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'dg-u_54bpmheWkPoFJYd_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://localhost'
        ],
        'validated' => [
            'x' => 'http://localhost'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '0NvyruOMip79jQXitzcoAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com/?'
        ],
        'validated' => [
            'x' => 'https://laravel.com/?'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'MjUXJM08kiSeyHHHspaEQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://президент.рф/'
        ],
        'validated' => [
            'x' => 'http://президент.рф/'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '2X1bUzva7VCYAWXU7zI7AA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://스타벅스코리아.com'
        ],
        'validated' => [
            'x' => 'http://스타벅스코리아.com'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'TuTvpG7qdVY7JsXtpMeHuw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'http://xn--d1abbgf6aiiy.xn--p1ai/'
        ],
        'validated' => [
            'x' => 'http://xn--d1abbgf6aiiy.xn--p1ai/'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'abplKW_DzC0JM-bMAx3aog' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com?'
        ],
        'validated' => [
            'x' => 'https://laravel.com?'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'YMaYbeFhwE10ZG8WKg0t_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com?q=1'
        ],
        'validated' => [
            'x' => 'https://laravel.com?q=1'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '493412eq7lF_pH6iEqgcLA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com/?q=1'
        ],
        'validated' => [
            'x' => 'https://laravel.com/?q=1'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'pI-hZkXHziwjgCnB6gI8eA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com#'
        ],
        'validated' => [
            'x' => 'https://laravel.com#'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '3h9dz5VLj8rnud2W3YxkEA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com#fragment'
        ],
        'validated' => [
            'x' => 'https://laravel.com#fragment'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'a7wWIlvXvakt-Bl-_XaL8Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://laravel.com/#fragment'
        ],
        'validated' => [
            'x' => 'https://laravel.com/#fragment'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'eRVyQ6Q6tReCWH4k-VxT9g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://domain1'
        ],
        'validated' => [
            'x' => 'https://domain1'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'vMKs3nbf6uBhkHaA6QQJHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://domain12/'
        ],
        'validated' => [
            'x' => 'https://domain12/'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    '2JUuY5k1a-LcYum0mxGYjg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://domain12#fragment'
        ],
        'validated' => [
            'x' => 'https://domain12#fragment'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'mQY09bpb6gRy1SyXXe3XBg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://domain1/path'
        ],
        'validated' => [
            'x' => 'https://domain1/path'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'fWrJOkZQM8XDIFmlycASlg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateUrlWithValidUrls:4996',
        'data' => [
            'x' => 'https://domain.com/path/%2528failed%2526?param=1#fragment'
        ],
        'validated' => [
            'x' => 'https://domain.com/path/%2528failed%2526?param=1#fragment'
        ],
        'rules' => [
            'x' => 'Url'
        ],
        'expandedRules' => [
            'x' => [
                'Url'
            ]
        ]
    ],
    'l7zHoGXX5f4kZv_xxYlZWQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateActiveUrl:5286',
        'data' => [
            'x' => 'http://google.com'
        ],
        'validated' => [
            'x' => 'http://google.com'
        ],
        'rules' => [
            'x' => 'active_url'
        ],
        'expandedRules' => [
            'x' => [
                'active_url'
            ]
        ]
    ],
    'mSnE69Fte2XA5ivDzg2zJw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateActiveUrl:5286',
        'data' => [
            'x' => 'http://www.google.com'
        ],
        'validated' => [
            'x' => 'http://www.google.com'
        ],
        'rules' => [
            'x' => 'active_url'
        ],
        'expandedRules' => [
            'x' => [
                'active_url'
            ]
        ]
    ],
    'hGdrbuEF-Dp9UiNWW08TJA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateActiveUrl:5286',
        'data' => [
            'x' => 'http://www.google.com/about'
        ],
        'validated' => [
            'x' => 'http://www.google.com/about'
        ],
        'rules' => [
            'x' => 'active_url'
        ],
        'expandedRules' => [
            'x' => [
                'active_url'
            ]
        ]
    ],
    '3ZpbBCExkJ5_IoCAjRY_gg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5410',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:min_width=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:min_width=1'
            ]
        ]
    ],
    'igIz3jaOyN7Er9b3QYa7rQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5416',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_width=10'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_width=10'
            ]
        ]
    ],
    'MBMM4T8iHgBstsyKKN9unQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5422',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:min_height=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:min_height=1'
            ]
        ]
    ],
    '3RziPtQrtH-LtRf0yzScvA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5428',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_height=10'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_height=10'
            ]
        ]
    ],
    'hd4jkY2RTiTGfhnGHtmQyA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5434',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:width=3'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:width=3'
            ]
        ]
    ],
    '6Y1aYnhphJ_wtqJYdk2MnQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5437',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:height=2'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:height=2'
            ]
        ]
    ],
    'q60laW-kAiWrfsCfxt_4Cw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5440',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:min_height=2,ratio=3/2'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:min_height=2,ratio=3/2'
            ]
        ]
    ],
    'qHu3AXk7B8S9uHAv4jSwpw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5443',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:ratio=1.5'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:ratio=1.5'
            ]
        ]
    ],
    'nhjZjOVyzRp8XgdDFW7rNQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5457',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_ratio=2/5'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_ratio=2/5'
            ]
        ]
    ],
    'rCkwJtzFbHR0NaLWfcH7Ew' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5465',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:ratio=2/1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:ratio=2/1'
            ]
        ]
    ],
    'j6nDmhMdbNXmk61UaxLdDw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5480',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:ratio=2/3'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:ratio=2/3'
            ]
        ]
    ],
    'Kzu-RFcuCsto6MtuNvro0w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5487',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'image/svg+xml';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'image/svg+xml';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_width=1,max_height=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_width=1,max_height=1'
            ]
        ]
    ],
    'oPbecuPUKk8c89JiWqVBIw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5493',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_width=1,max_height=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_width=1,max_height=1'
            ]
        ]
    ],
    'QT4ff4dwDJNOpUFurjK8uA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5500',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'image/svg';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'image/svg';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_width=1,max_height=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_width=1,max_height=1'
            ]
        ]
    ],
    'w2jvOnp7lU8FahBb86ZR7w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5506',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\File::class);
                $object = $class->newInstanceWithoutConstructor();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:max_width=1,max_height=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:max_width=1,max_height=1'
            ]
        ]
    ],
    'TqGprz-WznTiVauqWVNsjQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5518',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:min_ratio=1'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:min_ratio=1'
            ]
        ]
    ],
    'iR5B5I2wjtEAOAfdO-gbwA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImageDimensions:5529',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'dimensions:ratio=16/9'
        ],
        'expandedRules' => [
            'x' => [
                'dimensions:ratio=16/9'
            ]
        ]
    ],
    'DghpTfse61KpMxzc7eLI2A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateFile:5648',
        'data' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'validated' => [
            'x' => (static function() {
                $class = new \ReflectionClass(\Symfony\Component\HttpFoundation\File\UploadedFile::class);
                $object = $class->newInstanceWithoutConstructor();

                (function() {
                    $this->originalName = '';
                    $this->mimeType = 'application/octet-stream';
                    $this->error = 0;
                    $this->originalPath = '';
                    $this->test = true;
                })->bindTo($object, \Symfony\Component\HttpFoundation\File\UploadedFile::class)();

                return $object;
            })()
        ],
        'rules' => [
            'x' => 'file'
        ],
        'expandedRules' => [
            'x' => [
                'file'
            ]
        ]
    ],
    'inyFdQqzdpi5812BOszQ5w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testEmptyRulesSkipped:5655',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => [
                'alpha',
                [],
                ''
            ]
        ],
        'expandedRules' => [
            'x' => [
                'alpha',
                [],
                ''
            ]
        ]
    ],
    'Wt_rFMvkd3-KydnapAogSQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testEmptyRulesSkipped:5658',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => '|||required|'
        ],
        'expandedRules' => [
            'x' => [
                '',
                '',
                '',
                'required',
                ''
            ]
        ]
    ],
    'v4t_gLAa8aiP4dUPMwpXMw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testAlternativeFormat:5665',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => [
                'alpha',
                [
                    'min',
                    3
                ],
                [
                    'max',
                    10
                ]
            ]
        ],
        'expandedRules' => [
            'x' => [
                'alpha',
                [
                    'min',
                    3
                ],
                [
                    'max',
                    10
                ]
            ]
        ]
    ],
    'kq52RKftVXOtEXhwr962ag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testNumericKeys:5672',
        'data' => [
            3 => 'aslsdlks'
        ],
        'validated' => [
            3 => 'aslsdlks'
        ],
        'rules' => [
            3 => 'required'
        ],
        'expandedRules' => [
            3 => [
                'required'
            ]
        ]
    ],
    'yeiAhwlvAyu-gbS4AHAlAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testMergeRules:5688',
        'data' => [
            'x' => 'asl',
            'a' => [
                1,
                4
            ]
        ],
        'validated' => [
            'x' => 'asl',
            'a' => [
                1,
                4
            ]
        ],
        'rules' => [
            'x' => [
                'alpha',
                [
                    'min',
                    3
                ]
            ],
            'a.*' => 'integer'
        ],
        'expandedRules' => [
            'x' => [
                'alpha',
                [
                    'min',
                    3
                ],
                'required',
                [
                    'max',
                    10
                ]
            ],
            'a.0' => [
                'integer'
            ],
            'a.1' => [
                'integer',
                'digits:1'
            ]
        ]
    ],
    'kYX4MNYurRUTHR4wTe3orQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlpha:5695',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => 'Alpha'
        ],
        'expandedRules' => [
            'x' => [
                'Alpha'
            ]
        ]
    ],
    'fCmvCP6zsKSTPof9cw4UxA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlpha:5709',
        'data' => [
            'x' => 'ユニコードを基盤技術と'
        ],
        'validated' => [
            'x' => 'ユニコードを基盤技術と'
        ],
        'rules' => [
            'x' => 'Alpha'
        ],
        'expandedRules' => [
            'x' => [
                'Alpha'
            ]
        ]
    ],
    '_I3aLyP0aOx5VuqLFUhxDg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlpha:5715',
        'data' => [
            'x' => 'नमस्कार'
        ],
        'validated' => [
            'x' => 'नमस्कार'
        ],
        'rules' => [
            'x' => 'Alpha'
        ],
        'expandedRules' => [
            'x' => [
                'Alpha'
            ]
        ]
    ],
    'x0LWUHUobkUr3aHzJ4RYdA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlpha:5721',
        'data' => [
            'x' => 'Continuación'
        ],
        'validated' => [
            'x' => 'Continuación'
        ],
        'rules' => [
            'x' => 'Alpha'
        ],
        'expandedRules' => [
            'x' => [
                'Alpha'
            ]
        ]
    ],
    '_wMdCAWCdaKRHop-b9BL8w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaNum:5746',
        'data' => [
            'x' => 'asls13dlks'
        ],
        'validated' => [
            'x' => 'asls13dlks'
        ],
        'rules' => [
            'x' => 'AlphaNum'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaNum'
            ]
        ]
    ],
    'wYP0u3FE6nFJfEFXcb-rXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaNum:5752',
        'data' => [
            'x' => '१२३'
        ],
        'validated' => [
            'x' => '१२३'
        ],
        'rules' => [
            'x' => 'AlphaNum'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaNum'
            ]
        ]
    ],
    'K3NFbzHL1FkkXdQJsOqFoQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaNum:5755',
        'data' => [
            'x' => '٧٨٩'
        ],
        'validated' => [
            'x' => '٧٨٩'
        ],
        'rules' => [
            'x' => 'AlphaNum'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaNum'
            ]
        ]
    ],
    'g2hVFakhxVpXdqUSfFXNQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaNum:5758',
        'data' => [
            'x' => 'नमस्कार'
        ],
        'validated' => [
            'x' => 'नमस्कार'
        ],
        'rules' => [
            'x' => 'AlphaNum'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaNum'
            ]
        ]
    ],
    'ApgRVHCOihB1C2m266HmeA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaDash:5768',
        'data' => [
            'x' => 'asls1-_3dlks'
        ],
        'validated' => [
            'x' => 'asls1-_3dlks'
        ],
        'rules' => [
            'x' => 'AlphaDash'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaDash'
            ]
        ]
    ],
    'GAUiW68L6SoXkRgibn5CFA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaDash:5774',
        'data' => [
            'x' => 'नमस्कार-_'
        ],
        'validated' => [
            'x' => 'नमस्कार-_'
        ],
        'rules' => [
            'x' => 'AlphaDash'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaDash'
            ]
        ]
    ],
    'uAlHUk6knh7VANwX216qyA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaDash:5777',
        'data' => [
            'x' => '٧٨٩'
        ],
        'validated' => [
            'x' => '٧٨٩'
        ],
        'rules' => [
            'x' => 'AlphaDash'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaDash'
            ]
        ]
    ],
    'EUDMiAgNFdW6X6JFPLa0Kg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaWithAsciiOption:5787',
        'data' => [
            'x' => 'aslsdlks'
        ],
        'validated' => [
            'x' => 'aslsdlks'
        ],
        'rules' => [
            'x' => 'Alpha:ascii'
        ],
        'expandedRules' => [
            'x' => [
                'Alpha:ascii'
            ]
        ]
    ],
    'GYIL9ZmE4KQHh2R-PbJHAg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaNumWithAsciiOption:5838',
        'data' => [
            'x' => 'asls13dlks'
        ],
        'validated' => [
            'x' => 'asls13dlks'
        ],
        'rules' => [
            'x' => 'AlphaNum:ascii'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaNum:ascii'
            ]
        ]
    ],
    'CYS_PBpPQs93iMxSudEHqQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAlphaDashWithAsciiOption:5863',
        'data' => [
            'x' => 'asls1-_3dlks'
        ],
        'validated' => [
            'x' => 'asls1-_3dlks'
        ],
        'rules' => [
            'x' => 'AlphaDash:ascii'
        ],
        'expandedRules' => [
            'x' => [
                'AlphaDash:ascii'
            ]
        ]
    ],
    'UVlP-PexznMREaN5v9y1Og' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezone:5891',
        'data' => [
            'foo' => 'UTC'
        ],
        'validated' => [
            'foo' => 'UTC'
        ],
        'rules' => [
            'foo' => 'Timezone'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone'
            ]
        ]
    ],
    '_GzKagtAj_NhRLl3FcqoQQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezone:5894',
        'data' => [
            'foo' => 'Africa/Windhoek'
        ],
        'validated' => [
            'foo' => 'Africa/Windhoek'
        ],
        'rules' => [
            'foo' => 'Timezone'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone'
            ]
        ]
    ],
    'NmwlhTG_tSAWe8zAT-mhuQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezone:5897',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone'
            ]
        ]
    ],
    'SvDzLmRvIZG69NXQP3Ek_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAfricaOption:5928',
        'data' => [
            'foo' => 'Africa/Windhoek'
        ],
        'validated' => [
            'foo' => 'Africa/Windhoek'
        ],
        'rules' => [
            'foo' => 'Timezone:Africa'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Africa'
            ]
        ]
    ],
    's2eRSZlo-77xSPypBpvwVA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAmericaOption:5965',
        'data' => [
            'foo' => 'America/New_York'
        ],
        'validated' => [
            'foo' => 'America/New_York'
        ],
        'rules' => [
            'foo' => 'Timezone:America'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:America'
            ]
        ]
    ],
    'Y-Wt36tEfdcBQ9R332O41A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAntarcticaOption:5999',
        'data' => [
            'foo' => 'Antarctica/Mawson'
        ],
        'validated' => [
            'foo' => 'Antarctica/Mawson'
        ],
        'rules' => [
            'foo' => 'Timezone:Antarctica'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Antarctica'
            ]
        ]
    ],
    'LCHgTiq4R-Vn68OlnVK64A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithArcticOption:6033',
        'data' => [
            'foo' => 'Arctic/Longyearbyen'
        ],
        'validated' => [
            'foo' => 'Arctic/Longyearbyen'
        ],
        'rules' => [
            'foo' => 'Timezone:Arctic'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Arctic'
            ]
        ]
    ],
    'flEU2EKDrc-G0qxVh1jS1Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAsiaOption:6067',
        'data' => [
            'foo' => 'Asia/Tokyo'
        ],
        'validated' => [
            'foo' => 'Asia/Tokyo'
        ],
        'rules' => [
            'foo' => 'Timezone:Asia'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Asia'
            ]
        ]
    ],
    'mM0j0-BqVqY4SdfGgyWdCQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAtlanticOption:6101',
        'data' => [
            'foo' => 'Atlantic/Cape_Verde'
        ],
        'validated' => [
            'foo' => 'Atlantic/Cape_Verde'
        ],
        'rules' => [
            'foo' => 'Timezone:Atlantic'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Atlantic'
            ]
        ]
    ],
    'AxkNGABw1FskDfZG5vTYzw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAustraliaOption:6135',
        'data' => [
            'foo' => 'Australia/Sydney'
        ],
        'validated' => [
            'foo' => 'Australia/Sydney'
        ],
        'rules' => [
            'foo' => 'Timezone:Australia'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Australia'
            ]
        ]
    ],
    'YWqxcn3r3exj8y_XAynIJg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithEuropeOption:6169',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:Europe'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Europe'
            ]
        ]
    ],
    'VongO4Yn1MKf3Z666G8S3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithIndianOption:6203',
        'data' => [
            'foo' => 'Indian/Christmas'
        ],
        'validated' => [
            'foo' => 'Indian/Christmas'
        ],
        'rules' => [
            'foo' => 'Timezone:Indian'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Indian'
            ]
        ]
    ],
    'bHKCI2hGudn8ocPLNSm7yw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithPacificOption:6237',
        'data' => [
            'foo' => 'Pacific/Fiji'
        ],
        'validated' => [
            'foo' => 'Pacific/Fiji'
        ],
        'rules' => [
            'foo' => 'Timezone:Pacific'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Pacific'
            ]
        ]
    ],
    'gqbAs985r6zgkq_Asy4rXA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithUTCOption:6265',
        'data' => [
            'foo' => 'UTC'
        ],
        'validated' => [
            'foo' => 'UTC'
        ],
        'rules' => [
            'foo' => 'Timezone:UTC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:UTC'
            ]
        ]
    ],
    'fvg9RTrkbs29iW2ESgPtrQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllOption:6296',
        'data' => [
            'foo' => 'UTC'
        ],
        'validated' => [
            'foo' => 'UTC'
        ],
        'rules' => [
            'foo' => 'Timezone:All'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All'
            ]
        ]
    ],
    'w6ZCBhkV7--0jBHgGDuzqQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllOption:6299',
        'data' => [
            'foo' => 'Africa/Windhoek'
        ],
        'validated' => [
            'foo' => 'Africa/Windhoek'
        ],
        'rules' => [
            'foo' => 'Timezone:All'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All'
            ]
        ]
    ],
    '6bmE515TPdq7U48FLjnUdg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllOption:6302',
        'data' => [
            'foo' => 'Indian/Christmas'
        ],
        'validated' => [
            'foo' => 'Indian/Christmas'
        ],
        'rules' => [
            'foo' => 'Timezone:All'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All'
            ]
        ]
    ],
    'QbwLjfNSw1GyBZvFbXWVow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllOption:6305',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:All'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All'
            ]
        ]
    ],
    'YfqtAo-n8ULVJHlgEwjGvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6333',
        'data' => [
            'foo' => 'UTC'
        ],
        'validated' => [
            'foo' => 'UTC'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    'wXEWDpGcjW7Pk3J4t604xA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6336',
        'data' => [
            'foo' => 'Africa/Windhoek'
        ],
        'validated' => [
            'foo' => 'Africa/Windhoek'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    '9Iih3FajIuQ-RlMdY7INXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6339',
        'data' => [
            'foo' => 'Indian/Christmas'
        ],
        'validated' => [
            'foo' => 'Indian/Christmas'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    'cKwsZoyfnpHTJZVAJf5gfg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6342',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    'eWWwlK3NgR0ALdAto2x7Fw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6345',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    '5tCTGUnoqNr2g1mUMa1UQA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6351',
        'data' => [
            'foo' => 'GMT'
        ],
        'validated' => [
            'foo' => 'GMT'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    'qRqHAz1115YMRD7T0U9wlQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithAllWithBCOption:6354',
        'data' => [
            'foo' => 'Europe/London'
        ],
        'validated' => [
            'foo' => 'Europe/London'
        ],
        'rules' => [
            'foo' => 'Timezone:All_with_BC'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:All_with_BC'
            ]
        ]
    ],
    'Mp4udpeaSJIl4wG7g7sDAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithPerCountryOptionWithoutSpecifyingCountry:6373',
        'data' => [
            'foo' => 'Africa/Windhoek'
        ],
        'validated' => [
            'foo' => 'Africa/Windhoek'
        ],
        'rules' => [
            'foo' => 'Timezone:Per_country,NA'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Per_country,NA'
            ]
        ]
    ],
    'VA9MM240n2Y7bLKUhKwheA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithPerCountryOptionWithoutSpecifyingCountry:6379',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:Per_country,UA'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Per_country,UA'
            ]
        ]
    ],
    'ffIvYSZrZ-uTPA4oMfZCRg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateTimezoneWithPerCountryOptionWithoutSpecifyingCountry:6382',
        'data' => [
            'foo' => 'Europe/Kyiv'
        ],
        'validated' => [
            'foo' => 'Europe/Kyiv'
        ],
        'rules' => [
            'foo' => 'Timezone:Per_country,ua'
        ],
        'expandedRules' => [
            'foo' => [
                'Timezone:Per_country,ua'
            ]
        ]
    ],
    'Ed8FqWnXuxWdfQjd_u8GrA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRegex:6401',
        'data' => [
            'x' => 'asdasdf'
        ],
        'validated' => [
            'x' => 'asdasdf'
        ],
        'rules' => [
            'x' => 'Regex:/^[a-z]+$/i'
        ],
        'expandedRules' => [
            'x' => [
                'Regex:/^[a-z]+$/i'
            ]
        ]
    ],
    'brJFY2KeTDmhQ8Ec0qXp-g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRegex:6408',
        'data' => [
            'x' => 'a,b'
        ],
        'validated' => [
            'x' => 'a,b'
        ],
        'rules' => [
            'x' => 'Regex:/^a,b$/i'
        ],
        'expandedRules' => [
            'x' => [
                'Regex:/^a,b$/i'
            ]
        ]
    ],
    'nb__xpQGmAcBVJDMt57sQw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRegex:6411',
        'data' => [
            'x' => '12'
        ],
        'validated' => [
            'x' => '12'
        ],
        'rules' => [
            'x' => 'Regex:/^12$/i'
        ],
        'expandedRules' => [
            'x' => [
                'Regex:/^12$/i'
            ]
        ]
    ],
    'ufu0vsr0pUJav5iwVXANow' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRegex:6414',
        'data' => [
            'x' => 12
        ],
        'validated' => [
            'x' => 12
        ],
        'rules' => [
            'x' => 'Regex:/^12$/i'
        ],
        'expandedRules' => [
            'x' => [
                'Regex:/^12$/i'
            ]
        ]
    ],
    'bwsabuVBdh4v1iuNY3yW5w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateRegex:6417',
        'data' => [
            'x' => [
                'y' => [
                    'z' => 'james'
                ]
            ]
        ],
        'validated' => [
            'x' => [
                'y' => [
                    'z' => 'james'
                ]
            ]
        ],
        'rules' => [
            'x.*.z' => [
                'Regex:/^(taylor|james)$/i'
            ]
        ],
        'expandedRules' => [
            'x.y.z' => [
                'Regex:/^(taylor|james)$/i'
            ]
        ]
    ],
    'GTAQ0caL6EEyybBV5wCr0Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNotRegex:6424',
        'data' => [
            'x' => 'foo bar'
        ],
        'validated' => [
            'x' => 'foo bar'
        ],
        'rules' => [
            'x' => 'NotRegex:/[xyz]/i'
        ],
        'expandedRules' => [
            'x' => [
                'NotRegex:/[xyz]/i'
            ]
        ]
    ],
    '0FavCY8A-VVTidC9P6XdCw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNotRegex:6431',
        'data' => [
            'x' => 'foo bar'
        ],
        'validated' => [
            'x' => 'foo bar'
        ],
        'rules' => [
            'x' => 'NotRegex:/x{3,}/i'
        ],
        'expandedRules' => [
            'x' => [
                'NotRegex:/x{3,}/i'
            ]
        ]
    ],
    'djeS7wMrVnHJeouLMH2dkw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6439',
        'data' => [
            'x' => '2000-01-01'
        ],
        'validated' => [
            'x' => '2000-01-01'
        ],
        'rules' => [
            'x' => 'date'
        ],
        'expandedRules' => [
            'x' => [
                'date'
            ]
        ]
    ],
    'mgL3uzrl_Jj_vrIE0iPVxw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6442',
        'data' => [
            'x' => '01/01/2000'
        ],
        'validated' => [
            'x' => '01/01/2000'
        ],
        'rules' => [
            'x' => 'date'
        ],
        'expandedRules' => [
            'x' => [
                'date'
            ]
        ]
    ],
    'TJwDxetcf1XfjVUeAfElEg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6454',
        'data' => [
            'x' => \DateTime::__set_state([
                'date' => '2026-05-07 13:00:09.032201',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \DateTime::__set_state([
                'date' => '2026-05-07 13:00:09.032201',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'date'
        ],
        'expandedRules' => [
            'x' => [
                'date'
            ]
        ]
    ],
    '_f0gzsm0dQAGRwoBixxnOw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6457',
        'data' => [
            'x' => \DateTimeImmutable::__set_state([
                'date' => '2026-05-07 13:00:09.032361',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \DateTimeImmutable::__set_state([
                'date' => '2026-05-07 13:00:09.032361',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'date'
        ],
        'expandedRules' => [
            'x' => [
                'date'
            ]
        ]
    ],
    '9IXWeeEFAQVOr_Jvqzeh4w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6460',
        'data' => [
            'x' => '2000-01-01'
        ],
        'validated' => [
            'x' => '2000-01-01'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d'
            ]
        ]
    ],
    'cpQCFUyyjpvIAlFsc_AxOQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6479',
        'data' => [
            'x' => '2013-02'
        ],
        'validated' => [
            'x' => '2013-02'
        ],
        'rules' => [
            'x' => 'date_format:Y-m'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m'
            ]
        ]
    ],
    'fDOONtFOxQNqchqQwu7WwQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6482',
        'data' => [
            'x' => '2000-01-01T00:00:00Atlantic/Azores'
        ],
        'validated' => [
            'x' => '2000-01-01T00:00:00Atlantic/Azores'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d\\TH:i:se'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d\\TH:i:se'
            ]
        ]
    ],
    'I6Ik14eDJ8mw0-x7E2Md3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6485',
        'data' => [
            'x' => '2000-01-01T00:00:00Z'
        ],
        'validated' => [
            'x' => '2000-01-01T00:00:00Z'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d\\TH:i:sT'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d\\TH:i:sT'
            ]
        ]
    ],
    'Lan2yxonKIyQ8Pmo2yG7sw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6488',
        'data' => [
            'x' => '2000-01-01T00:00:00+0000'
        ],
        'validated' => [
            'x' => '2000-01-01T00:00:00+0000'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d\\TH:i:sO'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d\\TH:i:sO'
            ]
        ]
    ],
    'VnL5JDVYB8r6qZokkuDT0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6491',
        'data' => [
            'x' => '2000-01-01T00:00:00+00:30'
        ],
        'validated' => [
            'x' => '2000-01-01T00:00:00+00:30'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d\\TH:i:sP'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d\\TH:i:sP'
            ]
        ]
    ],
    'OpqOFHlriQhznuGWI3Sapw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6494',
        'data' => [
            'x' => '2000-01-01 17:43:59'
        ],
        'validated' => [
            'x' => '2000-01-01 17:43:59'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s'
            ]
        ]
    ],
    '2rnnHZg2ulfqnkGP5lNU0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6500',
        'data' => [
            'x' => '2000-01-01 17:43:59'
        ],
        'validated' => [
            'x' => '2000-01-01 17:43:59'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s,H:i:s'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s,H:i:s'
            ]
        ]
    ],
    'yAl6NXr6h7kos9zS87GbGQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6503',
        'data' => [
            'x' => '17:43:59'
        ],
        'validated' => [
            'x' => '17:43:59'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s,H:i:s'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s,H:i:s'
            ]
        ]
    ],
    '6RL072KgGwq_Zf-giqEU1g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6506',
        'data' => [
            'x' => '17:43:59'
        ],
        'validated' => [
            'x' => '17:43:59'
        ],
        'rules' => [
            'x' => 'date_format:H:i:s'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i:s'
            ]
        ]
    ],
    '3H0tf1F5oXbw9tpZnc7ANg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateDateAndFormat:6512',
        'data' => [
            'x' => '17:43'
        ],
        'validated' => [
            'x' => '17:43'
        ],
        'rules' => [
            'x' => 'date_format:H:i'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i'
            ]
        ]
    ],
    '1R1u4nXOxGInc_b5IfJyoQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6520',
        'data' => [
            'x' => '2000-01-01'
        ],
        'validated' => [
            'x' => '2000-01-01'
        ],
        'rules' => [
            'x' => 'date_equals:2000-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:2000-01-01'
            ]
        ]
    ],
    'fvHw1V9QaflejqlgIBKnlw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6523',
        'data' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000002df60000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000002df60000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'date_equals:2000-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:2000-01-01'
            ]
        ]
    ],
    'qfims4rNKdskEwuzTxB6oQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6529',
        'data' => [
            'start' => \DateTime::__set_state([
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ]),
            'ends' => \DateTime::__set_state([
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'ends' => \DateTime::__set_state([
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'ends' => 'date_equals:start'
        ],
        'expandedRules' => [
            'ends' => [
                'date_equals:start'
            ]
        ]
    ],
    'IA8sIV3ukuuTLHVkHAlBmw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6532',
        'data' => [
            'x' => '2026-05-07'
        ],
        'validated' => [
            'x' => '2026-05-07'
        ],
        'rules' => [
            'x' => 'date_equals:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:today'
            ]
        ]
    ],
    'HzPtUTt5tWI03304xLVnAQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6541',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|date_equals:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'date_equals:today'
            ]
        ]
    ],
    'CuCSrPcvjIX25DOAmTiwww' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6550',
        'data' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'validated' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s|date_equals:2012-01-01 17:44:00'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s',
                'date_equals:2012-01-01 17:44:00'
            ]
        ]
    ],
    'm2qviHDQy0baQaQpU04XQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6559',
        'data' => [
            'x' => '17:44:00'
        ],
        'validated' => [
            'x' => '17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:H:i:s|date_equals:17:44:00'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i:s',
                'date_equals:17:44:00'
            ]
        ]
    ],
    '2RMINiicVU9NR6xD3GkE1g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEquals:6568',
        'data' => [
            'x' => '17:44'
        ],
        'validated' => [
            'x' => '17:44'
        ],
        'rules' => [
            'x' => 'date_format:H:i|date_equals:17:44'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i',
                'date_equals:17:44'
            ]
        ]
    ],
    'UA846blQm6csqf78LPn_tQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEqualsRespectsCarbonTestNowWhenParameterIsRelative:6584',
        'data' => [
            'x' => '2018-01-01 00:00:00'
        ],
        'validated' => [
            'x' => '2018-01-01 00:00:00'
        ],
        'rules' => [
            'x' => 'date_equals:now'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:now'
            ]
        ]
    ],
    '0CORJ23qRMvKf-WG8nlbgQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEqualsRespectsCarbonTestNowWhenParameterIsRelative:6587',
        'data' => [
            'x' => '2018-01-01'
        ],
        'validated' => [
            'x' => '2018-01-01'
        ],
        'rules' => [
            'x' => 'date_equals:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:today'
            ]
        ]
    ],
    'IQDnhLfoGnS3XWbuNaE9tw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEqualsRespectsCarbonTestNowWhenParameterIsRelative:6596',
        'data' => [
            'x' => '01/01/2018'
        ],
        'validated' => [
            'x' => '01/01/2018'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|date_equals:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'date_equals:today'
            ]
        ]
    ],
    'bSzK7kNLceAgr3dh9_P6DA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEqualsRespectsCarbonTestNowWhenParameterIsRelative:6605',
        'data' => [
            'x' => \DateTime::__set_state([
                'date' => '2018-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \DateTime::__set_state([
                'date' => '2018-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'date_equals:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:today'
            ]
        ]
    ],
    'efmcDYnKt114ovTal4zJxQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testDateEqualsRespectsCarbonTestNowWhenParameterIsRelative:6614',
        'data' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000000bb10000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2018-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000000bb10000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2018-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'date_equals:today|after:yesterday|before:tomorrow'
        ],
        'expandedRules' => [
            'x' => [
                'date_equals:today',
                'after:yesterday',
                'before:tomorrow'
            ]
        ]
    ],
    '-h6X4LBFojnocJ3TsDuWrw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6628',
        'data' => [
            'x' => '2000-01-01'
        ],
        'validated' => [
            'x' => '2000-01-01'
        ],
        'rules' => [
            'x' => 'Before:2012-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'Before:2012-01-01'
            ]
        ]
    ],
    'ajcxONnbYgSw-bJfdmbiFA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6634',
        'data' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '000000000000309e0000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '000000000000309e0000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'Before:2012-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'Before:2012-01-01'
            ]
        ]
    ],
    'SjcDkDtxxGtlHRcOriVsIA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6640',
        'data' => [
            'x' => '2012-01-01'
        ],
        'validated' => [
            'x' => '2012-01-01'
        ],
        'rules' => [
            'x' => 'After:2000-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'After:2000-01-01'
            ]
        ]
    ],
    'WHAK1NE3XebrhfiN9iVH5Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6646',
        'data' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000002ed40000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2012-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '0000000000002ed40000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2012-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'After:2000-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'After:2000-01-01'
            ]
        ]
    ],
    'TL0HGAmCbOjK1dWPoOGErw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6652',
        'data' => [
            'start' => '2012-01-01',
            'ends' => '2013-01-01'
        ],
        'validated' => [
            'start' => '2012-01-01',
            'ends' => '2013-01-01'
        ],
        'rules' => [
            'start' => 'After:2000-01-01',
            'ends' => 'After:start'
        ],
        'expandedRules' => [
            'start' => [
                'After:2000-01-01'
            ],
            'ends' => [
                'After:start'
            ]
        ]
    ],
    'Aw0jHyrQtVfSfU-bdf8A9A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6658',
        'data' => [
            'start' => '2012-01-01',
            'ends' => '2013-01-01'
        ],
        'validated' => [
            'start' => '2012-01-01',
            'ends' => '2013-01-01'
        ],
        'rules' => [
            'start' => 'Before:ends',
            'ends' => 'After:start'
        ],
        'expandedRules' => [
            'start' => [
                'Before:ends'
            ],
            'ends' => [
                'After:start'
            ]
        ]
    ],
    'MDbCJ0I-nCNxh0MC-BqPTQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6664',
        'data' => [
            'x' => \DateTime::__set_state([
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'x' => \DateTime::__set_state([
                'date' => '2000-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'x' => 'Before:2012-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'Before:2012-01-01'
            ]
        ]
    ],
    'bNYl-D4h0ykt-qELPekIGg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6667',
        'data' => [
            'start' => \DateTime::__set_state([
                'date' => '2012-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ]),
            'ends' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '00000000000038700000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2013-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'start' => \DateTime::__set_state([
                'date' => '2012-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ]),
            'ends' => \Illuminate\Support\Carbon::__set_state([
                'endOfTime' => false,
                'startOfTime' => false,
                'constructedObjectId' => '00000000000038700000000000000000',
                'clock' => null,
                'localMonthsOverflow' => null,
                'localYearsOverflow' => null,
                'localStrictModeEnabled' => null,
                'localHumanDiffOptions' => null,
                'localToStringFormat' => null,
                'localSerializer' => null,
                'localMacros' => null,
                'localGenericMacros' => null,
                'localFormatFunction' => null,
                'localTranslator' => null,
                'dumpProperties' => [
                    'date',
                    'timezone_type',
                    'timezone'
                ],
                'dumpLocale' => null,
                'dumpDateProperties' => null,
                'date' => '2013-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'start' => 'Before:ends',
            'ends' => 'After:start'
        ],
        'expandedRules' => [
            'start' => [
                'Before:ends'
            ],
            'ends' => [
                'After:start'
            ]
        ]
    ],
    'm4l0l-NdC3fQLGTgXhGJRg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6670',
        'data' => [
            'start' => '2012-01-01',
            'ends' => \DateTime::__set_state([
                'date' => '2013-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'validated' => [
            'start' => '2012-01-01',
            'ends' => \DateTime::__set_state([
                'date' => '2013-01-01 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ])
        ],
        'rules' => [
            'start' => 'Before:ends',
            'ends' => 'After:start'
        ],
        'expandedRules' => [
            'start' => [
                'Before:ends'
            ],
            'ends' => [
                'After:start'
            ]
        ]
    ],
    'GtJ3VdXzud7r0jlh9X1F3A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6676',
        'data' => [
            'start' => 'today',
            'ends' => 'tomorrow'
        ],
        'validated' => [
            'start' => 'today',
            'ends' => 'tomorrow'
        ],
        'rules' => [
            'start' => 'Before:ends',
            'ends' => 'After:start'
        ],
        'expandedRules' => [
            'start' => [
                'Before:ends'
            ],
            'ends' => [
                'After:start'
            ]
        ]
    ],
    '32SnL1_Shpk61ekrjOCd2w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6679',
        'data' => [
            'x' => '2012-01-01 17:43:59'
        ],
        'validated' => [
            'x' => '2012-01-01 17:43:59'
        ],
        'rules' => [
            'x' => 'Before:2012-01-01 17:44|After:2012-01-01 17:43:58'
        ],
        'expandedRules' => [
            'x' => [
                'Before:2012-01-01 17:44',
                'After:2012-01-01 17:43:58'
            ]
        ]
    ],
    'wlhv6lDYQeR82JMITvghVg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6682',
        'data' => [
            'x' => '2012-01-01 17:44:01'
        ],
        'validated' => [
            'x' => '2012-01-01 17:44:01'
        ],
        'rules' => [
            'x' => 'Before:2012-01-01 17:44:02|After:2012-01-01 17:44'
        ],
        'expandedRules' => [
            'x' => [
                'Before:2012-01-01 17:44:02',
                'After:2012-01-01 17:44'
            ]
        ]
    ],
    'puebgU-FTPXNDnNtdMTBzw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6691',
        'data' => [
            'x' => '17:43:59'
        ],
        'validated' => [
            'x' => '17:43:59'
        ],
        'rules' => [
            'x' => 'Before:17:44|After:17:43:58'
        ],
        'expandedRules' => [
            'x' => [
                'Before:17:44',
                'After:17:43:58'
            ]
        ]
    ],
    'cU3t8A_lVTnWWtrxw1B6SQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6694',
        'data' => [
            'x' => '17:44:01'
        ],
        'validated' => [
            'x' => '17:44:01'
        ],
        'rules' => [
            'x' => 'Before:17:44:02|After:17:44'
        ],
        'expandedRules' => [
            'x' => [
                'Before:17:44:02',
                'After:17:44'
            ]
        ]
    ],
    'CHUPiaXxyEajq0Jk2ZJVhQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfter:6703',
        'data' => [
            'x' => '0001-01-01T00:00'
        ],
        'validated' => [
            'x' => '0001-01-01T00:00'
        ],
        'rules' => [
            'x' => 'before:1970-01-01'
        ],
        'expandedRules' => [
            'x' => [
                'before:1970-01-01'
            ]
        ]
    ],
    'wyl647S_Ia6t69kxZfFUcQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6720',
        'data' => [
            'x' => '31/12/2000'
        ],
        'validated' => [
            'x' => '31/12/2000'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|before:31/12/2012'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'before:31/12/2012'
            ]
        ]
    ],
    'HO_GbaXN0SrO-QaGl7qlyw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6729',
        'data' => [
            'x' => '31/12/2012'
        ],
        'validated' => [
            'x' => '31/12/2012'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|after:31/12/2000'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'after:31/12/2000'
            ]
        ]
    ],
    'CNp0nIcec7a112QGTG-VYw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6735',
        'data' => [
            'start' => '31/12/2012',
            'ends' => '31/12/2013'
        ],
        'validated' => [
            'start' => '31/12/2012',
            'ends' => '31/12/2013'
        ],
        'rules' => [
            'start' => 'date_format:d/m/Y|after:31/12/2000',
            'ends' => 'date_format:d/m/Y|after:start'
        ],
        'expandedRules' => [
            'start' => [
                'date_format:d/m/Y',
                'after:31/12/2000'
            ],
            'ends' => [
                'date_format:d/m/Y',
                'after:start'
            ]
        ]
    ],
    'N8xx-OK-hGPPKK0td9WTuw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6747',
        'data' => [
            'start' => '31/12/2012',
            'ends' => '31/12/2013'
        ],
        'validated' => [
            'start' => '31/12/2012',
            'ends' => '31/12/2013'
        ],
        'rules' => [
            'start' => 'date_format:d/m/Y|before:ends',
            'ends' => 'date_format:d/m/Y|after:start'
        ],
        'expandedRules' => [
            'start' => [
                'date_format:d/m/Y',
                'before:ends'
            ],
            'ends' => [
                'date_format:d/m/Y',
                'after:start'
            ]
        ]
    ],
    'NXI9WzYV3fOzh6XMpTw-Yg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6762',
        'data' => [
            'start' => '31/12/2012',
            'ends' => null
        ],
        'validated' => [
            'start' => '31/12/2012',
            'ends' => null
        ],
        'rules' => [
            'start' => 'date_format:d/m/Y|before:ends',
            'ends' => 'nullable|date_format:d/m/Y|after:start'
        ],
        'expandedRules' => [
            'start' => [
                'date_format:d/m/Y',
                'before:ends'
            ],
            'ends' => [
                'nullable',
                'date_format:d/m/Y',
                'after:start'
            ]
        ]
    ],
    'qgIsrLFtbTujYExAR4XQeQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6771',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|after:yesterday|before:tomorrow'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'after:yesterday',
                'before:tomorrow'
            ]
        ]
    ],
    'uW5KFotfUsCU5lkhCAIjIA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6780',
        'data' => [
            'x' => '2026-05-07'
        ],
        'validated' => [
            'x' => '2026-05-07'
        ],
        'rules' => [
            'x' => 'after:yesterday|before:tomorrow'
        ],
        'expandedRules' => [
            'x' => [
                'after:yesterday',
                'before:tomorrow'
            ]
        ]
    ],
    'dR2c2w0Nu6JicuxLOwobfg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6789',
        'data' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'validated' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s|before:2012-01-01 17:44:01|after:2012-01-01 17:43:59'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s',
                'before:2012-01-01 17:44:01',
                'after:2012-01-01 17:43:59'
            ]
        ]
    ],
    'zlC6cEOyEmroGgMhBVyz2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6798',
        'data' => [
            'x' => '17:44:00'
        ],
        'validated' => [
            'x' => '17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:H:i:s|before:17:44:01|after:17:43:59'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i:s',
                'before:17:44:01',
                'after:17:43:59'
            ]
        ]
    ],
    'ay5IvcxqMdgFhvnQQ1Kkrw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6807',
        'data' => [
            'x' => '17:44'
        ],
        'validated' => [
            'x' => '17:44'
        ],
        'rules' => [
            'x' => 'date_format:H:i|before:17:45|after:17:43'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i',
                'before:17:45',
                'after:17:43'
            ]
        ]
    ],
    'AL8qleidMliS9C-2OmZpVA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6822',
        'data' => [
            'from' => '2020-08-05',
            'to' => '2020-06-08'
        ],
        'validated' => [
            'from' => '2020-08-05',
            'to' => '2020-06-08'
        ],
        'rules' => [
            'from' => 'date_format:Y-m-d|before:to',
            'to' => 'date_format:Y-d-m'
        ],
        'expandedRules' => [
            'from' => [
                'date_format:Y-m-d',
                'before:to'
            ],
            'to' => [
                'date_format:Y-d-m'
            ]
        ]
    ],
    'iRg6NvH6tRNMZbzD7sfymg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testBeforeAndAfterWithFormat:6825',
        'data' => [
            'from' => '2020-05-08',
            'to' => '2020-08-06'
        ],
        'validated' => [
            'from' => '2020-05-08',
            'to' => '2020-08-06'
        ],
        'rules' => [
            'from' => 'date_format:Y-m-d',
            'to' => 'date_format:Y-d-m|after:from'
        ],
        'expandedRules' => [
            'from' => [
                'date_format:Y-m-d'
            ],
            'to' => [
                'date_format:Y-d-m',
                'after:from'
            ]
        ]
    ],
    'F7ivFqFhcoJ1MGjUlMktdQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6833',
        'data' => [
            'x' => '2012-01-15'
        ],
        'validated' => [
            'x' => '2012-01-15'
        ],
        'rules' => [
            'x' => 'before_or_equal:2012-01-15'
        ],
        'expandedRules' => [
            'x' => [
                'before_or_equal:2012-01-15'
            ]
        ]
    ],
    'S8NdMYN8YlOQoO7aLpmbaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6836',
        'data' => [
            'x' => '2012-01-15'
        ],
        'validated' => [
            'x' => '2012-01-15'
        ],
        'rules' => [
            'x' => 'before_or_equal:2012-01-16'
        ],
        'expandedRules' => [
            'x' => [
                'before_or_equal:2012-01-16'
            ]
        ]
    ],
    'XZakq_Wj49rVJvp3EKYwHg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6842',
        'data' => [
            'x' => '15/01/2012'
        ],
        'validated' => [
            'x' => '15/01/2012'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|before_or_equal:15/01/2012'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'before_or_equal:15/01/2012'
            ]
        ]
    ],
    'BKbkB-JxXhlq9Gae-UVtiA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6848',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|before_or_equal:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'before_or_equal:today'
            ]
        ]
    ],
    'jgkg3feryxVGIbpLbrvBaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6851',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|before_or_equal:tomorrow'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'before_or_equal:tomorrow'
            ]
        ]
    ],
    'WxnOPuCCwTpzopkmxSw1UA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6857',
        'data' => [
            'x' => '2012-01-15'
        ],
        'validated' => [
            'x' => '2012-01-15'
        ],
        'rules' => [
            'x' => 'after_or_equal:2012-01-15'
        ],
        'expandedRules' => [
            'x' => [
                'after_or_equal:2012-01-15'
            ]
        ]
    ],
    'L78Uk9PJK9x3soT5kXSV4A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6860',
        'data' => [
            'x' => '2012-01-15'
        ],
        'validated' => [
            'x' => '2012-01-15'
        ],
        'rules' => [
            'x' => 'after_or_equal:2012-01-14'
        ],
        'expandedRules' => [
            'x' => [
                'after_or_equal:2012-01-14'
            ]
        ]
    ],
    'sJrRZe0M0tBgWVGs7lriTQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6866',
        'data' => [
            'x' => '15/01/2012'
        ],
        'validated' => [
            'x' => '15/01/2012'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|after_or_equal:15/01/2012'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'after_or_equal:15/01/2012'
            ]
        ]
    ],
    'Cr6sQl8LDjVXbrg2daQcfA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6872',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|after_or_equal:today'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'after_or_equal:today'
            ]
        ]
    ],
    'Tdaq9lcR4jVg35MC0Qcz4Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6875',
        'data' => [
            'x' => '07/05/2026'
        ],
        'validated' => [
            'x' => '07/05/2026'
        ],
        'rules' => [
            'x' => 'date_format:d/m/Y|after_or_equal:yesterday'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:d/m/Y',
                'after_or_equal:yesterday'
            ]
        ]
    ],
    'p4oN5OycOP2OdPBbDLjrGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6881',
        'data' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'validated' => [
            'x' => '2012-01-01 17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:Y-m-d H:i:s|before_or_equal:2012-01-01 17:44:00|after_or_equal:2012-01-01 17:44:00'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:Y-m-d H:i:s',
                'before_or_equal:2012-01-01 17:44:00',
                'after_or_equal:2012-01-01 17:44:00'
            ]
        ]
    ],
    'jK2EfYNdGrW6X1zsoEn75g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6890',
        'data' => [
            'x' => '17:44:00'
        ],
        'validated' => [
            'x' => '17:44:00'
        ],
        'rules' => [
            'x' => 'date_format:H:i:s|before_or_equal:17:44:00|after_or_equal:17:44:00'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i:s',
                'before_or_equal:17:44:00',
                'after_or_equal:17:44:00'
            ]
        ]
    ],
    '0Mp4B4Ti-NhLJbeN-4e-qA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6899',
        'data' => [
            'x' => '17:44'
        ],
        'validated' => [
            'x' => '17:44'
        ],
        'rules' => [
            'x' => 'date_format:H:i|before_or_equal:17:44|after_or_equal:17:44'
        ],
        'expandedRules' => [
            'x' => [
                'date_format:H:i',
                'before_or_equal:17:44',
                'after_or_equal:17:44'
            ]
        ]
    ],
    'ZTvBafxKgK25ptlyCmJVyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6908',
        'data' => [
            'foo' => '2012-01-14',
            'bar' => '2012-01-15'
        ],
        'validated' => [
            'foo' => '2012-01-14'
        ],
        'rules' => [
            'foo' => 'before_or_equal:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'before_or_equal:bar'
            ]
        ]
    ],
    'vYlJvAksHQ2THM-RY3F-7Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6911',
        'data' => [
            'foo' => '2012-01-15',
            'bar' => '2012-01-15'
        ],
        'validated' => [
            'foo' => '2012-01-15'
        ],
        'rules' => [
            'foo' => 'before_or_equal:bar'
        ],
        'expandedRules' => [
            'foo' => [
                'before_or_equal:bar'
            ]
        ]
    ],
    '_NEWDbSye6s8-dxSfe9Dxw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6920',
        'data' => [
            'foo' => '2012-01-15 11:00',
            'bar' => null
        ],
        'validated' => [
            'foo' => '2012-01-15 11:00',
            'bar' => null
        ],
        'rules' => [
            'foo' => 'date_format:Y-m-d H:i|before_or_equal:bar',
            'bar' => 'date_format:Y-m-d H:i|nullable'
        ],
        'expandedRules' => [
            'foo' => [
                'date_format:Y-m-d H:i',
                'before_or_equal:bar'
            ],
            'bar' => [
                'date_format:Y-m-d H:i',
                'nullable'
            ]
        ]
    ],
    'ao7IWX1w3-VAClecK1L5jw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6929',
        'data' => [
            'from' => '2020-08-05',
            'to' => '2020-05-08'
        ],
        'validated' => [
            'from' => '2020-08-05',
            'to' => '2020-05-08'
        ],
        'rules' => [
            'from' => 'date_format:Y-m-d|before_or_equal:to',
            'to' => 'date_format:Y-d-m'
        ],
        'expandedRules' => [
            'from' => [
                'date_format:Y-m-d',
                'before_or_equal:to'
            ],
            'to' => [
                'date_format:Y-d-m'
            ]
        ]
    ],
    'qwAsGWBishy2mvkuDQhhbw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWeakBeforeAndAfter:6932',
        'data' => [
            'from' => '2020-05-08',
            'to' => '2020-08-05'
        ],
        'validated' => [
            'from' => '2020-05-08',
            'to' => '2020-08-05'
        ],
        'rules' => [
            'from' => 'date_format:Y-m-d',
            'to' => 'date_format:Y-d-m|after_or_equal:from'
        ],
        'expandedRules' => [
            'from' => [
                'date_format:Y-m-d'
            ],
            'to' => [
                'date_format:Y-d-m',
                'after_or_equal:from'
            ]
        ]
    ],
    'EsAHbVpiKJJpP5wQmSCWbw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSometimesImplicitEachWithAsterisksBeforeAndAfter:7172',
        'data' => [
            'foo' => [
                [
                    'start' => '2016-04-19',
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'start' => '2016-04-19'
                ]
            ]
        ],
        'rules' => [],
        'expandedRules' => [
            'foo.0.start' => [
                'before:foo.*.end'
            ]
        ]
    ],
    'xz_GCHmrZaFdcem5Np5BFw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSometimesImplicitEachWithAsterisksBeforeAndAfter:7182',
        'data' => [
            'foo' => [
                [
                    'start' => '2016-04-19',
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'start' => '2016-04-19'
                ]
            ]
        ],
        'rules' => [],
        'expandedRules' => [
            'foo.0.start' => [
                'before:foo.*.end'
            ]
        ]
    ],
    'HF2Pcqh7GpZzlvPyDNICtA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateSometimesImplicitEachWithAsterisksBeforeAndAfter:7203',
        'data' => [
            'foo' => [
                [
                    'start' => '2016-04-19',
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'rules' => [],
        'expandedRules' => [
            'foo.0.end' => [
                'after:foo.*.start'
            ]
        ]
    ],
    '4vTtKaJjYQXJZoijDVQfeA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testCustomImplicitValidators:7296',
        'data' => [],
        'validated' => [],
        'rules' => [
            'implicit_rule' => 'foo'
        ],
        'expandedRules' => [
            'implicit_rule' => [
                'foo'
            ]
        ]
    ],
    'SSUsn5KplyAEMyiEpzHtdQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testCustomDependentValidators:7311',
        'data' => [
            [
                'name' => 'Jamie',
                'age' => 27
            ]
        ],
        'validated' => [
            [
                'name' => 'Jamie'
            ]
        ],
        'rules' => [
            '*.name' => 'dependent_rule:*.age'
        ],
        'expandedRules' => [
            '0.name' => [
                'dependent_rule:*.age'
            ]
        ]
    ],
    '15P4UjQW4Af2P5VD0BPXtw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisks:7341',
        'data' => [
            'foo' => [
                5,
                10,
                15
            ]
        ],
        'validated' => [
            'foo' => [
                5,
                10,
                15
            ]
        ],
        'rules' => [
            'foo' => 'Array',
            'foo.*' => 'Numeric|Min:4|Max:16'
        ],
        'expandedRules' => [
            'foo' => [
                'Array'
            ],
            'foo.0' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ],
            'foo.1' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ],
            'foo.2' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ]
        ]
    ],
    'V_a_222X1ibGxrMZ75_hJg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisks:7355',
        'data' => [
            'foo' => [
                5,
                10,
                15
            ]
        ],
        'validated' => [
            'foo' => [
                5,
                10,
                15
            ]
        ],
        'rules' => [
            'foo' => 'Array',
            'foo.*' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'Array'
            ],
            'foo.0' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ],
            'foo.1' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ],
            'foo.2' => [
                'Numeric',
                'Min:4',
                'Max:16'
            ]
        ]
    ],
    'DrdVqJSooiVuL_ZRDagOSw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisks:7361',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo' => 'Array',
            'foo.*.name' => 'Required|String'
        ],
        'expandedRules' => [
            'foo' => [
                'Array'
            ],
            'foo.0.name' => [
                'Required',
                'String'
            ],
            'foo.1.name' => [
                'Required',
                'String'
            ]
        ]
    ],
    'o4P6E-5QwXIyzKhH1vBwIw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisks:7378',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo' => 'Array',
            'foo.*.name' => [
                'Required',
                'String'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'Array'
            ],
            'foo.0.name' => [
                'Required',
                'String'
            ],
            'foo.1.name' => [
                'Required',
                'String'
            ]
        ]
    ],
    'GV6oha5hlBSUEeeW_xLkXw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testSometimesOnArraysInImplicitRules:7397',
        'data' => [
            [
                'bar' => 'baz'
            ]
        ],
        'validated' => [],
        'rules' => [
            '*.foo' => 'sometimes|required|string'
        ],
        'expandedRules' => [
            '0.foo' => [
                'sometimes',
                'required',
                'string'
            ]
        ]
    ],
    'Lryc-cUjnVn1mfu2r1yguQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksForRequiredNonExistingKey:7423',
        'data' => [],
        'validated' => [],
        'rules' => [
            'names.*.first' => 'required'
        ],
        'expandedRules' => []
    ],
    'bprhhXQzVuYV_8HKp17SKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksForRequiredNonExistingKey:7455',
        'data' => [
            'names' => [
                [
                    'second' => '2'
                ]
            ]
        ],
        'validated' => [],
        'rules' => [
            'names.*.first' => 'sometimes|required'
        ],
        'expandedRules' => [
            'names.0.first' => [
                'sometimes',
                'required'
            ]
        ]
    ],
    'veaMKrzCNIa-YPVWTesmXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDot:7497',
        'data' => [
            'foo' => [
                'bar' => 'valid'
            ],
            'foo\\.bar' => 'zxc'
        ],
        'validated' => [
            'foo.bar' => 'zxc'
        ],
        'rules' => [
            'foo\\.bar' => 'required'
        ],
        'expandedRules' => [
            'foo__dot__SlcLsCtH4GqYdDmnbar' => [
                'required'
            ]
        ]
    ],
    'yjTM_Kq_xpN_zUV-fMylQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDot:7506',
        'data' => [
            'foo\\.bar' => 'valid'
        ],
        'validated' => [
            'foo.bar' => 'valid'
        ],
        'rules' => [
            'foo\\.bar' => 'required'
        ],
        'expandedRules' => [
            'foo__dot__SlcLsCtH4GqYdDmnbar' => [
                'required'
            ]
        ]
    ],
    'y-cxve4bzwIiPqN59wXSpQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDot:7510',
        'data' => [
            'foo\\.bar' => 'valid'
        ],
        'validated' => [
            'foo.bar' => 'valid'
        ],
        'rules' => [
            'foo\\.bar' => [
                'required'
            ]
        ],
        'expandedRules' => [
            'foo__dot__SlcLsCtH4GqYdDmnbar' => [
                'required'
            ]
        ]
    ],
    'rr0ZagTAglmGoCb1yLXLRA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDot:7514',
        'data' => [
            'foo\\.bar' => 'valid'
        ],
        'validated' => [
            'foo.bar' => 'valid'
        ],
        'rules' => [],
        'expandedRules' => [
            'foo__dot__SlcLsCtH4GqYdDmnbar' => [
                'required'
            ]
        ]
    ],
    'ghcpuJgx45eN0c_0o9Uo7w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDotWhenTestingExistence:7533',
        'data' => [
            'foo' => 'valid',
            'bar' => [
                'foo\\.bar' => 'valid'
            ]
        ],
        'validated' => [
            'foo' => 'valid'
        ],
        'rules' => [
            'foo' => 'required_without:bar.foo\\.bar'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without:bar.foo\\.bar'
            ]
        ]
    ],
    'fqonNUp3ONf_E_r_PqyhYg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDotWhenTestingExistence:7536',
        'data' => [
            'foo' => 'valid',
            'bar' => [
                'foo\\.bar' => 'valid'
            ]
        ],
        'validated' => [
            'foo' => 'valid'
        ],
        'rules' => [
            'foo' => 'required_without_all:bar.foo\\.bar'
        ],
        'expandedRules' => [
            'foo' => [
                'required_without_all:bar.foo\\.bar'
            ]
        ]
    ],
    'mzyhJxMWQo7yRNxr-j-1Cw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDotWhenTestingExistence:7539',
        'data' => [
            'foo' => 'valid',
            'bar' => [
                'foo\\.bar' => 'valid'
            ]
        ],
        'validated' => [
            'foo' => 'valid'
        ],
        'rules' => [
            'foo' => 'same:bar.foo\\.bar'
        ],
        'expandedRules' => [
            'foo' => [
                'same:bar.foo\\.bar'
            ]
        ]
    ],
    'EeeQ1maqam8_vjsoFrHcKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testParsingArrayKeysWithDotWhenTestingExistence:7542',
        'data' => [
            'foo' => '',
            'bar' => [
                'foo\\.bar' => 'valid'
            ]
        ],
        'validated' => [
            'foo' => ''
        ],
        'rules' => [
            'foo' => 'required_unless:bar.foo\\.bar,valid'
        ],
        'expandedRules' => [
            'foo' => [
                'required_unless:bar.foo\\.bar,valid'
            ]
        ]
    ],
    '1YVFUo4w7M9KTXfqhzx4Cw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testPassingSlashVulnerability:7561',
        'data' => [
            'matrix' => [
                '\\' => [
                    1
                ],
                '1\\' => [
                    1
                ]
            ]
        ],
        'validated' => [
            'matrix' => [
                '\\' => [
                    1
                ],
                '1\\' => [
                    1
                ]
            ]
        ],
        'rules' => [
            'matrix.*.*' => 'integer'
        ],
        'expandedRules' => [
            'matrix.\\.0' => [
                'integer'
            ],
            'matrix.1\\.0' => [
                'integer'
            ]
        ]
    ],
    '38hINZjGkN-8rhSXuRYH1w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testPlaceholdersAreReplaced:7587',
        'data' => [
            'matrix' => [
                '\\' => [
                    1
                ],
                '1\\' => [
                    1
                ]
            ]
        ],
        'validated' => [
            'matrix' => [
                '\\' => [
                    1
                ],
                '1\\' => [
                    1
                ]
            ]
        ],
        'rules' => [
            'matrix.*.*' => 'integer'
        ],
        'expandedRules' => [
            'matrix.\\.0' => [
                'integer'
            ],
            'matrix.1\\.0' => [
                'integer'
            ]
        ]
    ],
    'qOfiXU6v12dUa1GGCLF1Kg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testPlaceholdersAreReplaced:7602',
        'data' => [
            'foo\\.bar' => 'valid'
        ],
        'validated' => [
            'foo.bar' => 'valid'
        ],
        'rules' => [
            'foo\\.bar' => 'required|in:valid'
        ],
        'expandedRules' => [
            'foo__dot__SlcLsCtH4GqYdDmnbar' => [
                'required',
                'in:valid'
            ]
        ]
    ],
    'qZI93rMxbNcAVAnaxBzStA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testImplicitEachWithAsterisksWithArrayValues:7638',
        'data' => [
            'foo' => [
                'bar\\.baz' => ''
            ]
        ],
        'validated' => [
            'foo' => [
                'bar.baz' => ''
            ]
        ],
        'rules' => [
            'foo' => 'required'
        ],
        'expandedRules' => [
            'foo' => [
                'required'
            ]
        ]
    ],
    '8B8hx2VJ_MtypsfRPeVS-Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateNestedArrayWithCommonParentChildKey:7662',
        'data' => [
            'products' => [
                [
                    'price' => 2,
                    'options' => [
                        [
                            'price' => 1
                        ]
                    ]
                ],
                [
                    'price' => 2,
                    'options' => [
                        [
                            'price' => 0
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'products' => [
                [
                    'price' => 2
                ],
                [
                    'price' => 2
                ]
            ]
        ],
        'rules' => [
            'products.*.price' => 'numeric|min:1'
        ],
        'expandedRules' => [
            'products.0.price' => [
                'numeric',
                'min:1'
            ],
            'products.1.price' => [
                'numeric',
                'min:1'
            ]
        ]
    ],
    '41J6E-yS7qYUFxn1thkIXw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksConfirmed:7690',
        'data' => [
            'foo' => [
                [
                    'password' => 'foo0',
                    'password_confirmation' => 'foo0'
                ],
                [
                    'password' => 'foo1',
                    'password_confirmation' => 'foo1'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'password' => 'foo0'
                ],
                [
                    'password' => 'foo1'
                ]
            ]
        ],
        'rules' => [
            'foo.*.password' => 'confirmed'
        ],
        'expandedRules' => [
            'foo.0.password' => [
                'confirmed'
            ],
            'foo.1.password' => [
                'confirmed'
            ]
        ]
    ],
    'd27I_9kVSvHJFrts6-NMqQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksConfirmed:7709',
        'data' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'password' => 'bar0',
                            'password_confirmation' => 'bar0'
                        ],
                        [
                            'password' => 'bar1',
                            'password_confirmation' => 'bar1'
                        ]
                    ]
                ],
                [
                    'bar' => [
                        [
                            'password' => 'bar2',
                            'password_confirmation' => 'bar2'
                        ],
                        [
                            'password' => 'bar3',
                            'password_confirmation' => 'bar3'
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'password' => 'bar0'
                        ],
                        [
                            'password' => 'bar1'
                        ]
                    ]
                ],
                [
                    'bar' => [
                        [
                            'password' => 'bar2'
                        ],
                        [
                            'password' => 'bar3'
                        ]
                    ]
                ]
            ]
        ],
        'rules' => [
            'foo.*.bar.*.password' => 'confirmed'
        ],
        'expandedRules' => [
            'foo.0.bar.0.password' => [
                'confirmed'
            ],
            'foo.0.bar.1.password' => [
                'confirmed'
            ],
            'foo.1.bar.0.password' => [
                'confirmed'
            ],
            'foo.1.bar.1.password' => [
                'confirmed'
            ]
        ]
    ],
    'BHfJrhHaw78uVVq4xuQQZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksDifferent:7749',
        'data' => [
            'foo' => [
                [
                    'name' => 'foo',
                    'last' => 'bar'
                ],
                [
                    'name' => 'bar',
                    'last' => 'foo'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'foo'
                ],
                [
                    'name' => 'bar'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'different:foo.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'different:foo.*.last'
            ],
            'foo.1.name' => [
                'different:foo.*.last'
            ]
        ]
    ],
    'ALVqEAxKpn0aKfU_jh2JhA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksDifferent:7762',
        'data' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'name' => 'foo',
                            'last' => 'bar'
                        ],
                        [
                            'name' => 'bar',
                            'last' => 'foo'
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'name' => 'foo'
                        ],
                        [
                            'name' => 'bar'
                        ]
                    ]
                ]
            ]
        ],
        'rules' => [
            'foo.*.bar.*.name' => [
                'different:foo.*.bar.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.bar.0.name' => [
                'different:foo.*.bar.*.last'
            ],
            'foo.0.bar.1.name' => [
                'different:foo.*.bar.*.last'
            ]
        ]
    ],
    'eZ3jD0CCU6hq_837e9708A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksSame:7802',
        'data' => [
            'foo' => [
                [
                    'name' => 'foo',
                    'last' => 'foo'
                ],
                [
                    'name' => 'bar',
                    'last' => 'bar'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'foo'
                ],
                [
                    'name' => 'bar'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'same:foo.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'same:foo.*.last'
            ],
            'foo.1.name' => [
                'same:foo.*.last'
            ]
        ]
    ],
    'FkvVP1LSqanzLCwaXDeyxQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksSame:7815',
        'data' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'name' => 'foo',
                            'last' => 'foo'
                        ],
                        [
                            'name' => 'bar',
                            'last' => 'bar'
                        ]
                    ]
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'bar' => [
                        [
                            'name' => 'foo'
                        ],
                        [
                            'name' => 'bar'
                        ]
                    ]
                ]
            ]
        ],
        'rules' => [
            'foo.*.bar.*.name' => [
                'same:foo.*.bar.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.bar.0.name' => [
                'same:foo.*.bar.*.last'
            ],
            'foo.0.bar.1.name' => [
                'same:foo.*.bar.*.last'
            ]
        ]
    ],
    'Gwqybn8GNtgl-S4mBvqCOw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequired:7855',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required'
            ],
            'foo.1.name' => [
                'Required'
            ]
        ]
    ],
    '9uywnpvQ0Oeobx2cy-r5gQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequired:7864',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required'
            ],
            'foo.1.name' => [
                'Required'
            ]
        ]
    ],
    '5eOS0Ot1GRB7m9piStzgvQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredIf:7904',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'foo'
                ],
                [
                    'last' => 'bar'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_if:foo.*.last,foo'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_if:foo.*.last,foo'
            ],
            'foo.1.name' => [
                'Required_if:foo.*.last,foo'
            ]
        ]
    ],
    'f3hPQyHCZdYFc7QlVr-YZg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredIf:7913',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'foo'
                ],
                [
                    'last' => 'bar'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_if:foo.*.last,foo'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_if:foo.*.last,foo'
            ],
            'foo.1.name' => [
                'Required_if:foo.*.last,foo'
            ]
        ]
    ],
    's3PjTYrhGblfhauBdFMsEg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredUnless:7953',
        'data' => [
            'foo' => [
                [
                    'name' => null,
                    'last' => 'foo'
                ],
                [
                    'name' => 'second',
                    'last' => 'bar'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => null
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_unless:foo.*.last,foo'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_unless:foo.*.last,foo'
            ],
            'foo.1.name' => [
                'Required_unless:foo.*.last,foo'
            ]
        ]
    ],
    'pMDX63JrnftzgkjTEplrKw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredUnless:7962',
        'data' => [
            'foo' => [
                [
                    'name' => null,
                    'last' => 'foo'
                ],
                [
                    'name' => 'second',
                    'last' => 'foo'
                ]
            ]
        ],
        'validated' => [],
        'rules' => [
            'foo.*.bar.*.name' => [
                'Required_unless:foo.*.bar.*.last,foo'
            ]
        ],
        'expandedRules' => []
    ],
    'aOuQuekv--bAV8h_ep9kRA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWith:8002',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'last'
                ],
                [
                    'name' => 'second',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_with:foo.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_with:foo.*.last'
            ],
            'foo.1.name' => [
                'Required_with:foo.*.last'
            ]
        ]
    ],
    'C-Yc1XnQpPqrFEoM_GKEPA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWith:8011',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'last'
                ],
                [
                    'name' => 'second',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_with:foo.*.last'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_with:foo.*.last'
            ],
            'foo.1.name' => [
                'Required_with:foo.*.last'
            ]
        ]
    ],
    'Qp9upFNb0xkriqOEwM0N1Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithAll:8059',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'last',
                    'middle' => 'middle'
                ],
                [
                    'name' => 'second',
                    'last' => 'last',
                    'middle' => 'middle'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    'N31RURypH0SgyI4EOMaGxA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithAll:8068',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'last' => 'last',
                    'middle' => 'middle'
                ],
                [
                    'name' => 'second',
                    'last' => 'last',
                    'middle' => 'middle'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_with_all:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    'MVHLVnVhwlZ0be-I-fjwXg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithout:8108',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'middle' => 'middle'
                ],
                [
                    'name' => 'second',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    '9hsEZwLU_KQJPXe-0BPpmg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithout:8117',
        'data' => [
            'foo' => [
                [
                    'name' => 'first',
                    'middle' => 'middle'
                ],
                [
                    'name' => 'second',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => 'second'
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_without:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    'TuAZrUg3pGp_xaIxHZji1A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithoutAll:8158',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => null,
                    'middle' => 'middle'
                ],
                [
                    'name' => null,
                    'middle' => 'middle',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => null
                ],
                [
                    'name' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ],
            'foo.2.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    'A8Srolxu8IllAzcXAdZbFg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksRequiredWithoutAll:8169',
        'data' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => null,
                    'middle' => 'middle'
                ],
                [
                    'name' => null,
                    'middle' => 'middle',
                    'last' => 'last'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'name' => 'first'
                ],
                [
                    'name' => null
                ],
                [
                    'name' => null
                ]
            ]
        ],
        'rules' => [
            'foo.*.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ]
        ],
        'expandedRules' => [
            'foo.0.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ],
            'foo.1.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ],
            'foo.2.name' => [
                'Required_without_all:foo.*.last,foo.*.middle'
            ]
        ]
    ],
    'IEes44kbg_hsovVQn2zBDA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksBeforeAndAfter:8206',
        'data' => [
            'foo' => [
                [
                    'start' => '2016-04-19',
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'start' => '2016-04-19'
                ]
            ]
        ],
        'rules' => [
            'foo.*.start' => [
                'before:foo.*.end'
            ]
        ],
        'expandedRules' => [
            'foo.0.start' => [
                'before:foo.*.end'
            ]
        ]
    ],
    'mxl-ZrJ-cLxbO24MnfZRCg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateImplicitEachWithAsterisksBeforeAndAfter:8220',
        'data' => [
            'foo' => [
                [
                    'start' => '2016-04-19',
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'validated' => [
            'foo' => [
                [
                    'end' => '2017-04-19'
                ]
            ]
        ],
        'rules' => [
            'foo.*.end' => [
                'after:foo.*.start'
            ]
        ],
        'expandedRules' => [
            'foo.0.end' => [
                'after:foo.*.start'
            ]
        ]
    ],
    'mR3KE0me9BY6ruQ6Lq-afQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateReturnsValidatedData:8873',
        'data' => [
            'first' => 'john',
            'preferred' => 'john',
            'last' => 'doe',
            'type' => 'admin'
        ],
        'validated' => [
            'first' => 'john',
            'preferred' => 'john'
        ],
        'rules' => [
            'first' => 'required',
            'preferred' => 'required'
        ],
        'expandedRules' => [
            'first' => [
                'required'
            ],
            'preferred' => [
                'required'
            ]
        ]
    ],
    'Twaf0peWEXRgNPeoDuLodA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateReturnsValidatedDataNestedRules:8888',
        'data' => [
            'nested' => [
                'foo' => 'bar',
                'baz' => ''
            ],
            'array' => [
                1,
                2
            ]
        ],
        'validated' => [
            'nested' => [
                'foo' => 'bar'
            ],
            'array' => [
                1,
                2
            ]
        ],
        'rules' => [
            'nested.foo' => 'required',
            'array.*' => 'integer'
        ],
        'expandedRules' => [
            'nested.foo' => [
                'required'
            ],
            'array.0' => [
                'integer'
            ],
            'array.1' => [
                'integer'
            ]
        ]
    ],
    'dHEwroSSQr2-AOPklX9RDQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateReturnsValidatedDataNestedChildRules:8901',
        'data' => [
            'nested' => [
                'foo' => 'bar',
                'with' => 'extras',
                'type' => 'admin'
            ]
        ],
        'validated' => [
            'nested' => [
                'foo' => 'bar'
            ]
        ],
        'rules' => [
            'nested.foo' => 'required'
        ],
        'expandedRules' => [
            'nested.foo' => [
                'required'
            ]
        ]
    ],
    '-MmiQCJlygN0IbPzWFXQlg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateReturnsValidatedDataNestedArrayRules:8914',
        'data' => [
            'nested' => [
                [
                    'bar' => 'baz',
                    'with' => 'extras',
                    'type' => 'admin'
                ],
                [
                    'bar' => 'baz2',
                    'with' => 'extras',
                    'type' => 'admin'
                ]
            ]
        ],
        'validated' => [
            'nested' => [
                [
                    'bar' => 'baz'
                ],
                [
                    'bar' => 'baz2'
                ]
            ]
        ],
        'rules' => [
            'nested.*.bar' => 'required'
        ],
        'expandedRules' => [
            'nested.0.bar' => [
                'required'
            ],
            'nested.1.bar' => [
                'required'
            ]
        ]
    ],
    'b-Z7Gsm0ZtokOrozKBKm5w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateAndValidatedData:8927',
        'data' => [
            'first' => 'john',
            'preferred' => 'john',
            'last' => 'doe',
            'type' => 'admin'
        ],
        'validated' => [
            'first' => 'john',
            'preferred' => 'john'
        ],
        'rules' => [
            'first' => 'required',
            'preferred' => 'required'
        ],
        'expandedRules' => [
            'first' => [
                'required'
            ],
            'preferred' => [
                'required'
            ]
        ]
    ],
    'Q2q6lHcoA9hDw-m6zahGLA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'validated' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'rczCIVyJ74tzpyRAv4UBAw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'validated' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '-Yz8C_PJoYWfB51hOONOGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'validated' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '_rVsI6R0N5F0nB77Gn59xg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'e60d3f48-95d7-4d8d-aad0-856f29a27da2'
        ],
        'validated' => [
            'foo' => 'e60d3f48-95d7-4d8d-aad0-856f29a27da2'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'TIEWs5mxxk8TQ77nW1Fy3w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-11e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-11e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'uos1nDOuDMNDBvW0FwjWQg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'CMG0gshl-qtJv7UjAbhgyg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-31e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-31e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'LYA8RiSWhQA7NKJ3xKvaNw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-41e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-41e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'Uru3dCLDn_0k5zw24P-4Nw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-51e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-51e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '29Fie1tPZg9h73hW5TSpUw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUuid:8963',
        'data' => [
            'foo' => 'FF6F8CB0-C57D-11E1-9B21-0800200C9A66'
        ],
        'validated' => [
            'foo' => 'FF6F8CB0-C57D-11E1-9B21-0800200C9A66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'FJnYq6NPvrOTZinP1evR2g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'validated' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '1lUxPx6bB3JHeNfYt4AmKQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'validated' => [
            'foo' => '00000000-0000-0000-0000-000000000000'
        ],
        'rules' => [
            'foo' => 'uuid:0'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:0'
            ]
        ]
    ],
    'S094tMWE0h4QILf4EVPvkg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'validated' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'A87eAaGonaWJByF9t8rRDw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'validated' => [
            'foo' => '145a1e72-d11d-11e8-a8d5-f2801f1b9fd1'
        ],
        'rules' => [
            'foo' => 'uuid:1'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:1'
            ]
        ]
    ],
    'OYnHyQpEE95s-xX7UwBtYA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'sjh8Ynmst3bIt3IMB-J0WA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'validated' => [
            'foo' => 'ff6f8cb0-c57d-21e1-9b21-0800200c9a66'
        ],
        'rules' => [
            'foo' => 'uuid:2'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:2'
            ]
        ]
    ],
    'VnxIs-eHj7GjIGSowTaCSw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '76a4ba72-cc4e-3e1d-b52d-856382f408c3'
        ],
        'validated' => [
            'foo' => '76a4ba72-cc4e-3e1d-b52d-856382f408c3'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'Yx6kIUfMyH2akxoWLsLjNg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '76a4ba72-cc4e-3e1d-b52d-856382f408c3'
        ],
        'validated' => [
            'foo' => '76a4ba72-cc4e-3e1d-b52d-856382f408c3'
        ],
        'rules' => [
            'foo' => 'uuid:3'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:3'
            ]
        ]
    ],
    'NFedWuwFIq2v-h1CNfpZUQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'validated' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'MaeWF55WRwaoILcdLXWf6Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'validated' => [
            'foo' => 'a0a2a2d2-0b87-4a18-83f2-2529882be2de'
        ],
        'rules' => [
            'foo' => 'uuid:4'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:4'
            ]
        ]
    ],
    'PCyYQc-ZWm1uOD0CmRueZQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'd3b2b5a9-d433-5c58-b038-4fa13696e357'
        ],
        'validated' => [
            'foo' => 'd3b2b5a9-d433-5c58-b038-4fa13696e357'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'hDWXOm9-YBSB3kjvd_F8LQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'd3b2b5a9-d433-5c58-b038-4fa13696e357'
        ],
        'validated' => [
            'foo' => 'd3b2b5a9-d433-5c58-b038-4fa13696e357'
        ],
        'rules' => [
            'foo' => 'uuid:5'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:5'
            ]
        ]
    ],
    'ZNie7h2DKexl-VnLSsWh9w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '1ef97d97-b5ab-67d8-9f12-5600051f1387'
        ],
        'validated' => [
            'foo' => '1ef97d97-b5ab-67d8-9f12-5600051f1387'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '_beW0hQRmuNV-tCd3fXm9g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '1ef97d97-b5ab-67d8-9f12-5600051f1387'
        ],
        'validated' => [
            'foo' => '1ef97d97-b5ab-67d8-9f12-5600051f1387'
        ],
        'rules' => [
            'foo' => 'uuid:6'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:6'
            ]
        ]
    ],
    '9MAUP0VjNDQbf-hFk2FVdA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '0192e4b9-92eb-7aec-8707-1becfb1e3eb7'
        ],
        'validated' => [
            'foo' => '0192e4b9-92eb-7aec-8707-1becfb1e3eb7'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'pybhIzDahEudwWGr3p5sJg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '0192e4b9-92eb-7aec-8707-1becfb1e3eb7'
        ],
        'validated' => [
            'foo' => '0192e4b9-92eb-7aec-8707-1becfb1e3eb7'
        ],
        'rules' => [
            'foo' => 'uuid:7'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:7'
            ]
        ]
    ],
    '_nWn7bIlsp8PDDDwqR7wgg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '07e80a1f-1629-831f-811f-c595103c91b5'
        ],
        'validated' => [
            'foo' => '07e80a1f-1629-831f-811f-c595103c91b5'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    'y6myVynuVOD1xWG2zCYtvw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => '07e80a1f-1629-831f-811f-c595103c91b5'
        ],
        'validated' => [
            'foo' => '07e80a1f-1629-831f-811f-c595103c91b5'
        ],
        'rules' => [
            'foo' => 'uuid:8'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:8'
            ]
        ]
    ],
    'G48qfrI7GmmzuIF5agElGA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'FFFFFFFF-FFFF-FFFF-FFFF-FFFFFFFFFFFF'
        ],
        'validated' => [
            'foo' => 'FFFFFFFF-FFFF-FFFF-FFFF-FFFFFFFFFFFF'
        ],
        'rules' => [
            'foo' => 'uuid'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid'
            ]
        ]
    ],
    '2W0sqRd5K6mgRCFDXMjnjg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithUuidWithVersionConstraint:8979',
        'data' => [
            'foo' => 'FFFFFFFF-FFFF-FFFF-FFFF-FFFFFFFFFFFF'
        ],
        'validated' => [
            'foo' => 'FFFFFFFF-FFFF-FFFF-FFFF-FFFFFFFFFFFF'
        ],
        'rules' => [
            'foo' => 'uuid:max'
        ],
        'expandedRules' => [
            'foo' => [
                'uuid:max'
            ]
        ]
    ],
    '0exAhQmorPqjfshyvlL84w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidAscii:9068',
        'data' => [
            'foo' => 'Dusseldorf'
        ],
        'validated' => [
            'foo' => 'Dusseldorf'
        ],
        'rules' => [
            'foo' => 'ascii'
        ],
        'expandedRules' => [
            'foo' => [
                'ascii'
            ]
        ]
    ],
    'm6CWmFFtjkPsZRyvC_ltaQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testValidateWithValidUlid:9082',
        'data' => [
            'foo' => '01gd6r360bp37zj17nxb55yv40'
        ],
        'validated' => [
            'foo' => '01gd6r360bp37zj17nxb55yv40'
        ],
        'rules' => [
            'foo' => 'ulid'
        ],
        'expandedRules' => [
            'foo' => [
                'ulid'
            ]
        ]
    ],
    'K6bFGuth77vXBMRPUqo5Hg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointment' => false
        ],
        'validated' => [
            'has_appointment' => false
        ],
        'rules' => [
            'has_appointment' => [
                'required',
                'bool'
            ],
            'appointment_date' => [
                'exclude_if:has_appointment,false',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_appointment' => [
                'required',
                'bool'
            ]
        ]
    ],
    'f1jUmBeZW68VnmjryLQmsQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'cat' => 'Tom'
        ],
        'validated' => [
            'cat' => 'Tom'
        ],
        'rules' => [
            'cat' => [
                'required',
                'string'
            ],
            'mouse' => [
                'exclude_if:cat,Tom',
                'required',
                'file'
            ]
        ],
        'expandedRules' => [
            'cat' => [
                'required',
                'string'
            ]
        ]
    ],
    'rHnzAIA4TKq-2Tmpc59vrQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointment' => true,
            'appointment_date' => '2021-03-08'
        ],
        'validated' => [
            'has_appointment' => true,
            'appointment_date' => '2021-03-08'
        ],
        'rules' => [
            'has_appointment' => [
                'nullable',
                'bool'
            ],
            'appointment_date' => [
                'exclude_if:has_appointment,null',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_appointment' => [
                'nullable',
                'bool'
            ],
            'appointment_date' => [
                'exclude_if:has_appointment,null',
                'required',
                'date'
            ]
        ]
    ],
    'zS8Gwe8ziQ4ii3sPH84I0Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointment' => true,
            'appointment_date' => '2019-12-13'
        ],
        'validated' => [
            'has_appointment' => true,
            'appointment_date' => '2019-12-13'
        ],
        'rules' => [
            'has_appointment' => [
                'required',
                'bool'
            ],
            'appointment_date' => [
                'exclude_if:has_appointment,false',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_appointment' => [
                'required',
                'bool'
            ],
            'appointment_date' => [
                'exclude_if:has_appointment,false',
                'required',
                'date'
            ]
        ]
    ],
    'E3twxYlAVnJpIMTGvYpQYA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_no_appointments' => true
        ],
        'validated' => [
            'has_no_appointments' => true
        ],
        'rules' => [
            'has_no_appointments' => [
                'required',
                'bool'
            ],
            'has_doctor_appointment' => [
                'exclude_if:has_no_appointments,true',
                'required',
                'bool'
            ],
            'doctor_appointment_date' => [
                'exclude_if:has_no_appointments,true',
                'exclude_if:has_doctor_appointment,false',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_no_appointments' => [
                'required',
                'bool'
            ]
        ]
    ],
    'OHd-P44xV6d2l8_C_BJg0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_no_appointments' => false,
            'has_doctor_appointment' => false
        ],
        'validated' => [
            'has_no_appointments' => false,
            'has_doctor_appointment' => false
        ],
        'rules' => [
            'has_no_appointments' => [
                'required',
                'bool'
            ],
            'has_doctor_appointment' => [
                'exclude_if:has_no_appointments,true',
                'required',
                'bool'
            ],
            'doctor_appointment_date' => [
                'exclude_if:has_no_appointments,true',
                'exclude_if:has_doctor_appointment,false',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_no_appointments' => [
                'required',
                'bool'
            ],
            'has_doctor_appointment' => [
                'exclude_if:has_no_appointments,true',
                'required',
                'bool'
            ]
        ]
    ],
    'l0JY4r8Fvt2d4k3z-ADcnA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointments' => false,
            'appointments' => []
        ],
        'validated' => [
            'has_appointments' => false
        ],
        'rules' => [
            'has_appointments' => [
                'required',
                'bool'
            ],
            'appointments.*' => [
                'exclude_if:has_appointments,false',
                'required',
                'date'
            ]
        ],
        'expandedRules' => [
            'has_appointments' => [
                'required',
                'bool'
            ]
        ]
    ],
    'P3S5_-C42cEccnqnpRzC9g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointments' => false,
            'appointments' => [
                []
            ]
        ],
        'validated' => [
            'has_appointments' => false
        ],
        'rules' => [
            'has_appointments' => [
                'required',
                'bool'
            ],
            'appointments.*.date' => [
                'exclude_if:has_appointments,false',
                'required',
                'date'
            ],
            'appointments.*.name' => [
                'exclude_if:has_appointments,false',
                'required',
                'string'
            ]
        ],
        'expandedRules' => [
            'has_appointments' => [
                'required',
                'bool'
            ]
        ]
    ],
    'wLUtiATxS9yJYY5ZU956Tw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointments' => false
        ],
        'validated' => [
            'has_appointments' => false
        ],
        'rules' => [
            'has_appointments' => [
                'required',
                'bool'
            ],
            'appointments' => [
                'exclude_if:has_appointments,false',
                'required',
                'array'
            ],
            'appointments.*.date' => [
                'required',
                'date'
            ],
            'appointments.*.name' => [
                'required',
                'string'
            ]
        ],
        'expandedRules' => [
            'has_appointments' => [
                'required',
                'bool'
            ]
        ]
    ],
    'v1SFfLeo61ebKm4sxE6g8Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'has_appointments' => false
        ],
        'validated' => [
            'has_appointments' => false
        ],
        'rules' => [
            'has_appointments' => [
                'required',
                'bool'
            ],
            'appointments.*.date' => [
                'required',
                'date'
            ],
            'appointments' => [
                'exclude_if:has_appointments,false',
                'required',
                'array'
            ]
        ],
        'expandedRules' => [
            'has_appointments' => [
                'required',
                'bool'
            ]
        ]
    ],
    'Ygm1tMq9uObrsEEhGVSRFw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'vehicles' => [
                [
                    'type' => 'car',
                    'wheels' => 4
                ],
                [
                    'type' => 'boat'
                ]
            ]
        ],
        'validated' => [
            'vehicles' => [
                [
                    'type' => 'car',
                    'wheels' => 4
                ],
                [
                    'type' => 'boat'
                ]
            ]
        ],
        'rules' => [
            'vehicles.*.type' => 'required|in:car,boat',
            'vehicles.*.wheels' => 'exclude_if:vehicles.*.type,boat|required|numeric'
        ],
        'expandedRules' => [
            'vehicles.0.type' => [
                'required',
                'in:car,boat'
            ],
            'vehicles.1.type' => [
                'required',
                'in:car,boat'
            ],
            'vehicles.0.wheels' => [
                'exclude_if:vehicles.*.type,boat',
                'required',
                'numeric'
            ]
        ]
    ],
    'pRI2RP1y72o1OzjCfmypig' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeIf:9311',
        'data' => [
            'vehicles' => [
                [
                    'type' => 'car',
                    'wheels' => [
                        [
                            'color' => 'red',
                            'shape' => 'square'
                        ],
                        [
                            'color' => 'blue'
                        ],
                        [
                            'color' => 'red',
                            'shape' => 'round',
                            'junk' => 'no rule, still present'
                        ],
                        [
                            'color' => 'blue'
                        ]
                    ]
                ],
                [
                    'type' => 'boat'
                ]
            ]
        ],
        'validated' => [
            'vehicles' => [
                [
                    'type' => 'car',
                    'wheels' => [
                        [
                            'color' => 'red',
                            'shape' => 'square'
                        ],
                        [
                            'color' => 'blue'
                        ],
                        [
                            'color' => 'red',
                            'shape' => 'round',
                            'junk' => 'no rule, still present'
                        ],
                        [
                            'color' => 'blue'
                        ]
                    ]
                ],
                [
                    'type' => 'boat'
                ]
            ]
        ],
        'rules' => [
            'vehicles.*.type' => 'required|in:car,boat',
            'vehicles.*.wheels' => 'exclude_if:vehicles.*.type,boat|required|array',
            'vehicles.*.wheels.*.color' => 'required|in:red,blue',
            'vehicles.*.wheels.*.shape' => 'exclude_unless:vehicles.*.wheels.*.color,red|required|in:square,round'
        ],
        'expandedRules' => [
            'vehicles.0.type' => [
                'required',
                'in:car,boat'
            ],
            'vehicles.1.type' => [
                'required',
                'in:car,boat'
            ],
            'vehicles.0.wheels' => [
                'exclude_if:vehicles.*.type,boat',
                'required',
                'array'
            ],
            'vehicles.0.wheels.0.color' => [
                'required',
                'in:red,blue'
            ],
            'vehicles.0.wheels.1.color' => [
                'required',
                'in:red,blue'
            ],
            'vehicles.0.wheels.2.color' => [
                'required',
                'in:red,blue'
            ],
            'vehicles.0.wheels.3.color' => [
                'required',
                'in:red,blue'
            ],
            'vehicles.0.wheels.0.shape' => [
                'exclude_unless:vehicles.*.wheels.*.color,red',
                'required',
                'in:square,round'
            ],
            'vehicles.0.wheels.2.shape' => [
                'exclude_unless:vehicles.*.wheels.*.color,red',
                'required',
                'in:square,round'
            ]
        ]
    ],
    '9wc2ZRp4qRE59XpuAHsi6w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExclude:9464',
        'data' => [
            'has_appointment' => false
        ],
        'validated' => [
            'has_appointment' => false
        ],
        'rules' => [
            'has_appointment' => [
                'required',
                'bool'
            ],
            'appointment_date' => [
                'exclude'
            ]
        ],
        'expandedRules' => [
            'has_appointment' => [
                'required',
                'bool'
            ]
        ]
    ],
    'pFtVG-V2Msk4GheVdWfV3Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeBeforeADependentRule:9493',
        'data' => [
            'profile_id' => null
        ],
        'validated' => [
            'profile_id' => null
        ],
        'rules' => [
            'type' => [
                'required',
                'string',
                'exclude'
            ],
            'profile_id' => [
                'nullable',
                'required_if:type,profile',
                'integer'
            ]
        ],
        'expandedRules' => [
            'profile_id' => [
                'nullable',
                'required_if:type,profile',
                'integer'
            ]
        ]
    ],
    'AYzgTnC1voMh4tb79wVWZQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9520',
        'data' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'validated' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'rules' => [
            'users' => 'array',
            'users.*.name' => 'string'
        ],
        'expandedRules' => [
            'users' => [
                'array'
            ],
            'users.0.name' => [
                'string'
            ]
        ]
    ],
    '90gi2lcMfMsQNX_xuL-a-Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9529',
        'data' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'validated' => [
            'users' => [
                [
                    'name' => 'Mohamed'
                ]
            ]
        ],
        'rules' => [
            'users' => 'array',
            'users.*.name' => 'string'
        ],
        'expandedRules' => [
            'users' => [
                'array'
            ],
            'users.0.name' => [
                'string'
            ]
        ]
    ],
    '0L20mZJLqYuoZ6E3WWok_Q' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9538',
        'data' => [
            'admin' => [
                'name' => 'Mohamed',
                'location' => 'cairo'
            ],
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'validated' => [
            'admin' => [
                'name' => 'Mohamed'
            ],
            'users' => [
                [
                    'name' => 'Mohamed'
                ]
            ]
        ],
        'rules' => [
            'admin' => 'array',
            'admin.name' => 'string',
            'users' => 'array',
            'users.*.name' => 'string'
        ],
        'expandedRules' => [
            'admin' => [
                'array'
            ],
            'admin.name' => [
                'string'
            ],
            'users' => [
                'array'
            ],
            'users.0.name' => [
                'string'
            ]
        ]
    ],
    'uEh7AZuTyD5OMkB9O9OHMA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9547',
        'data' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'validated' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'rules' => [
            'users' => 'array'
        ],
        'expandedRules' => [
            'users' => [
                'array'
            ]
        ]
    ],
    'Ltr_ui2UyJIeOBKfBxiAIQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9556',
        'data' => [
            'users' => [
                'mohamed',
                'zain'
            ]
        ],
        'validated' => [
            'users' => [
                'mohamed',
                'zain'
            ]
        ],
        'rules' => [
            'users' => 'array',
            'users.*' => 'string'
        ],
        'expandedRules' => [
            'users' => [
                'array'
            ],
            'users.0' => [
                'string'
            ],
            'users.1' => [
                'string'
            ]
        ]
    ],
    'mBESazFrDBE0yeDTDsvv-w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9565',
        'data' => [
            'users' => [
                'admins' => [
                    [
                        'name' => 'mohamed',
                        'job' => 'dev'
                    ]
                ],
                'unvalidated' => 'foobar'
            ]
        ],
        'validated' => [
            'users' => [
                'admins' => [
                    [
                        'name' => 'mohamed'
                    ]
                ]
            ]
        ],
        'rules' => [
            'users' => 'array',
            'users.admins' => 'array',
            'users.admins.*.name' => 'string'
        ],
        'expandedRules' => [
            'users' => [
                'array'
            ],
            'users.admins' => [
                'array'
            ],
            'users.admins.0.name' => [
                'string'
            ]
        ]
    ],
    'wexU2seJ4uMvll8KlCNR0A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9574',
        'data' => [
            'users' => [
                1,
                2,
                3
            ]
        ],
        'validated' => [
            'users' => [
                1,
                2,
                3
            ]
        ],
        'rules' => [
            'users' => 'array|max:10'
        ],
        'expandedRules' => [
            'users' => [
                'array',
                'max:10'
            ]
        ]
    ],
    'dkyVUaxTlqPQZtgHacBZSg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludingArrays:9583',
        'data' => [
            'users' => [
                [
                    'name' => 'Mohamed',
                    'location' => 'cairo'
                ]
            ]
        ],
        'validated' => [
            'users' => [
                [
                    'name' => 'Mohamed'
                ]
            ]
        ],
        'rules' => [
            'users' => 'list',
            'users.*.name' => 'string'
        ],
        'expandedRules' => [
            'users' => [
                'list'
            ],
            'users.0.name' => [
                'string'
            ]
        ]
    ],
    'Tojtaw8U1Ae1-bQ-OC11vg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9594',
        'data' => [
            'cat' => 'Felix'
        ],
        'validated' => [
            'cat' => 'Felix'
        ],
        'rules' => [
            'cat' => 'required|string',
            'mouse' => 'exclude_unless:cat,Tom|required|string'
        ],
        'expandedRules' => [
            'cat' => [
                'required',
                'string'
            ]
        ]
    ],
    'pW0gFwbD-owe3flEnPBaMA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9602',
        'data' => [
            'cat' => 'Felix'
        ],
        'validated' => [
            'cat' => 'Felix'
        ],
        'rules' => [
            'cat' => 'required|string',
            'mouse' => 'exclude_unless:cat,Tom|required|string'
        ],
        'expandedRules' => [
            'cat' => [
                'required',
                'string'
            ]
        ]
    ],
    'lALkpW9eWGYA__X2_NR3MQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9610',
        'data' => [
            'cat' => 'Tom',
            'mouse' => 'Jerry'
        ],
        'validated' => [
            'cat' => 'Tom',
            'mouse' => 'Jerry'
        ],
        'rules' => [
            'cat' => 'required|string',
            'mouse' => 'exclude_unless:cat,Tom|required|string'
        ],
        'expandedRules' => [
            'cat' => [
                'required',
                'string'
            ],
            'mouse' => [
                'exclude_unless:cat,Tom',
                'required',
                'string'
            ]
        ]
    ],
    '94qS85NWQuxEXcj1hSkHMQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9626',
        'data' => [
            'foo' => true
        ],
        'validated' => [
            'foo' => true
        ],
        'rules' => [
            'foo' => 'nullable',
            'bar' => 'exclude_unless:foo,null'
        ],
        'expandedRules' => [
            'foo' => [
                'nullable'
            ]
        ]
    ],
    'F2F4v3rklrMfosqT9BS8Yw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9631',
        'data' => [],
        'validated' => [],
        'rules' => [
            'bar' => 'exclude_unless:foo,true'
        ],
        'expandedRules' => []
    ],
    '-UpCsRXGRjXQoEDwJDmNcA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeUnless:9636',
        'data' => [
            'bar' => 'Hello'
        ],
        'validated' => [
            'bar' => 'Hello'
        ],
        'rules' => [
            'bar' => 'exclude_unless:foo,null'
        ],
        'expandedRules' => [
            'bar' => [
                'exclude_unless:foo,null'
            ]
        ]
    ],
    'fCANzrqygJH7AbGYcYprZA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeValuesAreReallyRemoved:9662',
        'data' => [
            'cat' => 'Tom'
        ],
        'validated' => [
            'cat' => 'Tom'
        ],
        'rules' => [
            'cat' => 'required|string',
            'mouse' => 'exclude_if:cat,Tom|required|string'
        ],
        'expandedRules' => [
            'cat' => [
                'required',
                'string'
            ]
        ]
    ],
    'D6bj4U523DspaNkyz2NoXQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testExcludeWithValuesAreReallyRemoved:9691',
        'data' => [
            'cat' => 'Tom'
        ],
        'validated' => [
            'cat' => 'Tom'
        ],
        'rules' => [
            'cat' => 'string',
            'mouse' => 'string|exclude_with:cat'
        ],
        'expandedRules' => [
            'cat' => [
                'string'
            ]
        ]
    ],
    'OiURJwFmsN6iNylslcpmaA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testArrayKeysValidationPassedWhenHasKeys:9765',
        'data' => [
            'baz' => [
                'foo' => 'bar',
                'fee' => 'faa',
                'laa' => 'lee'
            ]
        ],
        'validated' => [
            'baz' => [
                'foo' => 'bar',
                'fee' => 'faa',
                'laa' => 'lee'
            ]
        ],
        'rules' => [
            'baz' => [
                'array',
                'required_array_keys:foo,fee,laa'
            ]
        ],
        'expandedRules' => [
            'baz' => [
                'array',
                'required_array_keys:foo,fee,laa'
            ]
        ]
    ],
    '6ipTs3bWfem3c60e-qXfUg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testArrayKeysValidationPassedWithPartialMatch:9788',
        'data' => [
            'baz' => [
                'foo' => 'bar',
                'fee' => 'faa',
                'laa' => 'lee'
            ]
        ],
        'validated' => [
            'baz' => [
                'foo' => 'bar',
                'fee' => 'faa',
                'laa' => 'lee'
            ]
        ],
        'rules' => [
            'baz' => [
                'array',
                'required_array_keys:foo,fee'
            ]
        ],
        'expandedRules' => [
            'baz' => [
                'array',
                'required_array_keys:foo,fee'
            ]
        ]
    ],
    'f7RDInUAwGap5IuPBY7JzA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItTrimsSpaceFromParameters:9960',
        'data' => [
            'min' => ' 20 ',
            'min_str' => ' abc ',
            'multiple_of' => ' 0.5 ',
            'between' => '
 5 
',
            'between_str' => ' abc ',
            'gt' => '	5 ',
            'gt_field' => '	5 ',
            'gt_str' => ' abc ',
            'lt' => '	5 ',
            'lt_field' => '	5 ',
            'lt_str' => ' abc ',
            'gte' => '	5 ',
            'gte_field' => '	5 ',
            'gte_str' => ' abc ',
            'lte' => '	5 ',
            'lte_field' => '	5 ',
            'lte_str' => ' abc ',
            'max' => ' 20 ',
            'max_str' => ' abc ',
            'size' => ' 20 ',
            'size_str' => ' abc ',
            'foo' => '4',
            ' foo' => ' 5',
            ' foo ' => ' 6 ',
            'foo_str' => 'abcd',
            ' foo_str' => ' abcd',
            ' foo_str ' => ' abcd '
        ],
        'validated' => [
            'min' => ' 20 ',
            'min_str' => ' abc ',
            'multiple_of' => ' 0.5 ',
            'between' => '
 5 
',
            'between_str' => ' abc ',
            'gt' => '	5 ',
            'gt_field' => '	5 ',
            'gt_str' => ' abc ',
            'lt' => '	5 ',
            'lt_field' => '	5 ',
            'lt_str' => ' abc ',
            'gte' => '	5 ',
            'gte_field' => '	5 ',
            'gte_str' => ' abc ',
            'lte' => '	5 ',
            'lte_field' => '	5 ',
            'lte_str' => ' abc ',
            'max' => ' 20 ',
            'max_str' => ' abc ',
            'size' => ' 20 ',
            'size_str' => ' abc '
        ],
        'rules' => [
            'min' => 'numeric|min: 20',
            'min_str' => 'min: 5',
            'multiple_of' => 'multiple_of:0.25 ',
            'between' => 'numeric|between:	 4, 6
',
            'between_str' => 'between:	 5, 6
',
            'gt' => 'numeric|gt: 4',
            'gt_field' => 'numeric|gt:foo',
            'gt_str' => 'gt:foo_str',
            'lt' => 'numeric|lt: 6',
            'lt_field' => 'numeric|lt: foo ',
            'lt_str' => 'lt: foo_str ',
            'gte' => 'numeric|gte: 5',
            'gte_field' => 'numeric|gte: foo',
            'gte_str' => 'gte: foo_str',
            'lte' => 'numeric|lte: 5',
            'lte_field' => 'numeric|lte: foo',
            'lte_str' => 'lte: foo_str',
            'max' => 'numeric|max: 20',
            'max_str' => 'max: 5',
            'size' => 'numeric|size: 20',
            'size_str' => 'size: 5'
        ],
        'expandedRules' => [
            'min' => [
                'numeric',
                'min: 20'
            ],
            'min_str' => [
                'min: 5'
            ],
            'multiple_of' => [
                'multiple_of:0.25 '
            ],
            'between' => [
                'numeric',
                'between:	 4, 6
'
            ],
            'between_str' => [
                'between:	 5, 6
'
            ],
            'gt' => [
                'numeric',
                'gt: 4'
            ],
            'gt_field' => [
                'numeric',
                'gt:foo'
            ],
            'gt_str' => [
                'gt:foo_str'
            ],
            'lt' => [
                'numeric',
                'lt: 6'
            ],
            'lt_field' => [
                'numeric',
                'lt: foo '
            ],
            'lt_str' => [
                'lt: foo_str '
            ],
            'gte' => [
                'numeric',
                'gte: 5'
            ],
            'gte_field' => [
                'numeric',
                'gte: foo'
            ],
            'gte_str' => [
                'gte: foo_str'
            ],
            'lte' => [
                'numeric',
                'lte: 5'
            ],
            'lte_field' => [
                'numeric',
                'lte: foo'
            ],
            'lte_str' => [
                'lte: foo_str'
            ],
            'max' => [
                'numeric',
                'max: 20'
            ],
            'max_str' => [
                'max: 5'
            ],
            'size' => [
                'numeric',
                'size: 20'
            ],
            'size_str' => [
                'size: 5'
            ]
        ]
    ],
    '6CcS4PTW7d7ey6koRFqoxQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0e+1000'
        ],
        'validated' => [
            'foo' => '1.0e+1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ]
    ],
    'OkvqgVgjkP26qtDSe7I7zg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0E+1000'
        ],
        'validated' => [
            'foo' => '1.0E+1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ]
    ],
    '0ywU3n0MzbzSdLuuXTpXIA' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0e1000'
        ],
        'validated' => [
            'foo' => '1.0e1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ]
    ],
    'jKjK9Xdj5fPRc2YhYI72Vw' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0E1000'
        ],
        'validated' => [
            'foo' => '1.0E1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'min:3'
            ]
        ]
    ],
    'PqLLtC7RW5mBUHjUm6KwUg' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0e-1000'
        ],
        'validated' => [
            'foo' => '1.0e-1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ]
    ],
    'y3b5nhDweQAMzquY7CC01g' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItAllowsScientificNotationWithinRange:10065',
        'data' => [
            'foo' => '1.0E-1000'
        ],
        'validated' => [
            'foo' => '1.0E-1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ]
    ],
    'KTpRGHWH1CD75inG97g-7A' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testItCanConfigureAllowedExponentRange:10093',
        'data' => [
            'foo' => '1.0e-1000'
        ],
        'validated' => [
            'foo' => '1.0e-1000'
        ],
        'rules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ],
        'expandedRules' => [
            'foo' => [
                'numeric',
                'max:3'
            ]
        ]
    ],
    'e79qhs3V6AE-WdzLiTljbQ' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWhenFails:10153',
        'data' => [
            'text' => 'abc'
        ],
        'validated' => [
            'text' => 'abc'
        ],
        'rules' => [
            'text' => 'string|max:5'
        ],
        'expandedRules' => [
            'text' => [
                'string',
                'max:5'
            ]
        ]
    ],
    'nqlK2yLcWYiWoV3_QGkPag' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWhenFails:10161',
        'data' => [
            'text' => 'abc'
        ],
        'validated' => [
            'text' => 'abc'
        ],
        'rules' => [
            'text' => 'string|max:5'
        ],
        'expandedRules' => [
            'text' => [
                'string',
                'max:5'
            ]
        ]
    ],
    '34zWdJa1Z92JsSEtfeVp9w' => [
        'location' => 'Illuminate\\Tests\\Validation\\ValidationValidatorTest::testWhenPasses:10175',
        'data' => [
            'text' => 'abc'
        ],
        'validated' => [
            'text' => 'abc'
        ],
        'rules' => [
            'text' => 'string|max:5'
        ],
        'expandedRules' => [
            'text' => [
                'string',
                'max:5'
            ]
        ]
    ]
];