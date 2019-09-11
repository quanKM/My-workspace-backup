<?php
require_once __DIR__ . '/PrettierPHPFixer.php';

$finder = PhpCsFixer\Finder::create()
    ->exclude('node_modules')
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->registerCustomFixers([
        (new PrettierPHPFixer()),
    ])
    ->setRules([
        '@PSR2' => true,
        'Prettier/php' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'align_equals' => false,
            'align_double_arrow' => false,
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'lowercase_cast' => true,
        'array_indentation' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'linebreak_after_opening_tag' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'multiline_whitespace_before_semicolons' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_consecutive_blank_lines' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_in_blank_line' => true,
        'no_spaces_around_offset' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'phpdoc_indent' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'single_quote' => true,
        'ternary_to_null_coalescing' => true,
        'whitespace_after_comma_in_array' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'method_argument_space' => ['ensure_fully_multiline' => false],
        'no_break_comment' => false,
        'blank_line_before_statement' => [
            'statements' => ['return'],
        ],
        'braces' => [
            'allow_single_line_closure' => false,
            'position_after_anonymous_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_functions_and_oop_constructs' => 'next',
        ],
    ])
    ->setFinder($finder);
