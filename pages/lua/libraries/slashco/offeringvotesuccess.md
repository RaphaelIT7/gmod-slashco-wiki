<function name="OfferingVoteSuccess" parent="SlashCo" type="libraryfunc">
	<description>
		Applies the winning Offering vote for the lobby, running the <page>SlashCo:UnselectOffering</page> hook for the previous Offering (if any) and the <page>SlashCo:SelectOffering</page> hook for the new one.<br>
		Ends the vote for every player. Does nothing if the given Offering is already the active one.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="id" type="number">ID of the Offering that won the vote</arg>
	</args>
</function>
