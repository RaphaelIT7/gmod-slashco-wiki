<function name="SlashCo:SelectOffering" parent="" type="hook">
	<description>
		Called by <page>SlashCo.OfferingVoteSuccess</page> once a new Offering has become active in the lobby, after the vote UI has been ended for all players.<br>
		Used to apply effects tied to a specific Offering, for example enabling the Nightmare Offering's music and alarm lights.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="id" type="number">ID of the Offering that was selected</arg>
	</args>
</function>
