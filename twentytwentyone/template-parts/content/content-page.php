<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<main data-s-840f4c7a-fba1-4e4d-a070-1e43865bae33="" class="sd appear">
    <div data-s-ee4846ae-87af-4d37-aaad-1b17a5abb81e="" class="sd appear">
        <h1 data-s-9fc0cedf-0606-4ef6-bcbb-c625e4536442="" data-r-0_0_1_9fc0cedf-0606-4ef6-bcbb-c625e4536442="" class="text sd appear">プライバシーポリシー<br></h1>
        <div data-s-9c5e4abf-2bf0-4c98-811f-857aa4a87651="" class="sd appear">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( ! is_front_page() ) : ?>
                    <header class="entry-header alignwide">
                        <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                        <?php twenty_twenty_one_post_thumbnail(); ?>
                    </header><!-- .entry-header -->
                <?php elseif ( has_post_thumbnail() ) : ?>
                    <header class="entry-header alignwide">
                        <?php twenty_twenty_one_post_thumbnail(); ?>
                    </header><!-- .entry-header -->
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                            'after'    => '</nav>',
                            /* translators: %: Page number. */
                            'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer default-max-width">
                        <?php
                        edit_post_link(
                            sprintf(
                            /* translators: %s: Post title. Only visible to screen readers. */
                                esc_html__( 'Edit %s', 'twentytwentyone' ),
                                '<span class="screen-reader-text">' . get_the_title() . '</span>'
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer><!-- .entry-footer -->
                <?php endif; ?>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
    <div data-s-d038335e-86cf-4807-b992-da41c7f01feb="" class="sd appear">
        <div tabindex="0" data-s-88514ee0-1cc1-4241-b255-9de79fef1c14="" class="sd appear"><a href="/live/BXaxR9DoO7/" data-s-9bc2842c-c968-45c0-aef5-ed6d826f122f="" data-r-0_0_1_1_9bc2842c-c968-45c0-aef5-ed6d826f122f="" class="text link sd appear">ホーム</a><i data-s-0d0a40cb-702d-4d1c-b34e-e6547f384574="" class="icon material-icons sd appear">keyboard_arrow_right</i>
            <p data-s-4b9f26a0-392a-40da-8e01-0ff1363559c3="" data-r-2_0_1_1_4b9f26a0-392a-40da-8e01-0ff1363559c3="" class="text sd appear">プライバシーポリシー</p>
        </div>
    </div>
    <div data-s-c56d575c-8715-4ef7-959d-5940e1887015="" data-r-2_1_8beeface-1531-4df4-ae0f-67ee3892e342_c56d575c-8715-4ef7-959d-5940e1887015="" class="image sd appear">
        <p data-s-0465c9a0-0135-454c-af53-1ab23de55184="" data-r-0_2_1_8beeface-1531-4df4-ae0f-67ee3892e342_0465c9a0-0135-454c-af53-1ab23de55184="" class="text sd appear">使い方や具体的な目標などを詳しくご説明します</p>
        <div data-s-8f60b1e7-2cbd-400d-8fe0-c44f9ee3be47="" class="sd appear"><a href="/live/BXaxR9DoO7/download" data-s-d3b1fd12-e2ea-499b-b3bd-1e8545765bfc="" class="link sd appear"><i data-s-b86a7836-b593-45cc-b8c1-091d3e1edbf1="" class="icon fa fa-file-text-o sd appear"></i>
                <p data-s-fd582e6f-7502-45e6-a6f8-a8015bf4c399="" data-r-1_0_1_2_1_8beeface-1531-4df4-ae0f-67ee3892e342_3e2bfcf4-1535-4212-ba19-f127d04cbed5_fd582e6f-7502-45e6-a6f8-a8015bf4c399="" class="text sd appear">資料請求</p>
            </a><a href="/live/BXaxR9DoO7/contact" data-s-a07e8b9a-2818-4bf4-907d-8d9e5eb99e5c="" class="link sd appear"><i data-s-e89450bf-99e9-4585-83f9-864ce2982b58="" class="icon material-icons sd appear">mail_outline</i>
                <p data-s-7af28872-98ee-4a25-8367-603fe74ce6b0="" data-r-1_1_1_2_1_8beeface-1531-4df4-ae0f-67ee3892e342_87d6952b-7397-4d8b-a612-723a0820480b_7af28872-98ee-4a25-8367-603fe74ce6b0="" class="text sd appear">お問い合わせ</p>
            </a></div>
    </div>
</main>


