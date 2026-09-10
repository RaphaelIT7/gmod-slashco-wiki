<function name="OfferingVote" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Registers `ply`'s agreement to the currently proposed Offering. Does nothing if `agreement` is falsy.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="ply" type="Player">The player casting their vote.</arg>
		<arg name="agreement" type="boolean">Whether the player agreed to the proposed Offering.</arg>
	</args>
</function>
