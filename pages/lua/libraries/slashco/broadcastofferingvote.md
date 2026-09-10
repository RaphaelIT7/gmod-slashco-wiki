<function name="BroadcastOfferingVote" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Networks that `offeror` has proposed the Offering identified by `offerID` to everyone, so clients can display the ongoing vote.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="offeror" type="Player">The player who proposed the Offering.</arg>
		<arg name="offerID" type="number">ID of the proposed Offering, used to look up its name in `SCInfo.Offering`.</arg>
	</args>
</function>
