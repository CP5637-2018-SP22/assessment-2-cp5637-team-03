( function( api ) {

	// Extends our custom "team03" section.
	api.sectionConstructor['team03'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
