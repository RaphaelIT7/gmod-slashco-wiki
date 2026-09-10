<function name="SlashCo:UnselectOffering" parent="" type="hook">
	<description>
		Called by <page>SlashCo.OfferingVoteSuccess</page> right before a different Offering becomes active, if an Offering was already selected in the lobby.<br>
		Used to undo effects that were applied for the previous Offering, for example resetting the Nightmare Offering's music and alarm lights.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="id" type="number">ID of the Offering that is being replaced</arg>
	</args>
</function>
