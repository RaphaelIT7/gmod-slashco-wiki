<function name="PlayerPickedLobbySlasher" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Stores the Slasher a player picked in the lobby, both on the player itself and inside <page>SlashCo.LobbyData</page>.AssignedSlashers so it survives a disconnect/reconnect.<br>
		Does nothing outside of the lobby.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
	<args>
		<arg name="ply" type="Player">The player that picked a Slasher</arg>
		<arg name="slasherID" type="string">ID of the picked Slasher</arg>
	</args>
</function>
