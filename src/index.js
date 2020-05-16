import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'parmanguten/test-block', {
    title: 'Matts Test Block (esnext)',
    icon: 'palmtree',
    category: 'layout',

    edit( { className } ) {
        return <p className={ className }>Hello World, step 2 (from the editor, in green).</p>;
    },

    save() {
        return <p>Hello World, step 2 (from the frontend, in red).</p>;
    },
} );
