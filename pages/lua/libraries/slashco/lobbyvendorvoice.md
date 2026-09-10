<function name="LobbyVendorVoice" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Plays a voice line on the item vendor that the given player last used, reacting to the item they just bought.<br>
		Plays a special line instead if the Nightmare Offering is active. Does nothing if the player has no last used item stash.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="ply" type="Player">The player that bought an item</arg>
		<arg name="item" type="string">ID of the item that was bought</arg>
	</args>
</function>
