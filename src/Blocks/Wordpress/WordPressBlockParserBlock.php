<?php

namespace VanOns\Laraberg\Blocks\Wordpress;

/**
 * Class WordPressBlockParserBlock
 *
 * Holds the block structure in memory
 *
 * @since 5.0.0
 */
class WordPressBlockParserBlock
{
    /**
     * Name of block
     *
     * @example "core/paragraph"
     *
     * @since 5.0.0
     * @var string
     */
    public string $blockName;

    /**
     * Optional set of attributes from block comment delimiters
     *
     * @example null
     * @example array( 'columns' => 3 )
     *
     * @since 5.0.0
     * @var array|null
     */
    public ?array $attrs;

    /**
     * List of inner blocks (of this same class)
     *
     * @since 5.0.0
     * @var WordPressBlockParserBlock[]
     */
    public array $innerBlocks;

    /**
     * Resultant HTML from inside block comment delimiters
     * after removing inner blocks
     *
     * @example "...Just <!-- wp:test /--> testing..." -> "Just testing..."
     *
     * @since 5.0.0
     * @var string
     */
    public string $innerHTML;

    /**
     * List of string fragments and null markers where inner blocks were found
     *
     * @example array(
     *   'innerHTML'    => 'BeforeInnerAfter',
     *   'innerBlocks'  => array( block, block ),
     *   'innerContent' => array( 'Before', null, 'Inner', null, 'After' ),
     * )
     *
     * @since 4.2.0
     * @var array
     */
    public array $innerContent;

    /**
     * Constructor.
     *
     * Will populate object properties from the provided arguments.
     *
     * @since 5.0.0
     *
     * @param string $name         Name of block.
     * @param array  $attrs        Optional set of attributes from block comment delimiters.
     * @param array  $innerBlocks  List of inner blocks (of this same class).
     * @param string $innerHTML    Resultant HTML from inside block comment delimiters after removing inner blocks.
     * @param array  $innerContent List of string fragments and null markers where inner blocks were found.
     */
    public function __construct(string $name, array $attrs, array $innerBlocks, string $innerHTML, array $innerContent)
    {
        $this->blockName    = $name;
        $this->attrs        = $attrs;
        $this->innerBlocks  = $innerBlocks;
        $this->innerHTML    = $innerHTML;
        $this->innerContent = $innerContent;
    }
}
