<?php
/**
 * BuddyPress - Members Single Group Invites
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

// @codingStandardsIgnoreFile
// Allow plugin text domain in theme.
do_action( 'bp_before_group_invites_content' ); ?>

<?php if ( bp_has_groups( 'type=invites&user_id=' . bp_loggedin_user_id() ) ) : ?>

	<h2 class="bp-screen-reader-text">
		<?php esc_html_e( 'Group invitations', 'buddypress' ); ?>
	</h2>

	<ul id="groups-list" class="invites bp-card-list bp-card-list--groups loading-list">

		<?php while ( bp_groups() ) : bp_the_group(); ?>

			<li class="bp-card-list__item bp-card-list--groups__item has-post-thumbnail">

				<div class="card">

					<div class="ov-h">

						<?php if ( ! bp_disable_group_cover_image_uploads() ) : ?>
							<?php $group_cover_image_url = bp_attachments_get_attachment( 'url', array(
								'object_dir' => 'groups',
								'item_id'    => bp_get_group_id(),
							) );

							$group_cover_params = bp_attachments_get_cover_image_settings( 'groups' );

							if ( empty( $group_cover_image_url ) && ! empty( $group_cover_params ) ) {
								$group_cover_image_url = $group_cover_params['default_cover'];
							}

							$group_cover_style = '';
							if ( ! empty( $group_cover_image_url ) ) {
								$group_cover_style = "background-image: url('" . esc_url( $group_cover_image_url ) . "');";
							} ?>
						<?php endif; ?>

						<a href="<?php bp_group_permalink(); ?>">
							<div class="card-img card-img--cover pos-r mt-0 pt-3 pb-3" <?php if ( ! bp_disable_group_cover_image_uploads() ) : ?>style="<?php echo esc_attr( $group_cover_style ); ?>"<?php endif; ?>>
								<?php if ( ! bp_disable_group_avatar_uploads() ) : ?>
									<div class="card-img__avatar">
										<span class="avatar-round-ratio big">
											<?php bp_group_avatar_thumb( 'width=' . bp_core_avatar_thumb_width() . '&height=' . bp_core_avatar_thumb_height() ); ?>
										</span>
									</div> <!-- .card-img__avatar -->
								<?php endif; ?>
							</div> <!-- .card-img -->
						</a>

						<div class="card-body">

							<header class="card-body-header entry-header clearfix">
								<h2 class="entry-title">
									<?php bp_group_link(); ?>
								</h2>
							</header> <!-- .card-body-header -->

							<div class="card-body-meta">
								<?php bp_group_type(); ?> <span class="separator small text-muted">•</span> <?php bp_group_member_count(); ?>
							</div> <!-- .card-body-meta -->

							<div class="item-meta">
								<span class="activity" data-livestamp="<?php bp_core_iso8601_date( bp_get_group_last_active( 0, $group_last_active_args ) ); ?>">
									<?php /* translators: %s: Group last active */ printf( esc_html__( 'active %s', 'buddypress' ), esc_html( bp_get_group_last_active() ) ); ?>
								</span>
							</div>

							<?php
								do_action( 'bp_group_invites_item' );
								$group_last_active_args = array(
									'relative' => false,
								);
							?>

						</div> <!-- .card-body -->

						<div class="card-footer">
							<div class="card-body-actions action group-action">
								<div class="group-button generic-button">
									<a class="accept accept-group" href="<?php bp_group_accept_invite_link(); ?>" data-toggle="tooltip" data-placement="top" title="<?php esc_html_e( 'Accept', 'buddypress' ); ?>"><?php esc_html_e( 'Accept', 'buddypress' ); ?></a>
								</div> <!-- .group-button -->
								<div class="group-button generic-button">
									<a class="reject confirm" href="<?php bp_group_reject_invite_link(); ?>" data-toggle="tooltip" data-placement="top" title="<?php esc_html_e( 'Reject', 'buddypress' ); ?>"><?php esc_html_e( 'Reject', 'buddypress' ); ?></a>
								</div> <!-- .group-button -->
								<?php do_action( 'bp_group_invites_item_action' ); ?>
							</div> <!-- .card-body-actions -->
						</div> <!-- .card-footer -->

					</div> <!-- .ovh -->

				</div> <!-- .card -->

			</li> <!-- .bp-card-list -->

		<?php endwhile; ?>
	</ul> <!-- .bp-card-list__item -->

<?php else : ?>

	<div id="message" class="info">
		<p><?php esc_html_e( 'You have no outstanding group invites.', 'buddypress' ); ?></p>
	</div> <!-- #message -->

<?php endif; ?>

<?php do_action( 'bp_after_group_invites_content' ); ?>
