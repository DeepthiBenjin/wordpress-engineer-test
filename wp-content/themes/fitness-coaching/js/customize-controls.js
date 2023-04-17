( function( api ) {

	// Extends our custom "fitness-coaching" section.
	api.sectionConstructor['fitness-coaching'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );