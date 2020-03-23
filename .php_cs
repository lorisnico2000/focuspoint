<?php


require __DIR__ . '/.Build/vendor/autoload.php';

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/Classes')
            ->in(__DIR__ . '/Configuration/TCA')
            ->in(__DIR__ . '/Tests')
    )
    ->setRules([
        '@DoctrineAnnotation' => true,
       '@PSR2' => true,
       '@Symfony' => true,
       '@Symfony:risky' => true,
       '@PhpCsFixer' => true,
       '@PhpCsFixer:risky' => true,
       '@PHP71Migration:risky' => true,
       'array_syntax' => ['syntax' => 'short'],
       'cast_spaces' => ['space' => 'none'],
       'concat_space' => ['spacing' => 'one'],
       'declare_equal_normalize' => ['space' => 'single'],
       'dir_constant' => true,
       'function_typehint_space' => true,
       'hash_to_slash_comment' => true,
       'lowercase_cast' => true,
       'modernize_types_casting' => true,
       'native_function_casing' => true,
       'no_alias_functions' => true,
       'no_blank_lines_after_phpdoc' => true,
       'no_empty_phpdoc' => true,
       'no_empty_statement' => true,
       'no_extra_consecutive_blank_lines' => true,
       'no_leading_import_slash' => true,
       'no_leading_namespace_whitespace' => true,
       'no_null_property_initialization' => true,
       'no_short_bool_cast' => true,
       'no_singleline_whitespace_before_semicolons' => true,
       'no_superfluous_elseif' => true,
       'no_trailing_comma_in_singleline_array' => true,
       'no_unneeded_control_parentheses' => true,
       'no_unused_imports' => true,
       'no_useless_else' => true,
       'no_whitespace_in_blank_line' => true,
       'ordered_imports' => true,
       'php_unit_construct' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame'],
       'php_unit_mock_short_will_return' => true,
       'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
       'phpdoc_no_access' => true,
       'phpdoc_no_empty_return' => true,
       'phpdoc_no_package' => true,
       'phpdoc_scalar' => true,
       'phpdoc_trim' => true,
       'phpdoc_types' => true,
       'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
       'return_type_declaration' => ['space_before' => 'none'],
       'single_quote' => true,
       'whitespace_after_comma_in_array' => true,
    ]);
