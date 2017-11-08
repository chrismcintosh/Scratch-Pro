<?php

// Get departments and order staff members
$selected_category = get_sub_field('event_category');
$number_of_events = get_sub_field('number_of_events');

$events = tribe_get_events( array(
     'start_date'       => date( 'Y-m-d H:i:s', strtotime( '-1 day' ) ),
     'eventDisplay'     => 'custom',
     'posts_per_page'   => 5,
     'tribe_events_cat' => $selected_category
));


?>
<section class="event-list">
     <div class="wrap">

          <div class="event-section-header">
               <div class="left">
                    <h2>Upcoming Events</h2>
               </div>
               <div class="right">
                    <?php if ($selected_category === '') { ?>
                         <a href="/events/">All Events</a>
                    <?php } else { ?>
                    <a href="/events/category/<?php echo $selected_category; ?>/list/">All Similar Events</a>
                    <?php } ?>
               </div>
          </div>

          <?php // catch if empty
          if ( empty( $events ) ) {
               echo 'No upcoming events right now. Check back later!';
          }

          else { ?>
               <div class="list">
                    <?php foreach( $events as $event ) {?>
                         <div class="event">
                               <a href="<?php the_permalink( $event ); ?>">
                                   <div class="inner">
                                        <div class="action-title">
                                             <?php echo get_the_title( $event ); ?>
                                        </div>
                                        <div class="action-description">
                                             <div class="event-date"><?php echo tribe_get_start_date( $event ); ?></div>
                                             <div class="event-venue"><?php echo tribe_get_venue( $event ); ?></div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                         <?php } ?>
                    </div>
                    <?php } ?>

          </div>
</section>
