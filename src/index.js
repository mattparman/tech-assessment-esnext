import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'parmanguten/test-block', {
    title: 'Matts Test Block (esnext)',
    icon: 'palmtree',
    category: 'layout',

    edit( { className } ) {
        return <p className={ className }>Whats up Automattic! You are in my admin.</p>;
    },

    save() {
        return <p>"Everything should be made as simple as possible, but not simpler."</p>;
    },
} );
